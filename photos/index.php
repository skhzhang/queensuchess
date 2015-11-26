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
  <link href="../icons/logo2-square.png" type="icon/png" rel="icon" />

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
            <li><img src="../images/11990162_10153730490834038_1498407561_o.jpg" /></li>
            <li><img src="../images/12165191_10153730491079038_1072037453_o.jpg" /></li>
            <li><img src="../images/12168832_10153730490929038_1866692307_o.jpg" /></li>
            <li><img src="../images/12168852_10153730490694038_2077689242_o.jpg" /></li>
            <li><img src="../images/12169385_10153730491049038_332831427_o.jpg" /></li>
            <li><img src="../images/12170833_10153730490874038_1454958703_o.jpg" /></li>
            <li><img src="../images/12170955_10153730490504038_1971595249_o.jpg" /></li>
            <li><img src="../images/12181047_10153747756129038_461616278_o.jpg" /></li>
            <li><img src="../images/12181829_10153747756084038_1273616946_n.jpg" /></li>
            <li><img src="../images/12185890_10153747756104038_953233843_o.jpg" /></li>
            <li><img src="../images/12188534_10153747756079038_837502130_n.jpg" /></li>
            <li><img src="../images/12190180_10153747756114038_616183106_o.jpg" /></li>
            <li><img src="../images/12190461_10153747756099038_202447134_o.jpg" /></li>
            <li><img src="../images/IMG_20150929_213345.jpg" /></li>
            <li><img src="../images/IMG_20150929_213353.jpg" /></li>
            <li><img src="../images/IMG_20150929_213403.jpg" /></li>
            <li><img src="../images/IMG_20150929_213431.jpg" /></li>
            <li><img src="../images/IMG_20150929_214027.jpg" /></li>
            <li><img src="../images/IMG_20150929_214101.jpg" /></li>
            <li><img src="../images/IMG_20150929_222811.jpg" /></li>
          </ul>
        </div>
        <div id="carousel" class="flexslider">
          <ul class="slides">
            <li><img src="../images/11990162_10153730490834038_1498407561_o.jpg" /></li>
            <li><img src="../images/12165191_10153730491079038_1072037453_o.jpg" /></li>
            <li><img src="../images/12168832_10153730490929038_1866692307_o.jpg" /></li>
            <li><img src="../images/12168852_10153730490694038_2077689242_o.jpg" /></li>
            <li><img src="../images/12169385_10153730491049038_332831427_o.jpg" /></li>
            <li><img src="../images/12170833_10153730490874038_1454958703_o.jpg" /></li>
            <li><img src="../images/12170955_10153730490504038_1971595249_o.jpg" /></li>
            <li><img src="../images/12181047_10153747756129038_461616278_o.jpg" /></li>
            <li><img src="../images/12181829_10153747756084038_1273616946_n.jpg" /></li>
            <li><img src="../images/12185890_10153747756104038_953233843_o.jpg" /></li>
            <li><img src="../images/12188534_10153747756079038_837502130_n.jpg" /></li>
            <li><img src="../images/12190180_10153747756114038_616183106_o.jpg" /></li>
            <li><img src="../images/12190461_10153747756099038_202447134_o.jpg" /></li>
            <li><img src="../images/IMG_20150929_213345.jpg" /></li>
            <li><img src="../images/IMG_20150929_213353.jpg" /></li>
            <li><img src="../images/IMG_20150929_213403.jpg" /></li>
            <li><img src="../images/IMG_20150929_213431.jpg" /></li>
            <li><img src="../images/IMG_20150929_214027.jpg" /></li>
            <li><img src="../images/IMG_20150929_214101.jpg" /></li>
            <li><img src="../images/IMG_20150929_222811.jpg" /></li>
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

<!-- TO TOP -->
<a href="#"><div class='toTop'></div></a>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
