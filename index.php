<!DOCTYPE html>
<html lang="fi"><!-- Muokkaa tämä, esim "fi" tai "de" -->
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="title" content="Serverisi.fi" /> 
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
		<meta name="author" content="TheEl0ja" />
		<meta name="robots" content="all" />
		<meta property="og:type" content="website" />
		<link rel="stylesheet" href="./tyyli.css" type="text/css" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Tärkeä mobiiliselaimille! -->
		<title>Serverisi.fi: Etusivu</title>
	</head>
	
	<body>
		<div id="ylapalkki">
			
		</div>
		
		<div id="yla">
			<img src="./kuvat/logo.png" alt="Serverisi.fi" />
			<h2 class="ip"><strong>Osoite: Serverisi.fi</strong> | <?php include("kuvat/onlinestatus.php"); ?></h2>
		</div>
		
		<div id="valikko">
			<ul class="valikko">
				<?php
					include("valikko.php");
				?>
			</ul>
		</div>
		
		<div id="keski">
				<h1>Tervetuloa sivupohjaan!</h1>
					<!-- Sisältö alkaa -->
					
					<p>
						Tervetuloa Minecraft-sivupohjaani.
					</p>
					
					<br>Sisällöt mitä käytin sivupohjassani:
						<ul>
							<li>	Taustakuva by <a href="https://theel0ja.info/">TheEl0ja</a>														</li>
							<li>	Logo Placeholder by <a href="https://cooltext.com/Logo-Design-Keen">Cooltext.com Keen Font</a>					</li>	<!-- Värit olivat: start: #9C6BFF end: #1FDEC1 -->
							<li>	Valikon sekä sisältölaatikon taustakuvat olivat Minecraftin perustexturepackista.								</li>
						</ul>
					
					
					<!-- Sisältö päättyy -->
		</div>
		
		<div id="ala">
			<h4>
				&copy; <strong><a href="/">Serverisi.fi</a></strong> 2015 | Layout made by <strong><a href="http://theel0ja.info">TheEl0ja</a></strong>
			</h4>
		</div>
	</body>
</html>
