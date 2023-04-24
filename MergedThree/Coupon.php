<!doctype html>
<html lang="en">
  <head>
    <title>Saveit!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="FinalWebSite.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
        color: black;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 18px;
        text-align: left;
    } th {
        background-color: lightblue;
        color: white;
    }
tr:nth-child(even) {background-color: #f4f4f4}
</style>
    
  </head>
  <body>
      <header> 
          <div class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="container">
        <div class = "myNameTop">
            <h2>
                Saveit!
                &#128241;
            </h2>
        </div>
    <nav>
        <ul>
            <li> <a href="index.php">Home</a></li>
            <li> <a href="Shop.php">Shop</a></li>
            <li> <a href="Cart.php">Cart</a></li>
            <?php
                //session_start() means that user is runnings their own session so system holds session info(username), not sure if I need this
                session_start();
                
                //Check if user is signed into the system 
                if(isset($_SESSION['username'])) {
                    echo '<li><a href="Order.php">My Orders</a></li>';
                    echo '<li><a href="Logout.php">Logout</a></li>';
                }else{
                    echo '<li><a href="Login.php">Login</a></li>';
                }
            ?>
        </ul>
    </nav>
    </div>
</div>

 <!--Search Button -->
 <!--Submit action sends to another page called CouponSearch-->
<form id="search-form" action="CouponSearch.php" method="get">
    <input type="text" id="search-input" placeholder="Search..." name="search">
    <input type="submit" id="search-button" name ="submit">
</form>
<div>
  <p></p>
</div>
              
</header>

<!--Implement Coupons -->
<table>
    <tr>
        <th>Id</th>
        <th>Brand</th>
        <th>Save Off</th>
        <th>Description</th>
        <th> </th>
    </tr>
    
    <!--Connects to the Grocery_Coupon database and grabs all coupons-->
    <?php
        include("Coupondb.php");
    ?>
</table>

<footer>
    <div class="owlstuffbottom">
        <h6> Saveit!&#169; 2020</h6>
    </div>
    <div class="ghost"> <h6>?? @Saveit! </h6></div>
</footer>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>