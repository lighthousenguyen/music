<?php 
    $db = mysqli_connect("localhost", "root", "", "mymusic");
    $tim = $_POST['in'];
    $resultdb = mysqli_query($db, "SELECT * FROM `song` WHERE namesong LIKE '%$tim%'");
            		  while (($row = mysqli_fetch_array($resultdb))!= null){
            		?>
            		
                    <div class="col-lg-3">
                    <a onclick="playAudio(<?php echo $row['idsong']?>);">
                      <div class="abum-item">
                        <div class="abum-img"><img src="<?php echo $row["avatarsong"];?>" width="127.500" height="127.500"></div>
                        <div class="abum-text">
                          <p class="title"><?php 
                    		  echo $row["namesong"];
                    		?></p>
                          <div class="all-song">
                            <span class="songs">
                            	<?php 
                        		  echo $row["tacgia"];
                        		?>
                            </span>
                            <span><i class="fa fa-heart" onclick="load_ajax();"> 1300</i></span>
                          </div>
                        </div>
                      </div>
                      </a>
                    </div>
                    
                    <?php 
            		  }
            		?>