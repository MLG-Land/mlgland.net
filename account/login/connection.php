<?php

$db_host = "sql5.freemysqlhosting.net";
$db_user = "sql5484641";
$db_pass = "606863";
$db_name = "sql5484641";

try {
	$db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
	echo "Connection Error: " . $e->getMessage();
}