
<?php

/*
 * Creating Connection in MySQL Database
 * 
 */

try {

	$db_host = "localhost";
	$db_username = "root";
	$db_password = "Secret-12";
	$db_name = "lmsgcc";

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

} catch (Exception $e) {

	exit("Failed to Connect in Database: " . $e->getMessage());

}