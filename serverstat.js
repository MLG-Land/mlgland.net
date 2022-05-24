MinecraftAPI.getServerStatus(
	"mc.mlgland.net",
	{
		port: 25565, // optional, only if you need a custom port
	},
	function (err, status) {
		if (err) {
			return (document.querySelector(
				".status"
			).innerHTML = "Error loading status");
		}

		// you can change these to your own message!
		document.querySelector(".upstate").innerHTML =
			status.online
				? "Status: Online"
				: "Status: Offline";
		document.querySelector(".players").innerHTML =
			"Players: " +
			status.players.now +
			"/" +
			status.players.max +
			"";
		/*document.querySelector(".version").innerHTML =
			"Version: " + status.server.name;*/
		document.querySelector(".version").innerHTML =
			"Version: " + "Java Edition 1.8 - 1.18.x";
	}
);
