<?php
    //session_start() means that user is runnings their own session so system holds session info(username)
    session_start();  
    
    //Add the connection to the database
    include "database.php";

    function validate($data){
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }

    if(isset($_GET['submit'])){
    
         $str = validate($_GET['search']);
         
         $sql = "SELECT * FROM Grocery_Shoprite_Vege WHERE Vege_Text LIKE '%".$str."%'";
         $result = $conn->query($sql);
         //Select items from Shoprite Vege
         if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                  echo '<div class="item">';
                      echo '<form action="Cart.php" method="post">';
                      echo '<img src=' . $row["Vege_Img"] . ' class="img-responsive" dwidth="200" height="200" /><br/> '; 
                      echo '<b class="text-info">' . $row["Vege_Text"] . '</b>';  
                      echo '<h4 class="text-danger" >' . $row["Vege_Price"] . '</h4>';
                      echo '<h5 class="text-muted" >' . $row["Vege_X"] . '</h5>';
                      echo '<input type="text" name="quantity" class="form-control" value="1" style="width:200px;" />';
                      echo '<input type="hidden" name="hidden_price" value='. $row["Vege_Price"] . ' />';  
                      echo '<input type="hidden" name="hidden_position" value = '. $row["Position"] . '/>';
                      echo '<input type="hidden" name="store" value = "Shoprite" />';
                      echo '<input type="hidden" name="food" value = "Vege" />';
                      echo '<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />'; 
                      echo '<br/>';
                      echo '</form>';
                  echo '</div>';
            }
        } else { 
            echo ' 0 results'; 
        }
    $conn->close();
    } 
?>

