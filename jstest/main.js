var url_string = window.location.href;
var url = new URL(url_string);
var text = url.searchParams.get("text");

document.getElementById("text").innerHTML = text;
