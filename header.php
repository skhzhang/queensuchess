<?php
function head($directoryLevel) {

	$directoryString = "./";

	for ($i = 0; $i < $directoryLevel; $i += 1) {
		$directoryString = "../" . $directoryString;
	}

	$returnValue = <<<EOT

<header>

	<!-- OVERFLOW MENU -->
	<div class="overflow-menu">
		<div class="title-div">
			<span class="title"><a href="{$directoryString}">Queen's Chess Club</a></span>
		</div>
		
		<div class="links">
			<ul>
				<li>
					<a href="{$directoryString}"><button class="link">Home</button></a>
				</li>
				<li>
					<a href="{$directoryString}about"><button class="link">About</button></a>
				</li>
				<li>
					<a href="{$directoryString}photos"><button class="link">Photos</button></a>
				</li>
				<li>
					<a href="{$directoryString}partners"><button class="link">Partners</button></a>
				</li>
				<li>
					<a href="{$directoryString}club-library"><button class="link">Club Library</button></a>
				</li>
				<li>
					<a href="{$directoryString}ladder"><button class="link">Ladder</button></a>
				</li>
				<li>
					<a href="{$directoryString}cucc2016"><button class="link special-link">CUCC 2016</button></a>
					<ul class="dropdown">
						<a href="#"><li>
							<a href="{$directoryString}cucc2016"><button class="link">Information</button></a>
						</li></a>
						<a href="#"><li>
							<a href="{$directoryString}cucc2016/hotels.php"><button class="link">Hotels</button></a>
						</li></a>
					</ul>
				</li>
				<li>
					<a href="{$directoryString}contact"><button class="link">Contact</button></a>
				</li>
			</ul>
		</div>

	</div>

	<div class="container">
		<div class="row">
			<div class="twelve columns header">

				<!-- HEADER-LEFT -->
				<div class="three columns header-left" >
					<a href="{$directoryString}">
						<img class="logo" src="{$directoryString}chess_PNG8447.png"/>
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

					<div class="links">
						<ul>
							<li>
								<a href="{$directoryString}"><button class="link">Home</button></a>
							</li>
							<li>
								<a href="{$directoryString}about"><button class="link">About</button></a>
							</li>
							<li>
								<a href="{$directoryString}photos"><button class="link">Photos</button></a>
							</li>
							<li>
								<a href="{$directoryString}partners"><button class="link">Partners</button></a>
							</li>
							<li>
								<a href="{$directoryString}club-library"><button class="link">Club Library</button></a>
							</li>
							<li>
								<a href="{$directoryString}ladder"><button class="link">Ladder</button></a>
							</li>
							<li>
								<a href="{$directoryString}cucc2016"><button class="link special-link">CUCC 2016</button></a>
								<ul class="dropdown">
									<a href="#"><li>
										<a href="{$directoryString}cucc2016"><button class="link">Information</button></a>
									</li></a>
									<a href="#"><li>
										<a href="{$directoryString}cucc2016/hotels.php"><button class="link">Hotels</button></a>
									</li></a>
								</ul>
							</li>
							<li>
								<a href="{$directoryString}contact"><button class="link">Contact</button></a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
</header>

EOT;

return $returnValue;

}
?>