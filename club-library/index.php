<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Chess Club Library - Queen's Chess Club</title>
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
        <span class="box-title">Chess Club Library</span>
        <br/>
        <p>The Queen’s Chess Club has accumulated several chess books that are available to be rented out. The books range in skill set and include beginner and intermediate openings books and several puzzle books. The books can be rented out for 2 weeks by signing it out with a $5 deposit.</p>

        <p>Stay tuned for the chess book catalogue!</p>
      </div>
      <div class="box">
        <span class="box-title">Daily Puzzle</span>
        <br/>
        <br/>
        <iframe width="220" scrolling="no" height="261" frameborder="0" src="http://www.shredderchess.com/online/playshredder/
gdailytactics.php?mylang=en&amp;mysize=22"></iframe> 
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
