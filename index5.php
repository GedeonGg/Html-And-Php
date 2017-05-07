<?php
include('conn.php');
?>
<html>
  <head>
    <title>Pets Zone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link  href="css/style1.css" rel="stylesheet"/>
    
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
          <a class="navbar-brand" href="#"><span class="green">Pets</span> Zone</a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
        <ul class="navbar-nav nav">
            <li class="active"><a href="index.php ">Home</a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">Pets <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="rd.php">Dogs</a></li>
                <li><a href="rr.php">Rabbits</a></li>
                <li><a href="rc.php">Cats</a></li>
				<li><a href="rh.php">Horses</a></li>
				<li><a href="rp.php">Pigs</a></li>
				<li><a href="rb.php">Birds</a></li>
				<li><a href="rf.php">Fishes</a></li>
				<li><a href="rm.php">Mousses</a></li>
                <li class="divider"></li>
                <li><a href="Project2.html">All Pets</a></li>
              </ul>
            </li>
            <li><a href="pf.html">Food</a></li>
            <li><a href="#">About Us</a></li>
			
			<?php
			
			if(isset($_SESSION['username']))
			{
			?>
			<li><a href="index.php" >Logout</a></li>
			<li><a href="upload.php" >Upload</a></li>
			<?php unset($_SESSION['username']);
			}
			else
			{
				unset($_SESSION['username']);
				
				?>
				<li><a href="login.php">Login</a></li>
			<?php
			}
			?>
		</ul>
			</li>
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
	<section id="usercontent">
		<article>
				<table>
						<tr>
							<td>
								<div id="image_block1">
										<div id=photo_block>
											<img src="img/caniche_1.jpg" height="200" width="200" id="joie" alt="picture"/>
										</div>
											<h2>Iti</h2>
											<p>Originary of Europe<br/>
											Female, Teenager
											</p>
											<button type="button" sytle="color:green">Buy</button>
								</div>
							</td>
							<td>
								<div id="image_block1">	
										<div id=photo_block>
										<img src="img/chihuahua_2.jpg" height="200" width="200" id="joie" alt="picture"/>
										</div>
											<h2>poo</h2>
											<p> Originary of Latin America<br/>
											Male,teenager
											</p>
											<button type="button">Buy</button>
								</div>
							</td>
							<td>
								<div id="image_block1">
										<div id=photo_block>
											<img src="img/beagle_1.jpg" height="200" width="200" alt="picture"/>
										</div>
											<h2>akoo</h2>
											<p>Originary of Asia<br/>
											Female, Teenager
											</p>
											<button type="button">Buy</button>
								</div>
							</td>
						</tr>													
				</table>
				<table>
						<tr>
							<td>
								<div id="image_block1">
									<div id=photo_block>
										<img src="img/rottweiler_1.jpg" height="200" width="200" alt="picture"/>	
									</div>
											<h2>Chucky</h2>
											<p> Originary of south india<br/>
											Female, Teenager
											</p>
											<button type="button">Buy</button>																			
								</div>
							</td>
							<td>
								<div id="image_block1">		
									<div id=photo_block>
										<img src="img/huskey_2.jpg"  height="200" width="200" alt="picture"/>
									</div>
											<h2>Iko</h2>
											<p> Originary of Pole<br/>
											Female, Teenager
											</p>
											<button type="button">Buy</button>
								</div>
							</td>
							<td>
								<div id="image_block1">	
									<div id=photo_block>
										<img src="img/tibetian massif_2.jpg" height="200" width="200" alt="picture"/>	
									</div>
											<h2>Ashley</h2>
											<p> Originary of Tibet<br/>
											Female, teenager
											</p>
											<button type="button">Buy</button>
								</div>
							</td>
						</tr>
				</table>
				<table>
						<tr>
							<td>
								<div id="image_block1">	
								<div id=photo_block>
									<img src="img/saint bernard_2.jpg"  height="200" width="200" alt="picture"/>	
								</div>
									<h2>Zoe</h2>
									<p> Originary of Asia<br/>
									Female, teenager
									</p>
									<span id="button">
										<button type="button">Buy</button>
									</span>
								</div>
							</td>
							<td>
								<div id="image_block1">	
								<div id=photo_block>
									<img src="img/pug_3.jpg" height="200" width="200" alt="picture"/>	
								</div>
									<h2>Yupi</h2>
									<p> Originary of Asia<br/>
									Male, Teenager
									</p>
									<button type="button">Buy</button>
								</div>
							</td>
							<td>
								<div id="image_block1">	
								<div id=photo_block>
									<img src="img/german sheperd_3.jpg" height="200" width="200"alt="picture"/>
								</div>
									<h2>Rocky</h2>
									<p>Originary of EUrope<br/>
									Male,teenager
									</p>
									<button type="button" align="center">Buy</button>
								</div>
							</td>
						</tr>
				</table>
		</article>
		<aside>
		<div id="aside_1">
			<marquee width="300" height="600" direction="down"onmouseover="this.stop();" onmouseout="this.start();">
				<p>From many angles, it is proved that animals are our friends. We establish intimacy with them by "keeping them as our pets. Sometimes they are kept in cages. There are some pet animals who are allowed to stay with us freely. Both, animals and birds can be our pets.

