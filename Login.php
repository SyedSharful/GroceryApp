<?php
    session_start();

    include "database.php";
    
    $uname = "";
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

        $sql = "SELECT * FROM grocery_account WHERE Username='$uname' AND Password='$pword'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Username'] === $uname && $row['Password'] === $pword) {
                echo "Logged in!";
                $_SESSION['username'] = $row['Username'];                       
                $_SESSION['password'] = $row['Password'];                    
                header("Location: index.php");
                exit();
            }else{
                //echo"Location: Login.php?error=Invalid username or password";
                //echo '<p class="error">Invalid username or password!</p>';
                //header()
                header("Location: Login.html?error=Incorect Username or password");
               
                echo '<script language="javascript">';
                echo  'alert("Invalid username or password");';
                echo '</script>';
                exit();
            }
        }else{
           // header("Location: Login.html?error=Incorect Username or password");
            //echo '<script language="javascript">';
            //echo  'alert("Invalid username or password");';
           // echo '</script>';

           header("Location: Login.html?error=Incorect Username or password");
               
        

            /*echo '<script language="javascript">';
            echo 'alert("Invalid username or password");';
            echo 'window.location.href="Login.html";';
            echo '</script>';*/
            exit();
        }
    }else{
        header("Location: Login.html");
        exit();
    }
?>