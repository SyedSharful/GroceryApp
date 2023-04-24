<?php
    //session_start() means that user is runnings their own session so system holds session info(username)
    session_start();  
    
    //Add the connection to the database
    include "database.php";
    
    $uname = $_SESSION['username'];
    $name = '';
    $image = '';
    $price = 0;

    //Query the result of the connection
    $sql = "SELECT * FROM Grocery_Order WHERE username = '$uname'";
    $result =  mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $total = $row['total'];
        
        echo '<h4>Order placed at: ' . $row['ordertime'] . ',     Deliver by: ' . $row['date'] . '</h4>'; 
        echo '<h4>Deliver to: ' . $row['location'] . '</h4>';
        echo "<table>";
        echo "<tr><th> </th><th>Item</th><th>Quantity</th><th>Price</th></tr>";
        echo "</table>";
        $items = rtrim($row['orderlist'], '/');
        $items = explode('/',$items);
                
        foreach ($items as $item) {
          $parts = explode(' ', $item);
          
          $quantity = $parts[0];
          $store = $parts[1];
          $category = $parts[2];
          $position = $parts[3];
          
          if($store == "Shoprite"){
            if($category == "Dairy"){
                $shop = "SELECT * FROM Grocery_Shoprite_Dairy WHERE Position='$position'";
                $check = mysqli_query($conn, $shop);
                $get = mysqli_fetch_assoc($check);
                
                $name = $get["Milk_Text"];
                $image = $get["Milk_Image"];
                $price = $get["Milk_Price"];
            }elseif($category == "Vege"){
                $shop = "SELECT * FROM Grocery_Shoprite_Vege WHERE Position='$position'";
                $check = mysqli_query($conn, $shop);
                $get = mysqli_fetch_assoc($check);
                
                $name = $get["Vege_Text"];
                $image = $get["Vege_Img"];
                $price = $get["Vege_Price"];
            }
         }elseif($store == "Walmart"){
            if($category == "Dairy"){
                $shop = "SELECT * FROM Grocery_Walmart_Dairy WHERE Position='$position'";
                $check = mysqli_query($conn, $shop);
                $get = mysqli_fetch_assoc($check);
                
                $name = $get["Milk_Text"];
                $image = $get["Milk_Image"];
                $price = $get["Milk_Price"];
            }elseif($category == "Vege"){
                $shop = "SELECT * FROM Grocery_Walmart_Vege WHERE Position='$position'";
                $check = mysqli_query($conn, $shop);
                $get = mysqli_fetch_assoc($check);
                
                $name = $get["Vege_Text"];
                $image = $get["Vege_Img"];
                $price = $get["Vege_Price"];
            }
         }
    
         $baseprice = str_replace(array('$',','), '', $price);
         $mult = $baseprice * $quantity;
   
         echo '<table>';
         echo "<tr><td>";
         echo '<img src=' . $image . ' width="100" height="100">';
         echo "</td>";
         echo "<td>" . $name . "</td>";
         echo "<td>" . $quantity . "</td>";
         echo "<td>$" . $mult . "</td>";
         echo "</tr>";
      }
      echo "<tr><td></td><td></td><td></td><td>Total: $" .$total. "</td></tr>";
      echo '</table>';
      echo '</br></br>';
    }
    
    if(mysqli_num_rows($result) == 0){
       echo "<h2 style='text-align: center;'>You have no orders</h2>";
    }
  
?>