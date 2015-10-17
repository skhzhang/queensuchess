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
					<li class="links"><a href="{$directoryString}photos">Photos</a></li>
					<li class="links"><a href="{$directoryString}partners">Partners</a></li>
					<li class="links"><a href="{$directoryString}club-library">Club Library</a></li>
					<li class="links"><a href="{$directoryString}ladder">Ladder</a></li>
					<li class="links"><a href="{$directoryString}cucc2016">CUCC 2016</a></li>
					<li class="links"><a href="{$directoryString}contact">Contact</a></li>
				</ul>
			</div>
			<div class="four columns footer-box">
				<span class="title" id="connect-with-us"><a href="#connect-with-us">Connect with us</a></span>
				<ul>
					<li class="links"><a href="https://www.facebook.com/groups/130578570469174/"><img src="{$directoryString}icons/FB-f-Logo__blue_64.png"> &nbsp; Facebook</a></li>
					<li class="links"><a href="mailto:queenschess@outlook.com"><img src="{$directoryString}icons/email5.png"> &nbsp; Email us</a></li>
					<li class="links"><a href="http://myams.org/clubs-directory/">AMS Clubs</a></li>
				</ul>
			</div>
			<div class="four columns footer-box">
				<span class="title" id="meeting-location"><a href="#meeting-location">Meeting Location</a></span>
				<br/>
				<br/>
				<p class="footer-text">We meet Tuesday nights at 8:30pm in the <strong>JDUC 352</strong>.</p>
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