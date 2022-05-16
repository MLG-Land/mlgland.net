<!DOCTYPE html>
<html lang="en">

<head>
  	<meta name="description" content="MLG Land Games" />
  	<meta charset="utf-8">
  	<?php
		if (!empty($_GET["v"])) {switch ($_GET["v"]) {
			case "skywars":
				echo "<title>MLG Land - SkyWars</title>";
				break;
			default:
				echo "<title>MLG Land Games</title>";
		}} else {
			echo "<title>MLG Land Games</title>";
		}
	?>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="author" content="">
  	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="card.css">
  	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>
  
<div class="container">
  	<h1>Games</h1>
	<div id="game-cards">
		<a href="?v=skywars"><div class="card">
  			<img src="/images/skywars.png" alt="Avatar" style="width:100%">
  			<div class="card-container">
    			<h4><b>SkyWars</b></h4> 
    			<p>x / x players online</p> 
  			</div>
		</div></a>
	</div><br>
	<div id="info-box">
		<?php
			if (!empty($_GET["v"])) {switch ($_GET["v"]) {
				case "skywars":
					echo "<h1>Skywars</h1> <h2>is a game heavily inspired by Hypixel's skywars.</h2>";
					break;
				default:
					echo "<h3>Click on a game to view details</h3>";
			}} else { echo "<h3>Click on a game to view details</h3>"; }
		?>
	</div>
</div>

<script>
</script>

</body>
</html>
