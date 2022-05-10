<?php

// get url parameters
$prm = $_GET;

$code = $prm["code"];

// check to see if $su is not empty
if (!empty($code)) {
	// debug code
	echo "Code: " . $code;
}
