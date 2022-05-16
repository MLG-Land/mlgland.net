// (id/#) <game>-player-stat

// we need to use the minecraft server api to find the amount of players on each server
// just a reminder for one of the sysadmins: forwars all the query ports for each server

/*
cards made so far:
- skywars
*/

// both values will appear as zero if the data cannot be fetched or the server is offline

var skywars_cur = 0;
var skyward_max = 0;

// skywars
MinecraftAPI.getServerStatus(
	"mc.mlgland.net",
	{
		port: 10210, // optional, only if you need a custom port
	},
	function (err, status) {
		if (err) {
			skywars_cur = 0;
			skywars_max = 0;
			return (document.querySelector(
				".status"
			).innerHTML = "Error loading status");
		}

		// you can change these to your own message!
		/*document.querySelector(".upstate").innerHTML =
			status.online
				? "Status: Online"
				: "Status: Offline";*/
		/*document.querySelector(".players").innerHTML =
			"" +
			status.players.now +
			"/" +
			status.players.max +
			" players online";*/
		skywars_cur = status.players.now;
		skywars_max = status.players.max;
	}
);

document.querySelector("#skywars-player-stat").innerHTML = skywars_cur + " / " + skywars_max + " playing";
