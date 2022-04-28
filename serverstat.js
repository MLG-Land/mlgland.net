MinecraftAPI.getServerStatus(
					"mlgland.ddns.net",
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
								? "<h4>Status: Online</h4>"
								: "<h4>Status: Offline</h4>";
						document.querySelector(".players").innerHTML =
							"<h4>Players: " +
							status.players.now +
							"/" +
							status.players.max +
							"</h4>";
						document.querySelector(".version").innerHTML =
							"<h4>Version: " + status.server.name + "</h4>";
						document.querySelector(".protocol").innerHTML =
							"<h4>Version: " + status.server.protocol + "</h4>";
					}
					);
