// start an http server that receives a string
// we will write the string to a file called ../alerts.txt


// create the listener on port 3000
var listener = app.listen(3000, function () {
	console.log('Your app is listening on port ' + listener.address().port);
});

// make a function to handle the request
function handleRequest(request, response) {
	// get content from the request
	var content = request.content;

	// get the first character of the content
	var firstChar = content.charAt(0);

	switch (firstChar) {
		case 1:
			// get the content after the first character
			var text = content.substring(1);
			// put content from ./alerts.txt into a variable
			var alerts = fs.readFileSync("./alerts.txt", "utf8");
			// save content to ./alerts.txt
			fs.writeFileSync("./alerts.txt", text + "\n" + alerts);
			response.end("Done");
			break;
	
		case 2:
			// get the content after the first character
			var text = content.substring(1);
			// put content from ./updates.txt into a variable
			var updates = fs.readFileSync("./updates.txt", "utf8");
			// save content to ./updates.txt
			fs.writeFileSync("./updates.txt", text + "\n" + updates);
			response.end("Done");
			break;
	}
}

// trigger handleRequest when a request is made to the listener
listener.on('request', handleRequest);
