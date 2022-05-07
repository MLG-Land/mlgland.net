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
		<meta name="description" content="MLG Land Minecraft server">
	</head>
	<body>
		<div class="container">
			<div class="header" w3-include-html="/header.html"></div>
			<script>
				function includeHTML() {
    var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4) {
            if (this.status == 200) {elmnt.innerHTML = this.responseText;}
            if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /* Remove the attribute, and call this function once more: */
            elmnt.removeAttribute("w3-include-html");
            includeHTML();
        }
        } 
        xhttp.open("GET", file, true);
        xhttp.send();
      /* Exit the function: */
        return;
    }
    }
}
				includeHTML();
			</script>
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
				<details>
					<summary><h2 style="display: inline-block;">Alerts</h2></summary>
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
				</details>
			</div>
			<div class="updates">
				<details>
					<summary><h2 style="display: inline-block;">Updates</h2></summary>
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
				</details>
				
			</div>
			<div id="profiles">
				<a href="https://basiccorruption.github.io"><div class="card">
					<img src="https://s.namemc.com/2d/skin/face.png?id=172430617ff299db&scale=4" alt="Avatar" style="width:100%">
					<div class="card-container">
						<h4><b>SidGames5</b></h4><br> 
						<p>Server Owner</p><br>
					</div>
				</div></a>
				<a href="https://nathanchu.com"><div class="card">
					<img src="https://s.namemc.com/2d/skin/face.png?id=abcd21292b33e322&scale=4" alt="Avatar" style="width:100%">
					<div class="card-container">
						<h4><b>AnotherSlime</b></h4> <br>
						<p>Moderator/Developer</p><br>
					</div>
				</div></a>
				<a href="about:blank"><div class="card">
					<img src="https://s.namemc.com/2d/skin/face.png?id=d33d868914d3fdf5&scale=4" alt="Avatar" style="width:100%">
					<div class="card-container">
						<h4><b>SuperBoyThomas6</b></h4><br>
						<p>Moderator</p><br>
					</div>
				</div></a>
				<a href="https://www.youtube.com/channel/UC5PSoyVvlZtmbCq58gcIZGQ"><div class="card">
					<img src="https://s.namemc.com/2d/skin/face.png?id=2c606a3efd995e10&scale=4" alt="Avatar" style="width:100%">
					<div class="card-container">
						<h4><b>TheTrue_Gamer</b></h4><br>
						<p>Builder</p><br>
					</div>
				</div></a>
				<a href="https://lewolfyt.github.io"><div class="card">
					<img src="https://s.namemc.com/2d/skin/face.png?id=6d1fe9c43ce8a15a&scale=4" alt="Avatar" style="width:100%">
					<div class="card-container">
						<h4><b>LeW0lfYT</b></h4><br>
						<p>Builder</p><br>
					</div>
				</div></a>
			</div>
		</div>
	</body>
</html>
