<?php
    //session_start() means that user is runnings their own session so system holds session info(username)
    session_start();  
    
    //Add the connection to the database
    include "database.php";
    
    //Grab data from the Grocery_Coupons database in ascention order. Id is % 2 as in the database, the odd rows are filled with null values
    $sql = "SELECT * FROM Grocery_Order";
    
    $uname = $_SESSION['username'];
    //Query the result of the connection
    $result = $conn->query($sql);
    
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
    
        if($row['customer_name'] === $uname){
            echo 'hello!';     
        }   
    }else{
       echo "<h2 style='text-align: center;'>You have no orders</h2>";
    }
  
?>