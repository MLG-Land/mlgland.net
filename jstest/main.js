const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

const text = urlParams.get('text');

document.getElementById("text").innerHTML = text;
