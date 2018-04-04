<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Tech Core</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css" />

	<!--=== Other CSS files ===-->
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/jquery.vegas.css" />
	
	<!--=== Main Stylesheets ===-->
	<link rel="stylesheet" href="css/base.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/responsive.css" />
	<link rel="stylesheet" href="css/call-back.css" />
	
	<!--=== Color Scheme, three colors are available red.css, orange.css and gray.css ===-->
	<link rel="stylesheet" id="scheme-source" href="css/schemes/gray.css" />

	<link href="https://fonts.googleapis.com/css?family=Bitter|Mukta+Malar" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		
</head>
<body>
	<div id="myfond_gris" opendiv=""></div>
	<a href=""> 
		<div iddiv="box_1" class="mymagicoverbox">
			Обратный звонок
		</div>
	 </a>
	<div id="box_1" class="mymagicoverbox_fenetre" style="left:-225px; width:450px;">
		Заказать обратный звонок <div class="mymagicoverbox_fermer">ДА</div>
		<div class="mymagicoverbox_fenetreinterieur" style="height:300px; ">
			<div align="center">
				<form action="" method="post">
				  <div class="form-group">
				    <label>Имя:</label>
				    <input type="text" class="form-control" name="phone" placeholder="Имя">
				    
				    <label>Ваш номер телефона:</label>
				    <input type="text" class="form-control" name="phone" placeholder="Номер телефона">
				    <small id="emailHelp" class="form-text text-muted">Ваш номер телефона не будет передан другим лицам.</small>
				  	
				  </div>
				  <button type="submit" class="btn btn-primary">Заказать</button>
				</form>
			</div>
		</div>
	</div>
	<?php
		if(isset($_POST['submit'])){
			$phone = $_POST['phone'];
			$mymail = 'ukuanysh@mail.ru';
			$headers = "Reply-to:$phone";
			mail($mymail, $headers);
		}
	?>
 
