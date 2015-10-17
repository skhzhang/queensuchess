<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Home - Queen's Chess Club</title>
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
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="flexslider/flexslider.css" type="text/css">

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="js/jquery-2.1.3.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="flexslider/jquery.flexslider.js"></script>
  <script src="js/custom.js" type="text/javascript"></script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="icons/orange-circle.png" type="icon/png" rel="icon" />

  <!-- Google Analytics tracking
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php //include_once("analyticstracking.php") ?>

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div class="curtain"></div>

<?php
  include ("header.php");
  echo head(0);
?>


<div class="main">
	<div class="container">
		<div class="row">
			<div class="showcase">
				<div class="flexslider">
					<ul class="slides">
						<li><img src="images/IMG_20150929_213345.jpg" /></li>
						<li><img src="images/IMG_20150929_213353.jpg" /></li>
						<li><img src="images/IMG_20150929_213403.jpg" /></li>
						<li><img src="images/IMG_20150929_213431.jpg" /></li>
						<li><img src="images/IMG_20150929_214027.jpg" /></li>
						<li><img src="images/IMG_20150929_214101.jpg" /></li>
						<li><img src="images/IMG_20150929_222811.jpg" /></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		

		<div class="row">
			<div class="box">
				<span class="box-title">Welcome to the Queen's Chess Club!</span>
				<br/>

        <p>This is a place where we learn, think, and develop our chess skills. Home to beginning to master level players, our open form of matchups mixed with a player ladder offers an atmosphere where everyone can prosper. Come out, every Tuesday at 8:30pm, JDUC 352.</p>

        <p>There are many ways to get involved and learn together with social media discussion, weekly meetings to practice playing and a fun and entertaining weekly lecture.</p>

        <p>This year the Canadian University Chess Championships (CUCC) is coming to Queen's. This national tournament is a commemoration of competitive, inter school comradery, and represents a team based forum in which every player is competing to represent their university. This event will see universities across the country featuring their best players, from masters to strong recreational players.</p>

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
  include ("footer.php"); 
  echo foot(0);
?>


<!-- TO TOP -->
<a href="#"><div class='toTop'></div></a>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
