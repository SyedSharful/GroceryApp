<?php
    session_start();
    
    include "database.php";
     
     
    $finaltotal = 0; 
    if (!isset($_SESSION['cart'])) {
       // Cart is empty, display a message to the user
       echo "Your cart is empty.";
    }else{
       // Cart exists, display the items
       echo "<table>";
       echo "<tr><th> </th><th>Item</th><th>Price</th><th>Quantity</th></tr>";
       
       // Loop through each item in the cart
       foreach ($_SESSION['cart'] as $item) {
           $name = $item['item'];
           $price = $item['price'];
           $quantity = $item['quantity'];
           $store = $item['store'];
           $category = $item['category'];
           $position = $item['position'];
           $image = '';
                  
           if($store === "Shoprite"){
            if($category == "Dairy"){
                $shop = "SELECT * FROM Grocery_Shoprite_Dairy WHERE Position='$position'";
                $result = mysqli_query($conn, $shop);
                $row = $result->fetch_assoc();
                
                $image = $row["Milk_Image"];
            }elseif($category === "Vege"){
                $shop = "SELECT * FROM Grocery_Shoprite_Vege WHERE Position='$position'";
                $result = mysqli_query($conn, $shop);
                $row = $result->fetch_assoc();
                
                $image = $row["Vege_Img"];
            }
           }elseif($store === "Walmart"){
            if($category == "Dairy"){
                $shop = "SELECT * FROM Grocery_Walmart_Dairy WHERE Position='$position'";
                $result = mysqli_query($conn, $shop);
                $row = $result->fetch_assoc();
                
                $image = $row["Milk_Image"];
            }elseif($category === "Vege"){
                $shop = "SELECT * FROM Grocery_Walmart_Vege WHERE Position='$position'";
                $result = mysqli_query($conn, $shop);
                $row = $result->fetch_assoc();
                
                $image = $row["Vege_Img"];
            }
          }
           
           $baseprice = str_replace(array('$',','), '', $item['price']);
           $mult = $baseprice * $item['quantity'];
           
           $finaltotal = $finaltotal +  $mult;
           
           // Output the item details as a table row
           echo "<tr><td></td><td>$name</td><td> $" .$mult. "  </td><td>$quantity</td></tr>";
       }
        echo "<tr><td></td><td></td><td> $" .$finaltotal. "  </td><td></td></tr>";
       echo "</table>";
   }


?>