<?php
    //session_start() means that user is runnings their own session so system holds session info(username)
    session_start();       
    
    //Add the connection to the database
    include "database.php";
    
    unset($_SESSION['cart']);  
?>