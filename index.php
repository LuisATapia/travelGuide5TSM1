<html>
    <head>
        <title>Index</title>
        <?php require("head.php")  ?>
          <style>
    body{
      font-family: monospace;
      font-size: 18px;
      text-align: justify;
      
    }
    h1{
      text-align: center;
      font-size: 100px;
      
    }
    #descriptions{
      transform: translateY(-150%);
    }
    .con{
      background-image: url(img/logo_travelguide.PNG);
      background-attachment: fixed;
      background-size: 100vw 100vh;
    }
    #con{
      background-color: rgba(255,255,255,0.8)
    }
  </style>
    </head>
    <body>
        <?php require("menu_Standart.php") ?>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
       <a href="#">
        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" id="descriptions">
          <h1>WELCOME</h1>
          <p>TravelGuide&copy; the number one travel company.</p>
        </div>
      </a>
    </div>
    <div class="carousel-item">
     <a href="our.php">
      <img src="img/slide2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" id="descriptions">
        <h1>KNOW US</h1>
        <p>Come and meet part of us.</p>
      </div>
    </a>
  </div>
  <div class="carousel-item">
   <a href="register_Users.php">
    <img src="img/slide3.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block" id="descriptions">
      <h1>REGISTER NOW</h1>
      <p>Be part of us.</p>
    </div>
  </a>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
    </body>
</html>