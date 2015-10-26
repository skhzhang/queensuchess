<?php

function getDirectoryString($directoryLevel) {
	$directoryString = "./";

	for ($i = 0; $i < $directoryLevel; $i += 1) {
		$directoryString = "../" . $directoryString;
	}

	return $directoryString;
}

function head($directoryLevel) {

	$directoryString = getDirectoryString($directoryLevel);

	$returnValue = "";
	$returnValue .= <<<EOT

<header>

	<!-- OVERFLOW MENU -->
	<div class="overflow-menu">
		<div class="title-div">
			<span class="title"><a href="{$directoryString}">Queen's Chess Club</a></span>
		</div>

EOT;

	$returnValue .= links($directoryString);
	$returnValue .= <<<EOT

	</div>

	<div class="container">
		<div class="row">
			<div class="twelve columns header">

				<!-- HEADER-LEFT -->
				<div class="three columns header-left" >
					<a href="{$directoryString}">
						<img class="logo" src="{$directoryString}logo.png"/>
					</a>

					<button class="overflow">
						<img class="iconMenuGray" src="{$directoryString}icons/icon-menu-gray.png" alt="Menu button in black" style="width:22px;"/>
					</button>
				</div>

				<!-- HEADER RIGHT -->
				<div class="nine columns header-right">

					<div class="title-div">
						<span class="title"><a href="{$directoryString}">Queen's Chess Club</a></span>
					</div>

EOT;

	$returnValue .= links($directoryString);
	$returnValue .= <<<EOT

				</div>
			</div>
		</div>
	</div>
</header>

EOT;

return $returnValue;

}

function links($directoryString) {

	$returnValue = "";
	$returnValue .= <<<EOT

		<div class="links">
			<ul>
EOT;

	for ($i = 0; $i < 2; $i++) {
		$pages[$i] = array();
	}

	$pages[0] = [	"about",
					"photos",
					"partners",
					"club-library",
					"ladder",
					"cucc2016",
					"contact"
				];

	$pages[1] = [	"About",
					"Photos",
					"Partners",
					"Club Library",
					"Ladder",
					"CUCC 2016",
					"Contact"
				];

	for ($i = 0; $i < sizeof($pages[0]); $i++) {

		$currentPage = false;

		// check if page URL contains keyword for the button
		if (strpos($_SERVER["REQUEST_URI"], $pages[0][$i]) != false) {
			$currentPage = true;
		}

		// modify button if this is the button for the current page
		if ($currentPage) {

			if ($pages[0][$i] == "cucc2016") { // custom button for cucc2016

				// check page URL for 'hotels' keyword, if yes, this is current page
				if (strpos($_SERVER["REQUEST_URI"], "hotels") != false) {

					$returnValue .= <<<EOT

					<li>
						<button class="current-page link special-link">CUCC 2016</button>
						<ul class="dropdown">
							<li><a href="{$directoryString}cucc2016"><button class="link">Information</button></a></li>
							<li><button class="current-page link">Hotels</button></li>
						</ul>
					</li>

EOT;
				}
				else {

					$returnValue .= <<<EOT

					<li>
						<button class="current-page link special-link">CUCC 2016</button>
						<ul class="dropdown">
							<li><button class="current-page link">Information</button></li>
							<li><a href="{$directoryString}cucc2016/hotels.php"><button class="link">Hotels</button></a></li>
						</ul>
					</li>

EOT;
				}
			}
			else { // all other pages

				$returnValue .= <<<EOT

					<li><button class="current-page link">{$pages[1][$i]}</button></li>

EOT;
			}
		}

		// normal button (not current page)
		else {

			if ($pages[0][$i] == "cucc2016") { // custom button for cucc2016

				$returnValue .= <<<EOT

					<li>
						<a href="{$directoryString}cucc2016"><button class="link special-link">CUCC 2016</button></a>
						<ul class="dropdown">
							<li><a href="{$directoryString}cucc2016"><button class="link">Information</button></a></li>
							<li><a href="{$directoryString}cucc2016/hotels.php"><button class="link">Hotels</button></a></li>
						</ul>
					</li>

EOT;
			}
			else { // all other pages

				$returnValue .= <<<EOT

					<li><a href="{$directoryString}{$pages[0][$i]}"><button class="link">{$pages[1][$i]}</button></a></li>
EOT;
			}
		}




	}


	$returnValue .= <<<EOT

			</ul>
		</div>
EOT;

	return $returnValue;

}



?>