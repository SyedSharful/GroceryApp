<?php
    //session_start() means that user is runnings their own session so system holds session info(username)
    session_start();
    
    //Add the connection to the database
    include "database.php";

    $uname = "";
    $pword = "";
    $email = "";
    $fname = "";
    $lname = "";
    $addr = "";
    $phone = "";
    $errors = array();
    
    //Check if user clicked sumbit button
    if(isset($_POST['submit'])){
      //function to break down the string, for security reasons
       function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $uname = validate($_POST['username']);
        $pword = validate($_POST['password']);
        $email = validate($_POST['email']);
        $fname = validate($_POST['firstname']);
        $lname = validate($_POST['lastname']);
        $addr = validate($_POST['addr']);
        $phone = validate($_POST['phone']);
        
        //Find rows with similar username,email, or phone number
        $sql = "SELECT * FROM Grocery_Account WHERE Username='$uname' OR Email='$email' OR Phone_Number='$phone'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
       
         
        if ($row['Username'] === $uname){
            //Conditional: Check if there is an existing username in the db
            echo '<script language="javascript">';
            echo 'alert("Username already exists!");';
            echo 'window.location.href="Signin.php";';
            echo '</script>';
            exit();
        }elseif ($row['Email'] === $email){
            //Conditional: Check if there is an existing email in the db
            echo '<script language="javascript">';
            echo 'alert("That email has been used");';
            echo 'window.location.href="Signin.php";';
            echo '</script>';
            exit();
        }elseif ($row['Phone_Number'] === $phone){
            //Conditional: Check if there is an existing phone number in the db
            echo '<script language="javascript">';
            echo 'alert("That phone number has already been used");';
            echo 'window.location.href="Signin.php";';
            echo '</script>';
            exit();
        }else{
            //if the first 3 conditions are false, add into db
            $insert_sql = "INSERT INTO Grocery_Account (Username,Email,Password,First_Name,Last_Name,Address,Phone_Number, user_type) 
                          VALUES ('$uname', '$email', '$pword', '$fname', '$lname', '$addr', '$phone','user')";
            mysqli_query($conn, $insert_sql);
            echo "Signed in!";
            //$_SESSION holds onto info about the user in that session, for each file, add session_start() to have this info in those files
            $_SESSION['username'] = $uname;
                   
            //If everything is done, move to the home page
  	        header('location: index.php');
            exit();
        }     
    }else{
        header("Location: index.php");
        exit();
    }
?>
