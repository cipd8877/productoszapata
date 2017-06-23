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
	
	
	<!-- Contact Start -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="title text-center col-sm-12">
					<h2>Contáctanos</h2>
				</div>
			</div>
			<div class="contact-wrap">
				<div class="row">
					<div class="col-sm-6">
						<form id="contact-form" name="contact-form" method="post" action="#">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Correo Address" required="required">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" name="subject" class="form-control" placeholder="Asunto" required="required">
							</div>
							<div class="form-group">
								<textarea name="message" id="message" class="form-control" rows="4" placeholder="Mensaje" required="required"></textarea>
							</div>                        
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-lg btn-block">Envía Correo</button>
							</div>
						</form>
					</div>
					<div class="col-sm-6">
						<div class="contact-details">
							<p>Por medio de los siguientes medios podrás contactarnos.</p>
							<p>Somos una empresa 100% Mexicana que exporta productos representativos tales como artesanías, servicios de Mariachi y ropa.</p>
							<ul class="address">
								<li><i class="fa fa-phone"></i> <span> Phone:</span>+971 56 494 4632</li>
                                <li><i class="fa fa-phone"></i> <span> Phone:</span>+52 1 33 14465437</li>
								<li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:support@beite.com"> ventas@productoszapata.com.mx</a></li>
								<li><i class="fa fa-globe"></i> <span> Website:</span> <a href="https://productoszapata.com.mx">productoszapata.com.mx</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact End -->
	
	<!-- Footer Start -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container text-center">
				<div class="footer-social">
					<ul>
						<li><a class="envelope" href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
					<div class="col-sm-6">
						<p>© 2017 Zapata.</p>
					</div>
					<div class="col-sm-6">
                        <div class="row">
                            <p class="pull-right"><i class="fa fa-mobile" aria-hidden="true"></i> Phone: +971 56 494 4632</p>
                        </div>
                        <div class="row">
                            <p class="pull-right"><i class="fa fa-mobile" aria-hidden="true"></i> Phone: +52 1 33 14465437</p>
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