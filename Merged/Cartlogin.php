<?php
    //session_start() means that user is runnings their own session so system holds session info(username)
    session_start();       
    
    //Add the connection to the database
    include "database.php";
    
    //Conditonal: check if session holds username and its true
    if (isset($_SESSION['username']) && $_SESSION['username'] == true) {
        echo "<h2>Welcome " . htmlspecialchars($_SESSION['username']) . "!</h2>";
        $uname = $_SESSION['username'];

        //grab the username from the database
        $sql = "SELECT * FROM grocery_cart WHERE Username='$uname'";
        
        //Query the result of the connection
        $result = mysqli_query($conn, $sql);
        
        //Conditional: checks if there is are items in cart
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if($action=='emptyall') {
                $_SESSION['products'] =array();
                header("Location:Cart.php");	
            }
            
            //Empty one by one
            if($action=='empty') {
                $sku = $_GET['sku'];
                $products = $_SESSION['products'];
                unset($products[$sku]);
                $_SESSION['products']= $products;
                header("Location:Cart.php");
            }
        }else{
            echo "<h2>Nothing in your cart, " . "<a href='Shop.html'>Shop Now!</a> </h2>";
        }
        
    } else {
        echo "<h2>Not logged in? " . "<a href='Login.php'>Click here</a> </h2>";
    }



?>