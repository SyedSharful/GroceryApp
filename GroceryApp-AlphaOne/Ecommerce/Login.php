// THIS IS FOR THE STORE WEBSITE LOGIN CONNECTS TO MySQL AND STORES INFO

<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if (!empty($username)){
    if (!empty($password)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "2056931";
        $dbname = "Login";

        $connection = new mysqli ($host, $dbusername, $dbpassword, $Login);
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO users (username, password) 
            VALUES ('$username','$password')";
            if ($connection->query($sql)){
            echo "Inserted!";
        }

        $connection->close();
        }
    }

}

?>