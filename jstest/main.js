const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

const text = urlParams.get('text');

document.querySelector("#text").innerHTML = text;
