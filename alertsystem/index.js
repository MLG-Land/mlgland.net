// start an http server that receives a string
// we will write the string to a file called ../alerts.txt


// create the listener on port 3000
var listener = app.listen(3000, function () {
	console.log('Your app is listening on port ' + listener.address().port);
});

// make a function to handle the request
function handleRequest(request, response) {
	console.log("Received a request");

	// get content from a file called ./alerts.txt
	var fs = require('fs');
	var content = fs.readFileSync('./alerts.txt', 'utf8');

	// get the text from the request
	var text = request.url;

	var output = text + '<br>' + content;

	// save output to a file called ./alerts.txt
	fs.writeFileSync('./alerts.txt', output);

	response.end("Done!");
}

// trigger handleRequest when a request is made to the listener
listener.on('request', handleRequest);
