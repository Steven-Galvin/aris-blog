<?php
	session_start();
	// connect to database
	$conn = mysqli_connect("127.0.0.1", "root", "K4lsifer290", "complete-blog-php");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
	// define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/aris-blog/');
?>
