const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

document.getElementById("text").innerHTML = urlParams.get('text');
