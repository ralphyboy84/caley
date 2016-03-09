<?php



if ($_SERVER['SERVER_NAME'] == 'localhost') {
	//dev settings
	$SERVERNAME = "localhost";
	$USERNAME = "root";
	$PASSWORD = "";
	$DATABASE = "caley";
} else {
	//live settings
	$SERVERNAME = "localhost";
	$USERNAME = "carnoust";
	$PASSWORD = "leR5p13P2k";
	$DATABASE = "carnoust_caley";
}


?>