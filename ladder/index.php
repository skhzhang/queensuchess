<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Ladder - Queen's Chess Club</title>
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
        <span class="box-title">Chess Club Ladder</span>
        <br/>
        <p>At Tuesday meetings, one of the ways that we stimulate a more competitive nature to club games is the inclusion of a ladder system. In this system, players are ranked on a relative measure of past performance within the club, such that they are more easily able to find games that are at their skill level.</p>

        <p>The players are ranked in the table, from top (ranked highest) to bottom (ranked lowest). Contact us today to get into the ladder action!</p>

        <?php

          include "Ladder.php";    // Ladder class
          $ladder = new Ladder("ladderrankings.txt"); // pull ladder data from ladderrankings.txt

          // uncomment line below to set the update time manually
          // $ladder->setUpdateTime("Halloween 2015");

          echo $ladder;

        ?>

        <p>*<strong>Rules:</strong> You can play a player 3 places above and below your current ranking. Each ladder game at club meetings will be 5-10 minutes in length. When you beat a player ranked higher than you, you switch positions with them and if you lose or tie against someone ranked higher than you, the rankings stay the same.</p>
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
