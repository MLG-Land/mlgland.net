<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>MLG LAND</title>
		<!-- import css -->
		<link rel="stylesheet" href="style.css" />
		<!-- import javascript -->
		<script src="script.js"></script>
	</head>
	<body>
		<div class="container">
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
			<div class="banner">
				<a
					href="https://minecraftservers.org/server/635055"
					target="_blank"
					><img
						src="https://status.minecraftservers.org/classic/635055.png"
						alt="MLG Land Minecraft server"
						width="540"
						height="90"
				/></a>
			</div>
			<div class="alerts">
				<h2>Alerts</h2>
				<h3 id="latest-alerts">
					<!-- we will use javascript to get the file ./updates.txt, and then we will display it -->
					<script src="./alerts.js"></script>
				</h3>
			</div>
			<div class="updates">
				<h2>Updates</h2>
				<h3 id="latest-updates">
					<!-- we will use javascript to get the file ./updates.txt, and then we will display it -->
					<script src="./updates.js"></script>
				</h3>
			</div>
			<div class="mediainfo">
				<p>
					<span>
						<p>Discord Server</p>
						<!--<iframe src="https://discord.com/widget?id=961433163572334603&theme=dark" width="350" height="400" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>-->
					</span>
				</p>
			</div>
		</div>
	</body>
</html>
