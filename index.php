<?php session_start() ?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zapata - 100% Mexicano</title>
	
	<!-- Needed CSS & Font Files -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/presets/preset1.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link href="assets/css/jquery.bxslider.css" rel="stylesheet" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
	.crop{
 float:left;
 position:relative;
 width:150px;
 height:100px;
 border:none;
 margin:.5em 10px .5em 0;
 }
.crop p{
 margin:0;
 position:absolute;
 top:-20px;
 left:-55px;
 clip:rect(20px 150px 1px 100px);/* Agujero rectángulo de medida específica */
 }
        a{
text-decoration:none;
}
a:hover 
{
   text-decoration: none;
}
        .thumbnail {
  position: relative;
  width: 149px;
  height: 100px;
  overflow: hidden;
  border: none !important;
}
.thumbnail img {
  position: absolute;
  left: 50%;
  top: 50%;
  height: 100%;
  width: auto;
  -webkit-transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%);
          transform: translate(-50%,-50%);
}
.thumbnail img.portrait {
  width: 100%;
  height: auto;
}
	</style>
    
    
<meta property="og:title" content="Zapata" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.productoszapata.com.mx/" />
<meta property="og:image" content="http://www.productoszapata.com.mx/img/logos/zapataB.png" />
<meta property="og:description" content="Somos una empresa que ofrece productos mexicanos y servicios" />
</head>
<body>
	<!-- Preload Start -->
	<div class="preloader"> 
		<i class="fa fa-refresh fa-spin"></i>
	</div>
	<!-- Preload End -->
	
	<!-- Header Start -->
	<header id="header">
	
		<!-- Menu & Logo -->
		<div class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand sr-only" href="index.php">
						<h1><img class="img-responsive" src="assets/images/logo190x210.png" alt="logo"></h1>
					</a>                    
				</div>
				<div class="header-logo hidden-phone text-center">
					<h1>
						<a class="navbar-brand" href="index.php">
							<img class="img-responsive" src="assets/images/logo190x210.png" alt="logo">
						</a> 
					</h1>
				</div>
				<div class="header-menu collapse navbar-collapse">
					<ul class="nav navbar-nav">                 
						<li class="scroll active"><a href="index.php">Productos</a></li>
						<li class="scroll"><a href="about.php">Equipo</a></li>
						<li class="scroll"><a href="contact.php">Contacto</a></li>       
					</ul>
				</div>
			</div>
		</div>
		
	</header>
	<!-- Header End -->
	
	<!-- Portfolio Start -->
	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="title text-center col-sm-12">
					<h2>Nuestros Productos</h2>
				</div>
			</div>
			<div class="row">
                <center></center>
				<div class="portfolio-gallery">
                    <?php
                                include_once "util/con.php";
                                // Create connection
                                $conn = mysqli_connect($servername, $username, $password, $dbname);

								// Check connection
								if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
								}
								$sql = "SELECT productImage FROM productos where activa=1";
								$result = $conn->query($sql);
                                while($data = $result->fetch_assoc()){
								    echo '<div class="col-sm-3"><div class="crop">
						<div class="portfolio-gallery-item">
                        <div class="thumbnail">
							<img class="img-responsive" src="assets/images/slider/'.$data['productImage'].'" alt="Image1">
							<a href="assets/images/slider/'.$data['productImage'].'" rel="prettyPhoto[gallery]">
								<i class="fa fa-search-plus"></i>
							</a>
                        </div>
						</div>
                        </div>
					</div>';
                                }
$conn->close();
                                ?>

				</div>
                </center>
			</div>
		</div>
	</section>
	<!-- Portfolio End -->
    <!-- Videos -->
    <div align="center">
        <ul class="bxslider">
            <li> 
                <iframe width="560" height="315" src="https://www.youtube.com/embed/7p89f3fIfoU" frameborder="0" allowfullscreen></iframe>
            </li>
            <li>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/u51QUcYtUek" frameborder="0" allowfullscreen></iframe>
            </li>
            <li>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/zlpqrhGcUeE" frameborder="0" allowfullscreen></iframe>
            </li>
            <li>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/PAh0WjZiKGM" frameborder="0" allowfullscreen></iframe>
            </li>
            <li>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/SDZzrforIpE" frameborder="0" allowfullscreen></iframe>
            </li>
            <li>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/01jB90o27YI" frameborder="0" allowfullscreen></iframe>
            </li>
            <li>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/tNwVqmQKeec" frameborder="0" allowfullscreen></iframe>
            </li>
            <li>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/b7ts9dmYGfs" frameborder="0" allowfullscreen></iframe>
            </li>
            <li> 
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ax6oxrQ8T50" frameborder="0" allowfullscreen></iframe>
            </li>
            <li>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OjsubuqeW-c" frameborder="0" allowfullscreen></iframe>
            </li>
        </ul>
    </div>
	<!-- Videos End -->
	<!-- Footer Start -->
	<footer id="footer">
		<div class="footer-top">
<!--
			<div class="container text-center">
				<div class="footer-social">
					<ul>
						<li><a class="envelope" href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
-->
		</div>
		<div class="footer-bottom">
			<div class="container">
					<div class="col-sm-6">
                        <div class="row">
						 <a href="eng/index.php">
                             <p style="color: white;"><img src="assets/ico/usa.png" style="float: left !important;" class="img-responsive" alt="english" height="25" width="25">english</p>
                        </a>
                        </div>
                        <div class="row">
						  <p>© 2017 Zapata.</p>
                        </div>
					</div>
					<div class="col-sm-6">
                        <div class="row">
                            <p class="pull-right"><i class="fa fa-mobile" aria-hidden="true"></i> Teléfono: +971 56 494 4632</p>
                        </div>
                        <div class="row">
                            <p class="pull-right"><i class="fa fa-mobile" aria-hidden="true"></i> Teléfono: +52 1 33 14465437</p>
                        </div>
					</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->
	
	<!-- Needed jQuery Files -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="assets/js/main.js" type="text/javascript"></script>
    <!-- jQuery library -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    
    <!-- bxSlider Javascript file -->
    <script src="assets/js/jquery.bxslider.js"></script>
    <script>
	   $(document).ready(function(){
		  $('.bxslider').bxSlider({
			 mode: 'horizontal',
			 moveSlides: 1,
			 slideMargin: 10,
			 infiniteLoop: true,
			 slideWidth: 660,
			 minSlides: 1,
			 maxSlides: 1,
			 speed: 800,
                useCSS: false
		  });
	   });
    </script>

</body>
</html>