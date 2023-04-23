
a {
  background-color: red;
}

<?php
    //session_start() means that user is runnings their own session so system holds session info(username)
    session_start();  
    
    //Add the connection to the database
    include "database.php";


    //Grab data from the Grocery_Coupons database in ascention order. Id is % 2 as in the database, the odd rows are filled with null values
    $sql = "SELECT * FROM Grocery_Coupons WHERE Id % 2 = 0 ORDER BY Id ASC";
    
    //Query the result of the connection
    $result = $conn->query($sql);
    
    //Conditional: Check if the there are more than 0 rows in the database
    if ($result->num_rows > 0) {
          //Remove all special characters function execpt for certain ones in the preg_replace(), replace all removed speical characters with empty string
         function validate($data){
            $data = preg_replace('/[^a-zA-Z0-9_ -&,"\'$data\\.$data\\($data)\']/s','',$data);
            return $data;
        }
        //output data of each row
        while($row = $result->fetch_assoc()) {
            //$idval divides Id values by 2 so that the values printed are not every even number
            $idval = $row["Id"]/2;
            
            $name = validate($row["Brand"]);
            $off = validate($row["Save"]);
            $info = validate($row["Details"]);
            
            //display onto the Coupon.php in table format.
            
            //$check = "SELECT * FROM 
            echo "<tr>";
            echo "<td>" . $idval . "</td>";
            echo "<td>" . $name . "</td>";
            echo "<td>" . $off . "</td>";
            echo "<td>" . $info . "</td>";

            echo "<td> <a href=Cart.php?action=addcart" . $idval ." class='btn green'>Add</a></td>";
            
            
            echo "</tr>";
            
        }
        echo "</table>";
    } else { 
        echo "<tr><td> 0 results </td></tr>"; 
    }
    $conn->close();
?>

