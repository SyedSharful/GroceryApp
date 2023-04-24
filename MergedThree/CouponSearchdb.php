<?php
    //session_start() means that user is runnings their own session so system holds session info(username)
    session_start();  
    
    //Add the connection to the database
    include "database.php";
    
    //using GET(from the search bar in Coupon.php/CouponSearch.php under method="get") to check if user presses submit button(name="submit")
    if(isset($_GET['submit'])){
    
      //function used to remove all special characters to get the raw string
      function validate($data){
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }
    
      $str = validate($_GET['search']);
      
      //Grab data from the Grocery_Coupons database in ascention order. Brand LIKE '%".$str."%' checks if the string is in anyword in the database. Id is % 2 as in the database, the odd rows are filled with null values
      $sql = "SELECT * FROM Grocery_Coupons WHERE Id % 2 = 0 AND Brand LIKE '%".$str."%' ORDER BY Id ASC";
      
      //Query the result of the connection
      $result = $conn->query($sql);
      
      //Conditional: Check if the there are more than 0 rows in the database
      if ($result->num_rows > 0) {

        // output data of each row
        while($row = $result->fetch_assoc()) {
            //$idval divides Id values by 2 so that the values printed are not every even number
            $idval = $row["Id"]/2;
            
            //display onto the Coupon.php in table format
            echo "<tr><td>" . $idval. "</td><td>" . $row["Brand"] . "</td><td>" . $row["Save"]. "</td><td>" . $row["Details"]. "</td></tr>";
        }
          echo "</table>";
      } else { 
          echo "<tr><td> 0 results </td></tr>";   
      }
    $conn->close();
    }
?>
