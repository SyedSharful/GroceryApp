<?php
    session_start();
    
    include "database.php";

    $uname = "";
    $pword = "";
    $email = "";
    $fname = "";
    $lname = "";
    $addr = "";
    $phone = "";
    $errors = array();
    if(isset($_POST['username']) && isset($_POST['password'])){
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
        
        $sql = "SELECT * FROM Grocery_Account WHERE Username='$uname' OR Email='$email' OR Phone_Number='$phone'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
       
        if ($row['Username'] === $uname){
            echo '<script language="javascript">';
            echo 'alert("Username has been taken");';
            echo 'window.location.href="Signin.html";';
            echo '</script>';
            exit();
        }elseif ($row['Email'] === $email){
            echo '<script language="javascript">';
            echo 'alert("That email has been used");';
            echo 'window.location.href="Signin.html";';
            echo '</script>';
            exit();
        }elseif ($row['Phone_Number'] === $phone){
            echo '<script language="javascript">';
            echo 'alert("That phone number has already been used");';
            echo 'window.location.href="Signin.html";';
            echo '</script>';
            exit();
        }else{
            $insert_sql = "INSERT INTO Grocery_Account (Username,Email,Password,First_Name,Last_Name,Address,Phone_Number) 
                          VALUES ('$uname', '$email', '$pword', '$fname', '$lname', '$addr', '$phone')";
            mysqli_query($conn, $insert_sql);
            echo "Signed in!";
            $_SESSION['username'] = $uname;
  	        $_SESSION['password'] = $pword;
  	        header('location: index.php');
            exit();
        }     
    }else{
        header("Location: index.php");
        exit();
    }
?>