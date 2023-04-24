<?php
     session_start();
     
     include "database.php";
     
     // Check if the form has been submitted
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     	// Get the payment, location, and delivery time from the form
     	$location = $_POST['location'];
     	$delivery_time = $_POST['delivery_time'];
      $time = $_POST['time'];
      $finaltotal = $_SESSION['finaltotal'];
      $currtime = date("Y-m-d H:i:s");
      
      $sent = '';
      $sent = $delivery_time . $time;
      
      $uname = $_SESSION['username'];
      $orderitem = '';
      
      foreach ($_SESSION['cart'] as $item) {
          $orderitem = $orderitem . $item['quantity'] . ' ' . $item['store'] . ' ' . $item['category']
                       . ' ' . $item['position'];
      }
      
      $insert_sql = "INSERT INTO Grocery_Order (username, location, orderlist, total, date, ordertime) 
                    VALUES ('$uname', '$location', '$orderitem', '$finaltotal', '$sent', '$currtime') ";
      mysqli_query($conn, $insert_sql);
     	// Redirect to the order confirmation page
     	header('Location: Confirmation.php');
     	exit;
     }
?>