<?php
    session_start();

    include "database.php";

    if (isset($_SESSION['username']) && $_SESSION['username'] == true){
        session_destroy();
        echo "You have been Logged Out! | <a href='index.php'>Home</a>";
    }
        
    else {
        echo "You are Not Logged In! | <a href='Login.html'>Login</a>";    
    }      
?>