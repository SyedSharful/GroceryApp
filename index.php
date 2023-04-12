<!doctype html>
<html lang="en">
  <head>
    <title>WeCellPhones</title>
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
                WeCellPhones
                &#128241;
            </h2>
        </div>
    <nav>
        <ul>
            <li> <a href="Shop.html">Shop</a></li>
            <li> <a href="Login.html">Log in</a></li>
            <li><a href="Cart.php">Cart</a></li>
            <li><a href="Logout.php">Logout</a></li>

        </ul>
    </nav>
    </div>
</div>
</header>

<section class="showcaseWindow">
    <div class="container"> 
        <section class="SlideShow"> 
          <script>
              var i = 0;
              var images = [];
              var time = 2000;

              images[0] = 'PhoneOne.png';
              images[1] = 'PhoneTwo.png';
              images[2] = 'PhoneThree.png';
              images[3] = 'PhoneFive.jpeg';

              function imgChange(){
                document.slide.src = images[i];
                
                if(i<images.length-1){
                  i++;
                }
                else{
                  i=0;
                }
            
              setTimeout("imgChange()", time);
              }
              
              window.onload = imgChange;
          </script>

          <img name = "slide" width="400" height="300">

            </section>
        <h1> Welcome to WeCellPhones </h1>
        <p><strong>(All products on Holiday Sale!) </strong></p>
        <p>
            <strong>(Stuff about the company goals and etc goes here)</strong> assumenda dolorum officia expedita corporis natus necessitatibus error quod veritatis molestiae est, ipsum illum provident sed dignissimos? Repudiandae, veritatis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus  Accusamus cum et, assumenda dolorum officia expedita corporis natus necessitatibus error quod veritatis molestiae est, ipsum illum provident sed dignissimos? Repudiandae, veritatis.
            
        </p>

    </div>

</section>


<!--bootstrap this kinda weird to understand-->

<section class="pagesandcontacts">
    <button type="button" class="btn btn-info">page</button>
    <a href="index.html"><button type="button" class="btn btn-info active">1</button></a></button>
    <a href="Shop.html"><button type="button" class="btn btn-info ">2</button></a></button>
    <button type="button" class="btn btn-info">3</button>
    <button type="button" class="btn btn-info">4</button>
    <a href="contacts.html" class="btn btn-info" role="button">contacts</a>


</section>

<footer>
    <div class="owlstuffbottom">
        <h6> WeCellPhones&#169; 2020</h6>
    </div>
    <div class="ghost"> <h6>👻 @WeCellPhones </h6></div>
</footer>


      
    <!-- 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    -->
  </body>
</html>