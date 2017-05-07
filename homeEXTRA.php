<?php 		
require_once 'conn.php';


?>
<html>
  <head>
    <title>Pet Planet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="green">Pet</span> Planet</a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">Pets <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Dog</a></li>
                <li><a href="#">Rabbits</a></li>
                <li><a href="#">Cat</a></li>
                <li class="divider"></li>
                <li><a href="Project2.html">All Pets</a></li>
              </ul>
            </li>
            <li><a href="#">Vet</a></li>
            <li><a href="#">Pet Food</a></li>
            <li><a href="#">About Us</a></li>
			<?php 
			if(isset($_session))
			{				?>
				<li><a href="login.html">Logout</a></li> 
				<?php 
			}
			else
			{
				?>
			<li><a href="login.html">Login</a></li>
			<?php 
			}
			?>
          </ul>
        </nav>
      </div>
    </div><!-- End Navigation bar -->

    <!-- Slide gallery -->
    <div class="jumbotron">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/dog2.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/rabbit2.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/kitten1.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div><!-- End Slide gallery -->
    <h3 class="text-center"></h3>
    <!-- Thumbnails -->
    <div class="container thumbs">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/kitten2.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">Cats</h3>
            <p><b>Breeds:</b><br/>Ragdoll, Siamese Cat, Biman, Himalayan Cat, Munchkin Cat.</p>
            <div class="btn-toolbar text-center">
              <a href="#" role="button" class="btn btn-success">Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/dog1.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">Dogs</h3>
            <p><b>Breeds:</b><br/>Labrador Retriever, Chihuahua, German Shepherd, Rottweiler.</p>
            <div class="btn-toolbar text-center">
              <a href="#" role="button" class="btn btn-success">Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/rabbit4.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">Rabbits</h3>
            <p><b>Breeds:</b><br/>Flemish Giant Rabbit, Dwarf Hotot, French Lop, Angora Rabbit</p>
            <div class="btn-toolbar text-center">
              <a href="#" role="button" class="btn btn-success">Details</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Thumbnails -->
    <!-- Content -->
    <div class="container">
      <h3 class="text-center">Welcome to Pet Planet</h3>
      <p align="center">House is not a home without a pet.</p>
    </div><!-- End Content -->
    <!-- Footer -->
    <div class="footer text-center">
        <p>Created by Gedeon, Riya &amp Pracheta</p>
    </div><!-- End Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
  </body>
</html>