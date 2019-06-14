<?php
// phplayer - a php frontend to foobar 2000, and (hopefully) other players
// Copyright (C) 2006  Jeremiah Dodds (kaens, apatheticagnostic) 

// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.

// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.

// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

// Contact me at apatheticagnostic@gmail.com for bug info, feature requests, hate mail, all of that fluff.



class player {
	
	public function __construct() {
		if(! file_exists('./playerConfig.ini')) {
			echo "You are being redirected to the configuration page<br><br>";
			echo "<meta HTTP-EQUIV='refresh' content=1;url='config.php'>";
		}else{
			$this->readConfig('playerConfig.ini');
		}
	}
		
	/**	show a directory listing in a drop-down menu.
	/	args: directory to show, name for the form (for processing and all)
	/	sets a session variable equivalent to the path that it changed to. this is useful for actually playing songs.
	**/
	private function showDirInDropdown($directory, $formName) {
		$IP = "main.php";
		
		chdir($directory);
		$_SESSION['lastDir'] = getcwd();
		
		$list = scandir(".");
		
		
		
		echo "<form class='$formName' action=\"$IP\" method=\"post\">";
		
		echo "<select name=\"$formName\">";
		
		//dont display . and ..
		for($i = 2; $i < count($list); $i++) {
			echo "<br />";
			echo "<option value=\"{$list[$i]}\">";
			echo "$list[$i]";
			echo "</option>";
		}
		echo "</select>";
		
		if($formName != 'song') {	
			echo "<input type=\"submit\" value=\"Browse\" name=\"browse\">";
		}
		if($formName != 'band'){
			echo "<input type=\"submit\" value=\"Add\" name=\"add\">";
		}
		echo "</form>";
	}
	
	//reads a configuration file and puts the values in it into an array
	private function readConfig($file){
		if (file_exists($file)) {
			$confValues = parse_ini_file($file);
			foreach($confValues as $key => $value) {
				$_SESSION["$key"] = $value;
			}
		}
	}	
	
	//successfully execute a command in the background, regardless of operating systems
	//args are explanatory
	private function execInBackground($path, $exe, $args = "") {
	   	
	  
	  	
	    	if (substr(php_uname(), 0, 7) == "Windows"){
			if (file_exists($path . $exe)) {
	    			chdir($path);
	    			pclose(popen("start \"bla\" \"" . $exe . "\" " . stripslashes($args), "r"));   
	    		}
	       	} else {
			
// 		       	//DEBUGGING
// 			    	$fh = fopen("./args.log", 'w') or die("ERRER");
// 				fwrite($fh, "$exe \n$args\n\n");
// 				fwrite($fh, "{$_SESSION['homeDir']}\n\n");
				
				addcslashes($args, "\-");
				//handle specially-called players first
				if($exe == 'dcop amarok player') {
					$adding = strstr($args, 'addMedia');
					if($adding == false) {
					 	exec("DISPLAY=:0.0 HOME={$_SESSION['homeDir']} dcop amarok player $args");	
					}else
						exec("DISPLAY=:0.0 HOME={$_SESSION['homeDir']} dcop amarok playlist $args");
				}else {
	        			exec("$exe $args");   
	        		}
	        	 
	       	}
	   	
	}
	
	public function handleButtons() {
		foreach($_POST as $key => $value){
			switch($key) {
				case 'play':
					$arg = $_SESSION['play'];
					break;
				case 'pause':
					$arg = $_SESSION['pause'];
					break;
				case 'stop':
					$arg = $_SESSION['stop'];
					break;
				case 'previous':
					$arg = $_SESSION['previous'];
					break;
				case 'next':
					$arg = $_SESSION['next'];
					break;
			}
		}
		if($arg) {  
			$this->execInBackground($_SESSION['installDir'], $_SESSION['player'], $arg); 
			echo '<meta HTTP-EQUIV="refresh" content=0;url="main.php">';
		}
	
	}
	
	//create a form with multiple submit buttons
	public function createMultipleButtonForm($names) {
		echo "<form action=\"$IP\" method=\"post\">";
		for($i = 0; $i < count($names); $i++) {
			echo "<input type=\"submit\" value=\"$names[$i]\" name=\"$names[$i]\">";
		}
		echo "</form>";
	}
	
	public function showMusicDirs() {
		$this->showDirInDropdown($_SESSION['musicDir'], "band");
	
		if($_POST['band']){	
			$newDir = $_SESSION['lastDir'] . '/' . $_POST['band'];
			$_SESSION['band'] = $_POST['band'];
			$this->showDirInDropdown($newDir, "album");
		}
	
		if($_POST['album']) {
			if($_POST['add']) {
				$path = $_SESSION['musicDir'] . $_SESSION['band'] . '/' . $_POST['album'];
				$args = $_SESSION['add'] . " " . '"' . $path . '"';
				$this->execInBackground($_SESSION['installDir'], $_SESSION['player'], $args);
				//force a refresh	
				echo '<meta HTTP-EQUIV="refresh" content=0;url="main.php">';
			}else {
			
		
				$newDir = $_SESSION['lastDir'] . '/' . $_SESSION['band'];
				$this->showDirInDropdown($newDir, "album");	
		
				$newDir = $_SESSION['lastDir'] . '/' . $_POST['album'];
				$_SESSION['album'] = $_POST['album'];
				$this->showDirInDropDown($newDir, "song");
			}
		
		}
	
		if($_POST['song']) {
			$songPath = $_SESSION['musicDir']  . $_SESSION['band'] . '/' . $_SESSION['album'] . '/' . $_POST['song'];
			$args = $_SESSION['add'] . " " . '"' . $songPath . '"';
			$this->execInBackground($_SESSION['installDir'], $_SESSION['player'], $args);
		
			//force a refresh	
			echo '<meta HTTP-EQUIV="refresh" content=0;url="main.php">';
		}
	}
	
}



	
?>	