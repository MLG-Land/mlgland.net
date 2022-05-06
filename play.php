<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Join MLG Land</title>
		<!-- import style.css -->
		<link rel="stylesheet" href="style.css" />
		<!-- import javascript -->
		<script src="script.js"></script>
		<!-- Add meta for description -->
		<meta name="description" content="MLG Land Minecraft server connection information" />
	</head>
	<body>
		<div class="header">
				<h1>MLG LAND</h1>
				<div class="buttons" style="width: 100%">
					<a href="index.php"><button>Home</button></a>
					<a href="play.php"><button>Play</button></a>
					<a href="contact.php"><button>Contact</button></a>
					<a href="/account/login/"
						><button class="f-right">Login</button></a
					>
				</div>
			</div>
		<div class="content">
			<div class="connection">
				<ul>
					<li><h3>Server IP: mc.mlgland.net</h3></li>
					<li><h3>Server Port: 25565</h3></li>
					<li><h3>Minecraft Version: 1.8 - 1.18.x</h3></li>
				</ul>
			</div>
			<div class="status">
				<h2>Server Status</h2>
				<span class="upstate"></span>
				<span class="players"></span>
				<span class="version"></span>
				<span class="protocol"></span>
			</div>
			<script src="https://mcapi.us/scripts/minecraft.min.js"></script>
			<script src="serverstat.js"></script>
		</div>
	</body>
</html>
