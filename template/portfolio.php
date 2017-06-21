<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio - Beite | PCMShaper</title>
	
	<!-- Needed CSS & Font Files -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/presets/preset1.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<style>
	.crop{
 float:left;
 position:relative;
 width:150px;
 height:90px;
 border:1px solid #ccc;
 margin:.5em 10px .5em 0;
 }
.crop p{
 margin:0;
 position:absolute;
 top:-20px;
 left:-55px;
 clip:rect(20px 290px 200px 20px);/* Agujero rectángulo de medida específica */
 }
	</style>
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
					<a class="navbar-brand sr-only" href="index.html">
						<h1><img class="img-responsive" src="assets/images/logo.png" alt="logo"></h1>
					</a>                    
				</div>
				<div class="header-logo hidden-phone text-center">
					<h1>
						<a class="navbar-brand" href="index.html">
							<img class="img-responsive" src="assets/images/logo.png" alt="logo">
						</a> 
					</h1>
				</div>
				<div class="header-menu collapse navbar-collapse">
					<ul class="nav navbar-nav">                 
						<li class="scroll"><a href="index.html">Home</a></li>
						<li class="scroll"><a href="about.html">About Us</a></li>                     
						<li class="scroll active"><a href="portfolio.html">Portfolio</a></li>
						<li class="scroll"><a href="contact.html">Contact</a></li>       
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
					<h2>Photo Gallery</h2>
				</div>
			</div>
			<div class="row">
				<div class="portfolio-gallery">
				    <?php
                                //Datos de Conexión
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "zapata";
                                
                                // Create connection
                                $conn = mysqli_connect($servername, $username, $password, $dbname);

								// Check connection
								if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
								}
								$sql = "SELECT productImage FROM productos";
                                if(!isset($_SESSION['productos'])){
								   $result = $conn->query($sql);
								   session_start();
								   $_SESSION['productos']=$row = $result->fetch_assoc();

                                } else {
                                    $result = $_SESSION['productos'];
                                }
                                while($data = $result->fetch_assoc()){
								
									echo '<div class="col-sm-4"><div class="crop">
						<div class="portfolio-gallery-item">
							<img class="img-responsive" style="max-height: 200px;" src="assets/images/portfolio/small/'.$data['productImage'].'" alt="Image1">
							<a href="assets/images/portfolio/small/'.$data['productImage'].'" rel="prettyPhoto[gallery]">
								<i class="fa fa-search-plus"></i>
							</a>
						</div>
					</div></div>';
                                }
                                ?>
					
					
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio End -->
	
	<!-- Footer Start -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container text-center">
				<div class="footer-logo">
					<a href="index.html"><img class="img-responsive" src="assets/images/logo-white.png" alt=""></a>
				</div>
				<div class="footer-social">
					<ul>
						<li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
						<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<p>© 2017 Beite Theme.</p>
					</div>
					<div class="col-sm-6">
						<p class="pull-right">Designed by <a href="https://pcmshaper.com" target="_blank">PCMShaper</a></p>
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
</body>
</html>