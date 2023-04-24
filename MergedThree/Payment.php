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
    
    <!-- for the date -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
        color: black;
        font-family: Arial, Helvetica, sans-serif;
        width: 100%;
        font-size: 18px;
        text-align: center;
        table-layout: fixed;
    } th {
        white-space: pre-wrap;
        background-color: lightblue;
        color: white;
        
    }th td{
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
        width: 25%; /* or any other value */
    }
    tr:nth-child(even) {background-color: #f4f4f4
    }
    form {
        text-align: center;
    } 
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
            <li> <a href="Coupon.php">Coupon</a></li>
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
</header>
    
  <h1>Payment Information</h1>
  
  <?php 
        include("PayProcess.php");
  ?>
  </br>
  
	<form method="post" action="PayConfirm.php">
		<label for="payment">Credit Card Number:</label>
		<input type="text" name="payment" id="payment" pattern="\d{16,16}" title="must have 16 digits" required>

    <label for="card_exdate">Expiration Date:</label>
		<input type="text" name="card_exdate" id="card_exdate" placeholder="MM-DD-YYYY" pattern="\d{2}-\d{2}-\d{4}" required>

    <label for="cvv">CVV:</label>
		<input type="text" name="cvv" id="cvv" pattern="\d{3,4}" required ><br>

		<label for="location">Delivery Location:</label>
		<input type="text" name="location" id="location" required>
   
    <label for="zip">Zipcode:</label>
		<input type="text" name="zip" id="zip" pattern="\d{5,5}" required></br>

		<label for="delivery_time">Delivery Time:</label>
		<input type="text" name="delivery_time" id="delivery_time" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?" placeholder="xx:xx" required>
     
    <label for="time"></label>
    <select id="time" name="time">
       <option value="am">AM</option>
       <option value="pm">PM</option>
    </select></br>
    
		<input type="submit" value="Place Order">
	</form>
  </br>

<footer>
    <div class="owlstuffbottom">
        <h6> Saveit!&#169; 2020</h6>
    </div>
    <div class="ghost"> <h6>?? @Saveit! </h6></div>
</footer>

<script>
  $( function() {
    $( "#card_exdate" ).datepicker();
  } );
</script>

      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  </body>
</html>