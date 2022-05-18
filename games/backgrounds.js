function change(id) {
	switch (id) {
		case 0:
			// set the background to default
			document.getElementById("background-container").style.backgroundImage: "url('../image.jpg')";
			break;
		case 1:
			// set the background to a picture of skywars
			document.getElementById("background-container").style.backgroundImage: "url('../assets/skywars-map.jpg')";
			break;
		case 2:
			// set the background to a picture of bedwars
			document.getElementById("background-container").style.backgroundImage: "url('../assets/bedwars-map.jpg')";
			break;
		case 3:
			// set the background to a picture of fastbuilder
			document.getElementById("background-container").style.backgroundImage: "url('../assets/fastbuilder-map.jpg')";
			break;
	}
}
