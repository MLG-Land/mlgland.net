<!DOCTYPE html>
<html lang="en">

<head>
  	<meta name="description" content="MLG Land Games" />
  	<meta charset="utf-8">
  	<?php
		if (!empty($_GET["v"])) {
			echo match ($_GET["v"]) {
				"skywars" => "<title>MLG Land - SkyWars</title>",
				"bedwars" => "<title>MLG Land - BedWars</title>",
				default => "<title>MLG Land Games</title>",
			};
		} else {
			echo "<title>MLG Land Games</title>";
		}
	?>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="author" content="">
  	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="cards.css">
  	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	
	<script src="stats.js"></script>
	<link rel="stylesheet" href="./games.css">
</head>

<body style="
	background-image: url('../image.jpg');
	height: 100vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
">
  
<div class="container">
  	<h1>Games</h1>
	<div class="header" style="float: right;">
		<a href="http://mlgland.net"><button>Home</button></a>
		<a href="http://mlgland.net/play/"><button>Play</button></a>
		<a href="http://mlgland.net/contact/"><button>Contact</button></a>
	</div>
	<div id="game-cards" style="display: inline;">
		<a href="?v=skywars"><div class="card">
  			<img src="/images/skywars.png" alt="Avatar" style="width:100%">
  			<div class="card-container">
    			<h4><b>SkyWars</b></h4> 
    			<p class="skywars-player-stat">Player status unavailable</p> 
  			</div>
		</div></a>
		<a href="?v=bedwars"><div class="card">
  			<img src="/images/bedwars.png" alt="Avatar" style="width:100%">
  			<div class="card-container">
    			<h4><b>BedWars</b></h4> 
    			<p class="bedwars-player-stat">Player status unavailable</p> 
  			</div>
		</div></a>
		<a href="?v=fastbuilder"><div class="card">
  			<img src="/images/fastbuilder.png" alt="Avatar" style="width:100%">
  			<div class="card-container">
    			<h4><b>FastBuilder</b></h4> 
    			<p class="fastbuilder-player-stat">Player status unavailable</p> 
  			</div>
		</div></a>
	</div><br>
	<div id="info-box">
		<?php
			if (!empty($_GET["v"])) {switch ($_GET["v"]) {
				case "skywars":
					echo "<span style='display:inline;'><h1>SkyWars</h1> <h2>is a game heavily inspired by Hypixel's skywars.</h2></span><br>";
					echo "<h3>STATUS: Available to play in the lobby</h3>";
					break;
				case "bedwars":
					echo "<span style='display:inline;'><h1>BedWars</h1> <h2>is a game heavily inspired by Hypixel's bedwars.</h2></span><br>";
					echo "<h3>STATUS: Available to play in the lobby</h3>";
					break;
				case "fastbuilder":
					echo "<span style='display:inline;'><h1>FastBuilder</h1> <h2>is a game heavily inspired by McPlayHD's fastbridge.</h2></span><br>";
					echo "<h3>STATUS: Available to play in the lobby</h3>";
					break;
				default:
					echo "<h3>Click on a game to view details</h3>";
			}} else { echo "<h3>Click on a game to view details</h3>"; }
		?>
	</div>
</div>

<script src="../include.js">
	includeHTML();
</script>

</body>
</html>
