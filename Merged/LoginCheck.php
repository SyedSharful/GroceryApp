<?php
    //session_start() means that user is runnings their own session so system holds session info(username)
    session_start();

    //Add the connection to the database
    include "database.php";
    
    $uname = "";
    $errors = false; 
    
    
    //Check if user inputed username and password
    if(isset($_POST['username']) && isset($_POST['password'])){
        //function to break down the string, for security reasons
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $uname = validate($_POST['username']);
        $pword = validate($_POST['password']);

        //Get the username and password from the db
        $sql = "SELECT * FROM Grocery_Account WHERE Username='$uname' AND Password='$pword'";
        $result = mysqli_query($conn, $sql);
        
        //check if there is a result in the db
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            
            //Conditional: check if username and password are both the same
            if ($row['Username'] === $uname && $row['Password'] === $pword) {
                echo "Logged in!";
                //$_SESSION holds onto info about the user in that session, for each file, add session_start() to have this info in those files
                $_SESSION['username'] = $row['Username'];                       
                $_SESSION['password'] = $row['Password'];
                
                //If everything is done, move to the home page                    
                header("Location: index.php");
                exit();
            }else{
                echo"Location: Login.php?error=Invalid username or password";
                //$error = true;
                //header()
                //header("Location: Login.php?error=Incorect Username or password");
                exit();
            }
        }else{
           // header("Location: Login.php?error=Incorect Username or password");
            //echo '<script language="javascript">';
            echo  'alert("Invalid username or password");';
           // echo '</script>';
            //echo '<p class="error">Invalid username or password!</p>';
            //$error = true;
            //header("Location: Login.php?error=Incorect Username or password");
               
        

            /*echo '<script language="javascript">';
            echo 'alert("Invalid username or password");';
            echo 'window.location.href="Login.html";';
            echo '</script>';*/
            exit();
        }
    }else{
        header("Location: Login.php");
        exit();
    }
?>