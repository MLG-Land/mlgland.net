// <game>-player-stat

// we need to use the minecraft server api to find the amount of players on each server
// just a reminder for one of the sysadmins: forwars all the query ports for each server

/*
cards made so far:
- skywars
*/

var skywars_cur;
var skyward_max;

MinecraftAPI.getServerStatus(
	"mc.mlgland.net",
	{
		port: 10000, // optional, only if you need a custom port
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
		document.querySelector(".version").innerHTML =
			"Version: " + status.server.name;
	}
);
