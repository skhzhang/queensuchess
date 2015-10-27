<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Contact - Queen's Chess Club</title>
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
        <span class="box-title">Contact</span>
        <br/>
        <p>The first step is to contact us and come to the weekly meetings!</p>

        <p>
          <strong>Meetings</strong> - JDUC 352 @ 8:30pm on Tuesdays
          <br/>
          <strong>Contact</strong> - <a href="mailto:queenschess@outlook.com">queenschess@outlook.com</a>
          <br/>
          <strong>Club President</strong> - Simon Gladstone (<a href="mailto:simon.gladstone@queensu.ca">simon.gladstone@queensu.ca</a>)
        </p>

        <p>We hope to be hearing from you!</p>
      </div>
      <div class="box">
        <span class="box-title">Daily Puzzle</span>
        <br/>
        <br/>
        <iframe width="220" scrolling="no" height="261" frameborder="0" src="http://www.shredderchess.com/online/playshredder/gdailytactics.php?mylang=en&amp;mysize=22"></iframe> 
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
