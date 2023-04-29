<?php
    //session_start() means that user is runnings their own session so system holds session info(username)
    session_start();       
    
    //Add the connection to the database
    include "database.php";

    //get the item from the Shop if user clicked buy now on one of the items
    //$item = $_POST['hidden_name'];              //Name broken
    //$image = $_POST['hidden_image'];            //Image Broken
    if (isset($_POST['add_to_cart'])) {
        $price = $_POST['hidden_price'];
        $quantity = $_POST['quantity'];
        $position = $_POST['hidden_position'];
        $store = $_POST['store'];
        $category = $_POST['food'];
        $tableCheck = false;
        $quant = false;
        
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
    
        if($store === "Shoprite"){
            if($category == "Dairy"){
                $shop = "SELECT * FROM Grocery_Shoprite_Dairy WHERE Position='$position'";
                $result = mysqli_query($conn, $shop);
                $row = $result->fetch_assoc();
                
                $name = $row["Milk_Text"];
                $image = $row["Milk_Image"];
            }elseif($category === "Vege"){
                $shop = "SELECT * FROM Grocery_Shoprite_Vege WHERE Position='$position'";
                $result = mysqli_query($conn, $shop);
                $row = $result->fetch_assoc();
                
                $name = $row["Vege_Text"];
                $image = $row["Vege_Img"];
            }
        }elseif($store === "Walmart"){
            if($category == "Dairy"){
                $shop = "SELECT * FROM Grocery_Walmart_Dairy WHERE Position='$position'";
                $result = mysqli_query($conn, $shop);
                $row = $result->fetch_assoc();
                
                $name = $row["Milk_Text"];
                $image = $row["Milk_Image"];
            }elseif($category === "Vege"){
                $shop = "SELECT * FROM Grocery_Walmart_Vege WHERE Position='$position'";
                $result = mysqli_query($conn, $shop);
                $row = $result->fetch_assoc();
                
                $name = $row["Vege_Text"];
                $image = $row["Vege_Img"];
            }
        }
        
        $item_exists = false;     
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['item'] == $name) {
                    // Update the quantity of the existing item
                    $_SESSION['cart'][$key]['quantity'] += $quantity;
                    $item_exists = true;
                    break;
                }
            }
        }
        
        // If the item is not already in the cart, add it
        if (!$item_exists && $quantity > 0) {
            $item = array(
              'item' => $name,
              'image' => $image,
              'quantity' => $quantity,
              'price' => $price,
              'store' => $store,
              'category' => $category,
              'position' => $position
            );
            $_SESSION['cart'][] = $item;
        }else{
            $quant = true;
        }
    }
    
    // Check if the "Remove All" button was clicked
    if (isset($_POST['remove_all'])) {
      // Clear the cart
      unset($_SESSION['cart']);
    }
    
    if (isset($_POST['remove_item'])) {
        $item_id = $_POST['item_id'];
  
        // Loop through the cart to find the item to remove
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $item_id) {
                // Remove the item from the cart
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
    }

    $check = false;
    //Conditonal: check if session holds username and its true
    if (isset($_SESSION['username']) && $_SESSION['username'] == true) {
        echo '<div>
              <h2>Welcome ' . htmlspecialchars($_SESSION['username']) . '!</h2>
              <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
              </div>';

         if (!empty($_SESSION['cart'])){
             
              // Cart exists, display the items
             echo "<table>";
             echo "<tr><th></th><th>Item</th><th>Quantity</th><th>Price</th><th></th></tr>";
             foreach ($_SESSION['cart'] as $item) {
                 
                 $baseprice = str_replace(array('$',','), '', $item['price']);
                 $mult = $baseprice * $item['quantity'];
                 echo '<table>';
                 echo "<tr><td>";
                 echo '<img src=' . $item['image'] . ' width="100" height="100">';
                 echo "</td>";
                 echo "<td>" . $item['item'] . "</td>";
                 echo "<td>" . $item['quantity'] . "</td>";
                 echo "<td> $" . $mult . "</td>";
                 echo "<td><form method='post' action=''>
                        <input type='hidden' name='item_id' value='$item_id'>
                        <button type='submit' name='remove_item' class='btn btn-danger btn-sm'>Remove</button>
                        </form></td>";
                 echo "</tr>";
            
                 echo '</table>';    
           
                 $check = true;
            }
            echo "<form method='post' action='Payment.php'>
              <button type='submit' name='order' class='btn btn-success'>Place Order</button>
            </form>";
             echo "<form method='post' action=''>
              <button type='submit' name='remove_all' class='btn btn-danger'>Remove All</button>
              </form></br>";    
                 
        }
        if($quant === true){
            echo "<h3>No input, invalid quantity!<h3>";
        }else if($check === false){
            echo "<h2>There is nothing in your cart, " . "<a href='Shop.php'>Shop Now!</a> </h2>";
        }
        
    } else {
        echo "<h2>Not logged in? " . "<a href='Login.php'>Click here</a> </h2>";
    }



?>
