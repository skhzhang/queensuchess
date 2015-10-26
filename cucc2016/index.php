<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>CUCC 2016 - Queen's Chess Club</title>
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
        <span class="box-title">Canadian Universities Chess Championship (CUCC) 2016 Information</span>
        <br/>
        <br/>
        <strong>Date:</strong> January 9th and 10th, 2016

        <br/><br/><strong>Registration Fees:</strong>
        <ul>
          <li>$120 for the first team and $100 for additional teams</li>
          <li>$130 for the first team and $110 for additional teams after December 6th, 2015</li>
          <li>$150 for the first team and $120 for additional teams after January 3rd, 2016</li>
        </ul>

        <strong>Location:</strong> MacGivallary-Brown Hall 218 Barrie Street, Kingston, Ontario

        <iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=%20MacGivallary-Brown%20Hall&key=AIzaSyAI1lxnNCbqGmxqLcma8uhfqXGfB2R8Dgk" allowfullscreen></iframe>

        <br/><br/><strong>Tournament Format:</strong>
        <ul>
          <li>5 rounds Team Swiss (Teams of 4 players)</li>
          <li>Teams are allowed but not required to have a fifth player on their team</li>
          <li>Teams can sub in the fifth player as they please</li>
        </ul>

        <strong>Eligibility:</strong>
        <ul>
          <li>All tournament members must be university students or staff</li>
          <li>All tournament members must be CFC members</li>
        </ul>

        <strong>Schedule:</strong>
        <ul>
          <li>Saturday January 9th, 2016
            <ul>
              <li>Registration – 9:00-9:30 am</li>
              <li>Round 1 – 9:30 am</li>
              <li>Round 2 – 1:00 pm</li>
              <li>Round 3 – 5:30 pm</li>
            </ul>
          </li>
          <li>Sunday January 10th, 2016
            <ul>
              <li>Round 4 – 9:00 am</li>
              <li>Round 5 – 1:30 pm</li>
            </ul>
          </li>
        </ul>

        <strong>Time Control:</strong>
        <ul>
          <li>60 min + 30 sec/move for Round 1</li>
          <li>90 min + 30 sec/move for Rounds 2 to 5</li>
        </ul>

        <strong>Hotel:</strong> There are two hotel options: The Confederation Place Hotel and the Holiday Inn. For more information on the hotels <a href="hotels.php">please visit the hotel tab</a>
        
      </div>
      <div class="container-right">
        <div class="box">
          <span class="box-title" id="registration">Registration:</span>

            <br/>
            <br/>

            <a href="https://docs.google.com/forms/d/1bXiGHb_QuI34B4fIpvA5ghSEkabnevMsOEEppzOv6yU/viewform?usp=send_form"><button class="custom">Register Now</button></a>

            <br/>
            <br/>

            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick"/>
              <input type="hidden" name="hosted_button_id" value="BMVEXLPGKU2KL"/>
              <input type="hidden" name="on0" value="Team Registration"/>
              Team Registration
              <br/>
              <select name="os0">
                <option value="1 team">1 team $120.00 CAD</option>
                <option value="2 teams">2 teams $220.00 CAD</option>
                <option value="3 teams">3 teams $320.00 CAD</option>
              </select>
              <br/>
              <input type="hidden" name="currency_code" value="CAD"/>
              <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"/>
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"/>
            </form>
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
