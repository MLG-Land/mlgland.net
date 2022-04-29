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
			<div class="header" w3-include-html="/header.html"></div>
			<script src="/script.js">includeHTML();</script>
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
					<!-- <script src="./alerts.js"></script> -->

					<!-- Get content from ./alerts.txt and display them on screen with php -->
					<!-- Only display the first 3 alerts -->
					<?php
						$alerts = file_get_contents("./alertsystem/alerts.txt");
						$alerts = explode("\n", $alerts);
						$alerts = array_slice($alerts, 0, 3);
						foreach ($alerts as $alert) {
							echo "<p>$alert</p>";
						}
					?>
				</h3>
			</div>
			<div class="updates">
				<h2>Updates</h2>
				<h3 id="latest-updates">
					<!-- we will use javascript to get the file ./updates.txt, and then we will display it -->
					<!-- <script src="./updates.js"></script> -->
					
					<!-- Get content from ./updates.txt and display them on screen with php -->
					<!-- Only display the first 5 updates -->
					<?php
						$updates = file_get_contents("./alertsystem/updates.txt");
						$updates = explode("\n", $updates);
						$updates = array_slice($updates, 0, 5);
						foreach ($updates as $update) {
							echo "<p>$update</p>";
						}
					?>
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
			<script>
			includeHTML();
			</script>
		</div>
	</body>
</html>