<?php
function foot($directoryLevel) {

	$directoryString = "./";

	for ($i = 0; $i < $directoryLevel; $i += 1) {
		$directoryString = "../" . $directoryString;
	}

	$returnValue = <<<EOT

<footer>
	<div class="footer-top">
		<div class="container">
			<div class="four columns footer-box">
				<span class="title"><a href="{$directoryString}">Queen's Chess Club</a></span>
				<ul>
					<li class="links"><a href="{$directoryString}">Home</a></li>
					<li class="links"><a href="{$directoryString}about">About</a></li>
					<li class="links"><a href="{$directoryString}contact">Contact</a></li>
					<li class="links"><a href="{$directoryString}photos">Photos</a></li>
					<li class="links"><a href="{$directoryString}partners">Partners</a></li>
					<li class="links"><a href="{$directoryString}puzzles">Daily Puzzles</a></li>
					<li class="links"><a href="{$directoryString}cucc2016">CUCC 2016</a></li>
				</ul>
			</div>
			<div class="four columns footer-box">
				<span class="title">Connect with us</span>
				<ul>
					<li class="links"><a href="https://www.facebook.com/groups/130578570469174/"><img src="{$directoryString}icons/FB-f-Logo__blue_64.png"> &nbsp; Facebook</a></li>
					<li class="links"><a href="{$directoryString}">AMS Clubs</a></li>
				</ul>
			</div>
			<div class="four columns footer-box">
				<span class="title">Meeting Location</span>
				<br/>
				<br/>
				<p class="footer-text">We meet Tuesday nights in the <strong>JDUC 352</strong>.</p>
				<p class="footer-text">Whether you are just learning the game or you are a seasoned veteran, come on out. The club is a great place to meet new people and improve your game.</p>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="two columns">
				&nbsp;
			</div>
			<div class="eight columns">
				Copyright &copy; 2015 Queen's Chess Club. Website designed and developed by <a href="http://simonkhzhang.me">Simon Zhang</a>
			</div>
			<div class="two columns">
				&nbsp;
			</div>
		</div>
	</div>
</footer>

EOT;

return $returnValue;

}
?>