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
    div.scrollmenu {
            background-color: #fffcfc;
            overflow: auto;
            white-space: nowrap;
        }

        div.scrollmenu a {
            display: inline-block;
            color: black;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }
        
        .scroll-box {
            display: flex; /* Use flexbox to align items horizontally */
            flex-wrap: nowrap; /* Prevent items from wrapping */
            overflow-x: scroll; /* Enable horizontal scrolling */
            overflow-y: hidden; /* Disable vertical scrolling */
            white-space: normal; /* Prevent line breaks */
            height: 450px; /* Set the height of the scroll box */
        }
        
        .item {
            flex-shrink: 0; /* Prevent items from shrinking */
            width: 300px; /* Set the width of each item */
            height: 100%; /* Set the height of each item */
            border: 1px solid black; /* Add a border for clarity */
            word-wrap: break-word; /* Wrap text within the box */
        }
        div.scrollmenu a:hover {
            background-color: #777;
        }
        
        .tab {
        text-align: center;
			overflow: hidden;
			border: 1px solid #ccc;
			background-color: #f1f1f1;
		}

		/* Style the buttons inside the tab */
		.tab button {
			background-color: inherit;
      display: block;
			display: inline-block;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 14px 16px;
			transition: 0.3s;
			font-size: 17px;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
			background-color: #ddd;
		}

		/* Create an active/current tablink class */
		.tab button.active {
			background-color: #ccc;
		}

		/* Style the tab content */
		.tabcontent {
			display: none;
			padding: 6px 12px;
			border: 1px solid #ccc;
			border-top: none;
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

<div class="tab">
		<button class="tablinks" onclick="openTab(event, 'Vegetables')">Vegetables</button>
		<button class="tablinks" onclick="openTab(event, 'Dairy Products')">Dairy Products</button>
</div>

<!-- Create the tab content -->
	<div id="Vegetables" class="tabcontent">
		<h1 style="text-align: center;">Vegetables</h1>
    <h3>Shoprite</h3>
		<div class="scroll-box">
         <?php
            include("ShopriteVege.php");
         ?>  
    </div>
    </br></br>
    <h3>Walmart</h3>
    <div class="scroll-box">
         <?php
            include("WalmartVege.php");
         ?>  
    </div>
	</div>

	<div id="Dairy Products" class="tabcontent">
		<h1 style="text-align: center;">Dairy Products</h1>
		<h3>Shoprite</h3>
    <div class="scroll-box">
         <?php
            include("ShopriteDairy.php");
         ?>  
    </div>
    </br></br>
    <h3>Walmart</h3>
    <div class="scroll-box">
         <?php
            include("WalmartDairy.php");
         ?>  
    </div>
	</div>

	<script>
		// Function to show the selected tab content
		function openTab(evt, tabName) {
			// Declare variables
			var i, tabcontent, tablinks;

			// Get all elements with class="tabcontent" and hide them
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}

			// Get all elements with class="tablinks" and remove the class "active"
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}

			// Show the current tab, and add an "active" class to the button that opened the tab
			document.getElementById(tabName).style.display = "block";
			evt.currentTarget.className += " active";
		}
	</script>

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