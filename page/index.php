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
</div>

<script>
</script>

</body>
</html>