<link href='http://fonts.googleapis.com/css?family=Roboto:100,400,300,500,700' rel='stylesheet' type='text/css'>
 
 
	<!--=== Header section Starts ===-->
	<div id="header" class="header-section">
		<!-- sticky-bar Starts-->
		<div class="sticky-bar-wrap">
			<div class="sticky-section">
				<div id="topbar-hold" class="nav-hold container">
					<nav class="navbar" role="navigation">
						<div class="navbar-header center">
							<!--=== Site Name ===-->
							<a class="site-name" href="index.php">TECHCORE</a>
							<p class="cdo">Центр дополнительного образования</p>
						</div>
						
						<!-- Main Navigation menu Starts -->
						<div class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="current"><a href="#header">Главная</a></li>
								<li><a href="#section-pricing">Курсы</a></li>
								<li><a href="#section-screenshots">Преимущества</a></li>
								<li><a href="contacts.php">Контакты</a></li>
							</ul>
						</div>
						<!-- Main Navigation menu ends-->
					</nav>
				</div>
			</div>
		</div>
		<!-- sticky-bar Ends-->
		<!--=== Header section Ends ===-->
		
		<!--=== Home Section Starts ===-->
		<section id="section-pricing">
			<div class="container animated" data-animation="fadeInUp" data-animation-delay="400">
				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
						<img class="mainimg" src="images/bg2.png">
					</div>
				</div>
			</div>
		</section>	

		<section id="section-pricing">
			<div class="container animated" data-animation="fadeInUp" data-animation-delay="400">
				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
						<h2 class="absolute maintext animated" data-animation="fadeInUp" data-animation-delay="400">
							Хорошее образование должно быть доступным
						</h2>
					</div>
				</div>
			</div>
		</section>
						
		<!--=== Home Section Ends ===-->
	</div>
	
	
	
	<!--=== Pricing section Starts ===-->
	<section id="section-pricing" class="down">
		<div class="container animated" data-animation="fadeInUp" data-animation-delay="400">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 center titlen">
					<h2 class="">Наши Курсы</h2>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="screenshot info">
						<h3 class="tcentr">Физика</h3>
						<hr>
						<div class="sign-up">
							<div class="row">
								<p class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. </p>
								<a href="math.php" class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 bbtn">
									Подробнее
								</a>
							</div>
							<br>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="screenshot info">
						<h3 class="tcentr">Моделирование</h3>
						<hr>
						<div class="sign-up ">
							<div class="row">
								<p class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">Lorem
								 ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. </p>
								<a href="#" class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 bbtn">
									Подробнее
								</a>
							</div>
							<br>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="screenshot info">
						<h3 class="tcentr">Инженерия</h3>
						<hr>
						<div class="sign-up ">
							<div class="row">
								<p class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. </p>
								<a href="#" class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 bbtn">
									Подробнее
								</a>
							</div>
							<br>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="screenshot info">
						<h3 class="tcentr">Математика</h3>
						<hr>
						<div class="sign-up ">
							<div class="row">
								<p class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. </p>
								<a href="#" class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 bbtn">
									Подробнее
								</a>
							</div>
							<br>
						</div>
					</div>
				</div>
			</div>
			
			</div>
			
			
	</section>
	<!--=== Pricing section Ends ===-->
	
		<!--=== ScreenShots section Starts ===-->
	<section id="section-screenshots" class="screenshots-wrap">
		<div class="container screenshots animated" data-animation="fadeInUp" data-animation-delay="400">
			<div class="row porfolio-container">
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h2 class="">Наши преимущества</h2>
				</div>
				<!-- Single screenshot starts -->
				<div class="col-md-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<br><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<br><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				</div>
			</div>
		</div>
	</section>
	<!--=== ScreenShots section Ends ===-->
		<!--=== ScreenShots section Starts ===-->
	<section id="section-pricing" class="screenshots-wrap">
		<div class="container screenshots animated" data-animation="fadeInUp" data-animation-delay="400">
			<div class="row porfolio-container">
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h2 class="black">Фотографии</h2>
				</div>
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/7.jpg" alt="" />
						</div>
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/2.jpg" alt="" />
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/3.jpg" alt="" />
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/4.jpg" alt="" />
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/5.jpg" alt="" />
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/6.jpg" alt="" />
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
			</div>
			
			<div id="portfolio-loader" class="center">
				<div class="loading-circle fa-spin"></div>
			</div> <!--=== Portfolio loader ===-->
			
			<div id="portfolio-load"></div><!--=== ajax content will be loaded here ===-->
			
			<div class="col-md-12 center back-button">
				<a class="backToProject fancy-button button-line bell btn-col" href="#">
					Back
					<span class="icon">
						<i class="fa fa-arrow-left"></i>
					</span>
				</a>
			</div><!--=== Single portfolio back button ===-->
		</div>
	</section>
	<!--=== ScreenShots section Ends ===-->

	
	<!--=== Footer section Starts ===-->
	<div id="section-footer" class="footer-wrap">
		<div class="container footer center">
			<div class="row">
				<div class="col-lg-12">
					<div class="left col-md-3 col-md-offset-1">
						<a href="tel:5555555555" class="white"><i class="fas fa-phone"></i> +7 xxx xxxxxxxx</a>
						<p style="margin-top: 20px;"><i class="fas fa-envelope"></i> techcore@mail.com</p>
						<a href="contacts" class="white"><i style="margin-top: 20px;" class="fas fa-map-marker-alt"></i> Жандосова, 2</p>
					</div>
					<div class="social-icons col-md-4">
						<h3 style="margin-top: -5px;">Мы в социальных сетях:</h3>
						<ul>
							<li><a href="#"><i style="margin-top: 20px;" class="fab fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
							
						</ul>
					</div>
					<div class="col-md-4">
						<h3 style="margin-top: -5px;" class="footer-title"><!-- Footer Title -->
						<a class="white" href="#header">TechCore</a>
						</h3>
						<div style="margin-top: 40px; font-size: 12px;">Made by <a style="color: #fff" href="https://kuanyshoteu.kz">Kuanysh Oteu</a></div>
					</div>
					<!-- Social Links -->
				</div>
			</div>
		</div>
	</div>
	<!--=== Footer section Ends ===-->
	
<!--==== Js files ====-->
<!--==== Essential files ====-->

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!--==== Slider and Card style plugin ====-->
<script type="text/javascript" src="js/jquery.baraja.js"></script>
<script type="text/javascript" src="js/jquery.vegas.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>

<!--==== Scroll and navigation plugins ====-->
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/call-back.js"></script>


<!--==== Custom Script files ====-->
<script type="text/javascript" src="js/custom.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</body>
</html>