Dog is a faithful animal. Probably, it is the most faithful of all. It plays the role of a watchman. It guards our houses constantly. When it finds that its master's life is in danger, it comes to his rescue. There are many stories about the courageous acts of dogs. Our friends may turn faithless. But our pet dogs can never be faithless.

Cat is another pet animal. Most people keep cats as pets for the sake of fashion. In spite of it the merits of cat as a pet animal cannot be denied. When our houses are ravaged by rats, cats help us. They kill all the rats and thus save our food grains from ruin.

People who keep cats as pets tolerate their peculiar habits. Sometimes they sleep with us on the same bed. They sit close to us when we take our meals. They delight us with their mewing sound. We call them by funny names.

Some people keep monkeys as pets. Their chief intention is to get pleasure, because monkeys are not as helpful as Dogs or cats. Children play with them. Some people teach them different tricks which are utilised as means of income.

There are some people who keep rabbit, mongoose, white mouse, etc. as pet, because these animals are beautiful to look at.
				</p>
			</marquee>			
		</div>
		<div id="aside_2">
				<p>Dogs are not only animal but also they are pets , friends and Investigators.Investigation Department keep Dogs as Security agent to find the critical solution of a problem.They are trained so cleverly so they are called smart animal.Dogs are too Smart to catch up the things very easily.
				</p>
							<?php   
					 require_once 'conn.php';
								$sql = "select * from videos";
								$result = mysqli_query($con,'select * from videos') or die ("Could not access DB" . mysql_error());

								while ($row = mysqli_fetch_assoc($result))
								{  
					 $src=$row ['videos'];
										$path="http://localhost:8888/home/";
									?>
					 <video width="300"  controls>
						  <source src="videos/<?php echo $row['videos'] ?>" type="video/mp4"  >
						</video> 
					 <?php
								}
							?>
		</div>
		</aside>
    <!-- Content -->
    <div class="container">
      <h3 class="text-center"></h3>
      <p align="center"></p>
    </div><!-- End Content -->
    <!-- Footer -->
</section></br>
    <div id="footer">
		<table id="table">
						<tr>
							<td>
								<div id="footer_block_unique">
										<h2>
											<a><span class="green">Pets</span> Zone</a>
										</h2>
										<h4>Follow Us :</h4>
										<a href="https://www.facebook.com/Petfinder/" target="_blank" align="left">
										<img src="http://www.niftybuttons.com/dirtytag/facebook.png"></a>
										<a href="https://twitter.com/petfinder" target="_blank" align="left">
										<img src="http://www.niftybuttons.com/dirtytag/twitter.png"></a>

								</div>
							</td>
							<td>
								<div id="footer_block">
										<h6>PET ADOPTION</h6>	
										<a><span>Dog Adoption</span></a><br/>
										<a><span>Cat Adoption</span></a><br/>
										<a><span>Other Pet Adoption</span></a><br/>
										<a><span>Search Adoption</span></a>
										<a><span>Organizations</span></a>
										<a><span>Pet-Adoption Stories</span></a>
										<a><span>Local Adoption Events</span></a>
								</div>
							</td>
							<td>
								<div id="footer_block">
										<h6>CORPORATE</h6>	
										<a><span>partnerships</span></a><br/>
										<a><span>Privacy Policy</span></a><br/>
										<a><span>Terms of Service</span></a><br/>
										
										<div id="fb-root"></div>
											<script>(function(d, s, id) {
											  var js, fjs = d.getElementsByTagName(s)[0];
											  if (d.getElementById(id)) return;
											  js = d.createElement(s); js.id = id;
											  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
											  fjs.parentNode.insertBefore(js, fjs);
											}(document, 'script', 'facebook-jssdk'));</script>
										<div class="fb-like" data-href="https://www.facebook.com/Petfinder/?fref=ts" data-width="50" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
								</div>
							</td>
						</tr>
		</table>
    </div><!-- End Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
  </body>
</html>