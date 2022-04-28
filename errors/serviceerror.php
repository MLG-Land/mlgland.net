<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="Webpage description goes here" />
  <meta charset="utf-8">
  <title>Service Error</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="">
  <link rel="stylesheet" href="../style.css">
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>
  
<div class="container">
  <div id="header">
    <h1>Service Error</h1>
  </div>
  <div id="info">
    <?php 
      echo "Error code: " . htmlspecialchars($_GET["code"]);
	  switch (htmlspecialchars($_GET["code"])) {
		  case "0":
			  echo "The service is currently down or not accepting requests";
			  break;
	  }
    ?>
  </div>
</div>

<script>
</script>

</body>
</html>
