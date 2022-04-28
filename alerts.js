var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange = function () {
							if (this.readyState == 4 && this.status == 200) {
								//we will make a variable to hold the text
								var text = this.responseText;
								//now we make it so that each line will be seperated by a <br>
								text = text.replace(/\n/g, "<br>");
								//now we will display the text
								document.getElementById(
									"latest-alerts"
								).innerHTML = text;
							}
						};
						xhttp.open("GET", "./alerts.txt", true);
						xhttp.send();