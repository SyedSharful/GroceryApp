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
            <li> <a href="Cart.php">Cart</a></li>
            <li> <a href="Login.php">Log in</a></li>

        </ul>
    </nav>
    </div>
</div>
</header>

//Connect to session checking.
<?php
    require("LogoutCheck.php");
?>

<footer>
    <div class="owlstuffbottom">
        <h6> GroceryApp&#169; 2020</h6>
    </div>
    <div class="ghost"> <h6>í ½í±» @GroceryApp </h6></div>
</footer>


      
    <!-- 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    -->
  </body>
</html>
