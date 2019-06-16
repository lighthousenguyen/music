<!DOCTYPE html>
<html lang="vi">
  <head>
    <title>Mymusic</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="keywords" content="">
    <meta name="description" content="Đặt phòng khách sạn tại Vntrip.vn với hơn 8.000 khách sạn Việt Nam. Đặt trực tuyến hoặc gọi 1800-XXX. XÁC NHẬN NGAY qua SMS. Hỗ trợ chu đáo 24/7. Thanh toán an toàn &amp; đa dạng.">
    <!-- Favicon-->
    <link ref="icon" sizes="16x16" href="">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <!--Created by Tuan on 02/11/2018.
    -->
    <div class="page-body">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 pad-left">
            <div class="content-one">
              <div class="imformation-member">
                <div class="member">
                    <?php
                        $username = "admin";
            		  $count = 0;
            		  $db = mysqli_connect("localhost", "root", "", "mymusic");
            		?>
                  <div class="avatar"><img src="<?php
            		 $resultdb = mysqli_query($db, "select * from user where username ='$username'");
            		 $row = mysqli_fetch_array($resultdb);
        			echo $row["avatar-us"];
            		?>">
            		</div>
                  <div class="name">
                    <p><?php echo $username?></p>
                  </div>
                  <div class="text-imformation">
                    <div class="item-text">
                      <p>Songs</p><span class="orange">

                      <?php
                  		    $resultdb = mysqli_query($db, "SELECT count(idsong) FROM `user-song` WHERE idus =1");
                  		    $row = mysqli_fetch_array($resultdb);
              			      echo $row["count(idsong)"];
                  		?></span>
                    </div>
                    <div class="item-text">
                      <p>Friends</p><span class="orange">
						<?php
                		 $resultdb = mysqli_query($db, "SELECT (count(*)/2) FROM `friend` WHERE iduser1 =1 or iduser2 = 1");
                		 $row = mysqli_fetch_array($resultdb);
                		 echo number_format($row["(count(*)/2)"]);
                		?>
						</span>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <ul class="menu-content">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">My music</a></li>
                    <li><a href="#">Friends</a></li>
                    <li><a href="#">Genres</a></li>
                  </ul>
                </div>
              </div>
              <div class="content-item d-none d-sm-block">
                <div class="news-feed__title">
                  <h3>news feed</h3>
                </div>
                <div class="news-feed__item">
                  <div class="news-feed__item__member">
                    <div class="feed__item__member"><img src="images/avatar.jpg"></div>
                  </div>
                  <div class="news-feed__item__content">
                    <div class="news-feed__item__img"><img src="http://cdn.shopify.com/s/files/1/1158/9490/products/C000007153-PAR-ZOOM_395b5fb0-dab6-47e3-99f3-a662b1205aef_800x.jpg?v=1524568121"></div>
                    <div class="news-feed__item__content__title">
                      <h4> ahihi ahihi</h4>
                    </div>
                    <div class="news-feed__item__content__text">
                      <p>Lorem ipsum dolor sit amet, con adipisicing elit consectetur adipisicing elit</p>
                    </div>
                  </div>
                </div>
                <div class="news-feed__item">
                  <div class="news-feed__item__member">
                    <div class="feed__item__member"><img src="images/avatar.jpg"></div>
                  </div>
                  <div class="news-feed__item__content">
                    <div class="news-feed__item__name"><span class="name">Janice Harris</span><span>add new song</span></div>
                    <div class="news-feed__item__content__ablum">
                      <div class="content__ablum-avar"><img src="images/1.jpg">
                        <div class="content__ablum-name">
                          <p class="name">LinKin Park</p><span>Given up</span>
                        </div>
                      </div>
                      <div class="content__ablum-all">320</div>
                    </div>
                  </div>
                </div>
                <div class="news-feed__item">
                  <div class="news-feed__item__member">
                    <div class="feed__item__member"><img src="images/avatar.jpg"></div>
                  </div>
                  <div class="news-feed__item__content">
                    <div class="news-feed__item__name"><span class="name">Janice Harris</span><span>add new song</span></div>
                    <div class="news-feed__item__content__ablum">
                      <div class="content__ablum-avar"><img src="images/1.jpg">
                        <div class="content__ablum-name">
                          <p class="name">LinKin Park</p><span>Given up</span>
                        </div>
                      </div>
                      <div class="content__ablum-all">320</div>
                    </div>
                  </div>
                </div>
                <div class="news-feed__item">
                  <div class="news-feed__item__member">
                    <div class="feed__item__member"><img src="images/avatar.jpg"></div>
                  </div>
                  <div class="news-feed__item__content">
                    <div class="news-feed__item__name"><span class="name">Janice Harris</span><span>add new song</span></div>
                    <div class="news-feed__item__content__ablum">
                      <div class="content__ablum-avar"><img src="images/1.jpg">
                        <div class="content__ablum-name">
                          <p class="name">LinKin Park</p><span>Given up</span>
                        </div>
                      </div>
                      <div class="content__ablum-all">320</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
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
                    <label><i class="fa fa-search"></i>
                      <input type="text" autocomplete="off" aria-autocomplete="list" aria-controls="react-autowhatever-1" placeholder="Nhập tên bài hát, ca sĩ hoặc video…" value="" class="form-control z-input-placeholder">
                    </label>
                  </div>
                </form>
              </div>
              <div class="list-abum">
                <div class="container">
                  <div class="row">
                  <?php
            		 $resultdb = mysqli_query($db, "select *, count(`album-song`.idsong) from album, `album-song` where album.idal =1 and album.idal = `album-song`.idal");
            		  while ((($row = mysqli_fetch_array($resultdb))!= null) && ($count <= 10)){
            		      $count++;
            		?>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="<?php echo $row["avatar-al"];?>"></div>
                        <div class="abum-text">
                          <p class="title"><?php
                    		  echo $row["nameal"];
                    		?></p>
                          <div class="all-song">
                            <div class="songs">
                            	<?php
                        		  echo $row["count(`album-song`.idsong)"];
                        		?> songs
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
            		  }
            		?>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/6/d/9/f/6d9f8bbb171c5727853980544995aec8.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/f/d/7/f/fd7fd5edd8992d1cd13dc319201922e0.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/e/9/c/e/e9ce125352b9936b249855db1fd64ae9.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/7/0/8/7/7087dea44528320ab6f04c49a4fe4c8d.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_png/covers/1/9/19a6a9085bc66dde26a8720afef6f892_1519271687.png"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/0/b/1/1/0b116bb3891a2cf00d1afeb46527ee2d.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/5/b/4/f/5b4fdb95bfad4abf755e8769bc5a68a6.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/5/a/7/f/5a7fc009546f90e7c96689607b9e62e0.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/e/b/a/a/ebaa3c788aed79aa3b33b27771bcf609.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/2/9/4/0/2940dc2ed3b50eff537569e52af657d8.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/6/d/9/f/6d9f8bbb171c5727853980544995aec8.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/d/4/2/3/d4232d40fcebf5a96803d98f49458026.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/6/d/9/f/6d9f8bbb171c5727853980544995aec8.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/6/d/9/f/6d9f8bbb171c5727853980544995aec8.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="abum-item">
                        <div class="abum-img"><img src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/e/4/6/1/e4612681e56964cb5e534190e23156f0.jpg"></div>
                        <div class="abum-text">
                          <p class="title">Awesome playlist or ablum</p>
                          <div class="all-song">
                            <div class="songs">56 songs</div>
                            <div class="like-song"></div><i class="fa fa-heart"> 1300</i>
                          </div>
                          <div class="list-kind">#rap #jazz #pop #rock...</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 pad-right">
            <div class="content-three">
              <div class="play-song">
                <div class="background-song"><img src="images/hoang-hon-1.jpg"></div>
                <div class="play-pause"><i class="fa fa-backward"></i><i class="fa fa-play pause"></i><i class="fa fa-forward"></i></div>
                <div class="name-song">
                  <p class="text-name">I Do</p><span class="author">911 Band</span>
                </div>
              </div>
              <div class="list-song">
              			<?php
                	       $resultdb = mysqli_query($db, "select * from song where idsong =1");
                		  while (($row = mysqli_fetch_array($resultdb))!= null){
                		?>
                <div class="item-song" onclick="playAudio(<?php echo $row['idsong']?>)">
                  <div class="item-play">
                  <audio src="<?php echo $row['idsong']?>-song">
                	<source src="<?php echo row['path']?>" type="audio/mp3">
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

            		<?php
                		$resultdb = mysqli_query($db, "select * from song where idsong =1");
                		while (($row = mysqli_fetch_array($resultdb))!= null){
            		?>
                <div class="item-song">
                  <div class="item-play">
                  <?php
                  echo "<audio id=\"".$row['idsong']."-song\">";
                  echo "<source src='".$row['path']."' type=\"audio/mp3\">";
                  echo "</audio>";
                  ?>
				<i class="fa fa-play" onclick="playAudio(<?php echo $row['idsong']?>)"></i>
                    <div class="name-song">
                      <p class="text-name"><?php echo $row['namesong']?></p><span class="author"><?php echo $row['tacgia']?></span>
                    </div>
                  </div>
                  <div class="time-song"><?php echo $row['tg']?></div>
                </div>
                <?php
                		}
                ?>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">Mình Yêu nhau từ kiếp nào</p><span class="author">Quang trung</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">Một bước yêu vạn dặm đau</p><span class="author">Mr.siro</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">I Do</p><span class="author">911 Band</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">I Do</p><span class="author">911 Band</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">I Do</p><span class="author">911 Band</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">I Do</p><span class="author">911 Band</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">I Do</p><span class="author">911 Band</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">I Do</p><span class="author">911 Band</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">I Do</p><span class="author">911 Band</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">I Do</p><span class="author">911 Band</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">I Do</p><span class="author">911 Band</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">I Do</p><span class="author">911 Band</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">I Do</p><span class="author">911 Band</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">I Do</p><span class="author">911 Band</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                  <div class="time-song">3.45</div>
                </div>
                <div class="item-song">
                  <div class="item-play"><i class="fa fa-play"></i>
                    <div class="name-song">
                      <p class="text-name">I Do</p><span class="author">911 Band</span>
                    </div>
                  </div>
                  <div class="time-song">3.45</div>
                  <div class="time-song">3.45</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Created by Tuan on 02/11/2018.
    -->
    <script type="text/javascript" src="js/libs/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/libs/bootstrap-4.0.0.min.js"></script>
    <script type="text/javascript" src="js/libs/slick.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script>

    function playAudio(id) {
        var x = document.getElementById(id+"-song");
        if(x.paused){
        	x.play();
        	$("#button-play").attr("class", "fa fa-play");
        }
        else
        {
            x.pause();
        	$("#button-play").attr("class", "fa fa-pause");
        }

    }

    function load_ajax(){
        $.POST("php.php", {idus: '1', idsong: '2'})
        $.post("php.php",{idus: '1', idsong: '2'}, function(data){
        	$(".fa fa-heart").html(data);
        });

    }
    $(fa-search).click(function(){
    	$(document).ready(function () {
            jQuery(".fa-search").click(function(){
                var data_test = $(".z-input-placeholder").value;
                $.POST("php.php",{in : in},function(data){
                  $.(".row").html(data);
                })
            });
        });
    })
    </script>
  </body>
</html>
