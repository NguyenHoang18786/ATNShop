<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ATN Shop</title>
    <marquee direction="left" class="marquee" onmouseover="this.stop();" onmouseout="this.start();">This site is under maintainance!</marquee>
    <link rel="stylesheet" href="styleAs.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384 DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
      // Prevent dropdown menu from closing when click inside the form
      $(document).on("click", ".navbar-right .dropdown-menu", function(e){
      	e.stopPropagation();
      });
    </script>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php"><b>ATN</b>Shop</a>  		
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <span class="navbar-toggler-icon"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      </div>
      <!-- Collection of nav links, forms, and other content for toggling -->
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Shop </a>
            <ul class="dropdown-menu">
              <li><a href="ATNshop1.php">ATN Shop 1</a></li>
              <li><a href="#">ATN Shop 2</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form form-inline">
          <div class="input-group search-box" style="margin-left: 285px">
            <input type="text" id="search" class="form-control" placeholder="Search here...">
            <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li>
  <!-- Login -->
            <a href="login.php" class="btn btn-primary get-started-btn mt-1 mb-1"> &nbsp;&nbsp;Login</a>            
          </li>
        </ul>
      </div>
    </nav>
    <center>
      <img src="Advertise.jpg" width="1490" height="200">
      <hr>
      <h1 style="color: cornflowerblue">
        ATN Shop 2
      </h1>
         <hr>
    </center>
  </head>
  <body>
    <br>
    <div class="container-xl">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <center><img src="Cartoy.png" class="d-block w-50" alt="toy"></center>
            <div class="carousel-caption d-none d-md-block">
              <h4 style="color: white">Car Toy</h4>
            </div>
          </div>
          <div class="carousel-item">
            <center><img src="Picachusofttoy.png" class="d-block w-50" alt="toy"></center>
            <div class="carousel-caption d-none d-md-block">
              <h4 style="color: white">Pikachu Soft Toy</h4>
            </div>
          </div>
          <div class="carousel-item">
            <center><img src="Ricecarrottoy.png" class="d-block w-50" alt="toy"></center>
            <div class="carousel-caption d-none d-md-block">
              <h4 style="color: white">Rice Carrot Toy</h4>
            </div>
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
    </div>
    <br><hr>
    <div class="container-xl">
      <h3 style="color: red">Bestseller !!!</h3>
      <div class="card-deck">
        <div class="card">
          <img src="Cartoy.png" style="width:300px;height:300px;" class="card-img-top" alt="a toy">
          <div class="card-body">
            <h4 style="color: cornflowerblue" class="card-title">Car Toy</h4>
            <h5 style="color: red" class="card-title">790.000 đ</h5>
            <h5 class="card-title">Product ID: 1001</h5>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-danger">Buy Now</button>
          </div>
        </div>
        <div class="card">
          <img src="Diplodocustoy.png" style="width:300px;height:300px;" class="card-img-top" alt="a toy">
          <div class="card-body">
            <h4 style="color: cornflowerblue" class="card-title">Diplodocus Toy</h4>
            <h5 style="color: red" class="card-title">1.990.000 đ</h5>
            <h5 class="card-title">Product ID: 2001</h5>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-danger">Buy Now</button>
          </div>
        </div>
        <div class="card">
          <img src="Dolltoy.png" style="width:300px;height:300px;" class="card-img-top" alt="a phone">
          <div class="card-body">
            <h4 style="color: cornflowerblue" class="card-title">Doll Toy</h4>
            <h5 style="color: red" class="card-title">1.390.000 đ</h5>
            <h5 class="card-title">Product ID: 3001</h5>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-danger">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container-xl">
      <h3 style="color: red">Highlights</h3>
      <div class="card-deck">
        <div class="card">
          <img src="Picachusofttoy.png" style="width:300px;height:300px;" class="card-img-top" alt="a phone">
          <div class="card-body">
            <h4 style="color: cornflowerblue" class="card-title">Pikachu Soft Toy</h4>
            <h5 style="color: red" class="card-title">1.290.000 đ</h5>
            <h5 class="card-title">Product ID: 4001</h5>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-danger">Buy Now</button>
          </div>
        </div>
        <div class="card">
          <img src="Ricecarrottoy.png" style="width:300px;height:300px;" class="card-img-top" alt="a phone">
          <div class="card-body">
            <h4 style="color: cornflowerblue" class="card-title">Rice Carrot Toy</h4>
            <h5 style="color: red" class="card-title">2.190.000 đ</h5>
            <h5 class="card-title">Product ID: 5001</h5>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-danger">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer id="site-footer">
    <div id="footer2">
      <img src="map.png" width="100" height="100">
      <h4 class="footerText">&nbsp; Our Place</h4>
    </div>
    <br><br><br>
    <div class="container-xl">
      <div class="row">
        <div class="col-sm">
          <a href="#" class="">
            <p class="footerText">About us</p>
          </a>
          <a href="#" class="linkFooter2">
            <p class="footerText">Privacy Policy</p>
          </a>
          <a href="#" class="linkFooter2">
            <p class="footerText">Look up warranty information</p>
          </a>
          <a href="#" class="linkFooter2">
            <p class="footerText">Employment information</p>
          </a>
          <a href="#" class="linkFooter2">
            <p class="footerText">Promotion Information</p>
          </a>
        </div>
        <div class="col-sm">
          <a href="#" class="linkFooter2">
            <p class="footerText">Return policy</p>
          </a>
          <a href="#" class="linkFooter2">
            <p class="footerText">Shop system</p>
          </a>
          <a href="#" class="linkFooter2">
            <p class="footerText">Warranty system</p>
          </a>
        </div>
        <div class="col-sm">
          <h5>Shopping advice (Free) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
          <h3 style="color: red">0 990 990</h3>
        </div>
        <div class="col-sm">
          <h5>Comments and complaints about the service (8:00 - 22:00)</h5>
          <h3 style="color: red">0 880 808</h3>
        </div>
      </div>
    </div>
    <center>
      <a class="linkFooter" href="ATNCompany@gmail.com">ATNCompany@gmail.com</a><br>
      <p>Copyright  2020 Domain Name - All Rights Reserved </p>
    </center>
  </footer>
</html>
