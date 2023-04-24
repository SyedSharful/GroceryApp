<?php
    //session_start() means that user is runnings their own session so system holds session info(username)
    session_start();

    //Add the connection to the database
    include "database.php";

    //Conditonal: Check if user is signed into the system 
    if (isset($_SESSION['username']) && $_SESSION['username'] == true){
        
        //Destroy the session if the user is logged in
        session_destroy();
        echo "<h2 style='text-align: center;'>You have been Logged Out! | <a href='index.php'>Home</a> </h2>";
    }    
    else {
        //Send them a link that they are not logged in, most likely users will not see this
        echo "<h2 style='text-align: center;'>You are Not Logged In! | <a href='Login.php'>Login</a> </h2>";    
    }      
?>
