<?php
	  $servername = "sql1.njit.edu";
    $username = "klz4";
    $password = "K4419Spark!";
    $dbname = "klz4"; 
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn)
    {
        die("Connection error: " . mysqli_connect_errno());
    }
?>
    