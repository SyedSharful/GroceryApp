<?php
	$servername = "localhost";
	$username = "root";
    	$password = "";
    	$dbname = "cs490"; 
    	$conn = mysqli_connect($servername, $username, $password, $dbname);

    	if (!$conn){
        	die("Connection error: " . mysqli_connect_errno());
    	}
?>
    
