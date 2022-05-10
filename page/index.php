<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    switch ($_GET["profile"]) {
			case "SuperBoyThomas6":
				echo "<meta name='description' content='SuperBoyThomas6&#39;s profile' />";
				echo "<title>SuperBoyThomas6&#39;s profile</title>";
				break;
			case "SidGames5":
				echo "<meta name='description' content='SidGames5&#39;s profile' />";
				echo "<title>SidGames5&#39;s profile</title>";
				break;
		}
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="">
  <link rel="stylesheet" href="../style.css">
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>
  
<div class="container">
    <div id="content">
	    <div id="header" style="width:80%">
			<?php
        	switch ($_GET["profile"]) {
				case "SuperBoyThomas6":
					echo "<h1><strong>SuperBoyThomas6</strong>&#39;s profile";
					echo "<h2>Moderator</h2>";
					break;
				case "SidGames5":
					echo "<h1><strong>SidGames5</strong>&#39;s profile";
					echo "<h2>Server Owner</h2>";
					break;
			}
  			?>
		</div>
	    <div id="about" style="float:left; width:80%;">
		    <?php
				switch ($_GET["profile"]) {
					case "SidGames5":
						echo "<p>
							Hello! My name is Sid and I own this server and all of the *totally* secret stuff behind it. I code websites, games, and spigot plugins. I know HTML, CSS, JavaScript, PHP, Java, and Haxe.
						</p>";
						break;
				}
			?>
	    </div>
		<div id="pfp" style="float:right; width:20%;">
		    <?php
				switch ($_GET["profile"]) {
					case "SidGames5":
						echo "<img src=&quot;https://s.namemc.com/2d/skin/face.png?id=172430617ff299db&scale=4&quot; alt=&quot;Avatar&quot; style=&quot;width:100%&quot;>";
						echo "<h4>Follow me on my socials</h4>";
						echo "<a href=&quot;https://basiccorruption.github.io&quot><button>Website</button</a>";
						break;
				}
			?>
	    </div>
	</div>
</div>

<script>
</script>

</body>
</html>
