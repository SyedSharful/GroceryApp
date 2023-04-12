<?php
    session_start();  
    include "database.php";

    if (isset($_SESSION['username']) && $_SESSION['username'] == true) {
        echo "<h2>Welcome " . htmlspecialchars($_SESSION['username']) . "!</h2>";
        $uname = $_SESSION['username'];

        $sql = "SELECT * FROM grocery_cart WHERE Username='$uname'";
        $result = mysqli_query($conn, $sql);
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
        echo "<h2>Not logged in? " . "<a href='Login.html'>Click here</a> </h2>";
    }



?>