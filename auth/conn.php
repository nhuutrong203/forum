<?php
	$db_username = 'root';
	$db_password = '';
	$conn = new PDO( 'mysql:host=localhost;dbname=coursework', $db_username, $db_password );
	if(!$conn){
		die("Error: Connection Failed!");
	}
?>