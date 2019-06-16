<!DOCTYPE html>
<html lang="vi">
  <head>
    <title>Mymusic</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- Favicon-->
    <link ref="icon" sizes="16x16" href="">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <?php
                        $username = "admin";
            		  $count = 0;
            		  $db = mysqli_connect("localhost", "root", "", "mymusic");
            		?>
    <div class="page-body">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-9 pad-left">
            <div class="content-two">
              <div class="banner">
                <div class="item-banner"><img src="https://photo-zmp3.zadn.vn/banner/4/f/3/3/4f33282d3ec07e7b9b03ba274d8546ca.jpg"></div>
                <div class="item-banner"><img src="https://photo-zmp3.zadn.vn/banner/5/d/3/f/5d3f1e195cf4b21fce299865d989eca6.jpg"></div>
                <div class="item-banner"><img src="https://photo-zmp3.zadn.vn/banner/b/1/d/f/b1df25c3aa136edf7c54a271bceef8fb.jpg"></div>
                <div class="item-banner"><img src="https://photo-zmp3.zadn.vn/banner/b/5/f/f/b5ffd7c091c08e4d9b60be1059307a35.jpg"></div>
              </div>
              <div class="header-search-wrap">
                <form>
                  <div class="header-search-group">
                    <label><a class="fa fa-search"></a>
                      <input type="text" autocomplete="off" aria-autocomplete="list" aria-controls="react-autowhatever-1" placeholder="Nhập tên bài hát, ca sĩ hoặc video…" value="" class="form-control z-input-placeholder">
                    </label>
                  </div>
                </form>
              </div>
              <div class="list-abum">
                <div class="container">
                  <div class="row">
                  
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 pad-right">
            <div class="content-three">
              <div class="play-song">
                <div class="background-song"><img src="images/hoang-hon-1.jpg"></div>
                <div class="play-pause"><i class="fa fa-backward" onclick="forward();"></i><i class="fa fa-play pause" onclick="playcurrAudio();"></i><i class="fa fa-forward" onclick="reward();"></i></div>
                <div class="name-song">
                  <p class="text-name">I Do</p><span class="author">911 Band</span>
                </div>
              </div>
              <div class="list-song">
              			<?php 
              			   $id = 2;
                	       $resultdb = mysqli_query($db, "select * from song");
                		  while (($row = mysqli_fetch_array($resultdb))!= null){
                		?>
                <div class="item-song" onclick="playAudio(<?php echo $row['idsong']?>)">
                  <div class="item-play">
                  <audio id="<?php echo $row['idsong']?>-song">
                	<source src="<?php echo $row['path']?>" type="audio/mp3">
                	</audio>
                  <i class="fa fa-play" id="button-play"></i>
                    <div class="name-song">
                      <p class="text-name">
                            <?php 
                              echo $row["namesong"];
                            ?>
                      </p><span class="author">
                            <?php 
                              echo $row["tacgia"];
                            ?>
                          </span>
                    </div>
                  </div>
                  <div class="time-song">
                  			<?php 
                              echo $row["tg"];
                            ?>
                   </div>
                </div>
                	<?php 
            		  }
            		?>
            		
            		
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/libs/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/libs/bootstrap-4.0.0.min.js"></script>
    <script type="text/javascript" src="js/libs/slick.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script>
	var x;
    function playAudio(id) { 
        x = document.getElementById(id+"-song");
        document.getElementById("")
    }
    
    function playcurrAudio() { 
    	if(x.paused){
        	x.play();
        }
        else
        {
            x.pause();
        }
    }

	function forward(){
		x.currentTime = x.currentTime - 10;
	}
    
    function reward(){
		x.currentTime = x.currentTime + 10;
    }

    $(fa-search).click(function(){
    	$(document).ready(function () {
            jQuery(".fa-search").click(function(){
                var data_test = $(".z-input-placeholder").value;
                $.post("php.php", {in : data_test},function(data){
                  $(".row").html(data);
                })
            });
        });
    })
    </script>
  </body>
</html>