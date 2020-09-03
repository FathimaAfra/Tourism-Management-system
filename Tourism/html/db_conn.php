<?php
	define("HOST", "localhost");
	define("USER", "vernusa");
	define("PASSWORD", "123");
	define("DATABASE", "csd63_db");
	
	$conn =	mysqli_connect(HOST,USER,PASSWORD,DATABASE) 
		or die("Couldn't connect to the database");
		
	// if($conn){
	// 	echo "Successfully connected!";
	// }
?>