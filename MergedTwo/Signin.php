<!doctype html>
<html lang="en">
  <head>
    <title>GroceryApp</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="FinalWebSite.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
   <header> 
          <div class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="container">
        <div class = "myNameTop">
            <h2>
                GroceryApp
                &#128241;
                  
            </h2>
        </div>
    <nav>
        <ul>
            <li> <a href="index.php">Home</a></li>
            <li> <a href="Shop.php">Shop</a></li>
            <li> <a href="Coupon.php">Coupon</a></li>
            <li> <a href="Cart.php">Cart</a> </li>
            <li> <a href="Login.php">Log in</a></li>
        </ul>
    </nav>
    </div>
</div>
    <?php
    session_start();
    // Display errors and user input in the form
    if (count($errors) > 0) {
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
    }
?>


    <h1 style="text-align: center;">Sign up</h1>
<section class="form-container">
    <form method = "post" action="SigninCheck.php" style="text-align: center;">
        <!--First Name-->
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" required><br>
        
        <!--Last Name-->
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" required><br>
        
        <!--Email-->
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Enter your Email" required><br>
        
        <!--Address #-->
        <label for="addr">Address:</label>
        <input type="text" id="addr" name="addr" placeholder="Enter your address" required><br>
        
        <!--Phone #-->
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required><br>
    
        <!--Username-->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter Username" required><br>

        <!--Password-->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required><br>
        
        <!--Signing in-->
        <button type="submit" value="Signup" name="submit">Submit</button>
        
        <p>Already have an account? <a href="Login.php">Login Here!</a></p>
      </form>
 </section>  
    <!-- 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    -->
</body>
</html>