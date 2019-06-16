<?php
                    $username = "admin";
              $count = 0;
              $db = mysqli_connect("localhost", "root", "", "mymusic");
            ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
</head>
<body>
<?php
    $query = $_GET['query'];
    // gets value sent over search form
$resultdb = mysqli_query($db, "select * from song where ('namesong' LIKE '%".$query."%')");
while (($row = mysqli_fetch_array($resultdb))!= null){
?>
<div class="col-lg-3">
  <a href="<?php echo $row["nameal"];?>.php">
  <div class="abum-item">
    <div class="abum-img"><img src="<?php echo $row["avataral"];?>" width="127.500" height="127.500"></div>
    <div class="abum-text">
      <p class="title"><?php
      echo $row["nameal"];
    ?></p>
      <div class="all-song">
        <div class="songs">
          <?php
          echo $row["COUNT(`album-song`.idsong)"];
        ?> songs
        </div>
      </div>
    </div>
  </div>
  </a>
</div>
<?php
}
?>
</body>
</html>
