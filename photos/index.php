<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Photos - Queen's Chess Club</title>
  <meta name="author" content="Queen's Chess Club">
  <meta name="Description" content="Home of the Queen's University Chess Club">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Brawler' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="../css/skeleton.css">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="../flexslider/flexslider.css" type="text/css">

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="../js/jquery-2.1.3.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../flexslider/jquery.flexslider.js"></script>
  <script src="../js/custom.js" type="text/javascript"></script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="../logo.png" type="icon/png" rel="icon" />

  <!-- Google Analytics tracking
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php //include_once("analyticstracking.php") ?>

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


<?php 
  include ("../header.php");
  echo head(1);
?>


<div class="main">
  <div class="container">
    
    <div class="row">
      <div class="box">
        <span class="box-title"n>Photos</span>
        <br/>
        <br/>

        <div id="slider" class="flexslider">
          <ul class="slides">
            <li><img src="../images/IMG_20150929_213345.jpg" /></li>
            <li><img src="../images/IMG_20150929_213353.jpg" /></li>
            <li><img src="../images/IMG_20150929_213403.jpg" /></li>
            <li><img src="../images/IMG_20150929_213431.jpg" /></li>
            <li><img src="../images/IMG_20150929_214027.jpg" /></li>
            <li><img src="../images/IMG_20150929_214101.jpg" /></li>
            <li><img src="../images/IMG_20150929_222811.jpg" /></li>
            <!-- items mirrored twice, total of 12 -->
          </ul>
        </div>
        <div id="carousel" class="flexslider">
          <ul class="slides">
            <li><img src="../images/IMG_20150929_213345.jpg" /></li>
            <li><img src="../images/IMG_20150929_213353.jpg" /></li>
            <li><img src="../images/IMG_20150929_213403.jpg" /></li>
            <li><img src="../images/IMG_20150929_213431.jpg" /></li>
            <li><img src="../images/IMG_20150929_214027.jpg" /></li>
            <li><img src="../images/IMG_20150929_214101.jpg" /></li>
            <li><img src="../images/IMG_20150929_222811.jpg" /></li>
            <!-- items mirrored twice, total of 12 -->
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- FOOTER -->
<?php
  include ("../footer.php"); 
  echo foot(1);
?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
