<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ambulance Africa</title>
	<link rel="shortcut icon" href="<?php echo base_url("assets/images/amblogo.ico");?>" type="image/x-icon">
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="<?php echo base_url("assets/dist/css/bootstrap.min.css");?>">
	<link href="<?php echo base_url("assets/dist/fonts/icofont/icofont.min.css");?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url("assets/dist/css/animate.min.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/dist/css/style.css");?>">
</head>

<body>
	<!-- <section id="topmenu" class="d-none d-lg-block">
        <div class="container clearfix">
          <div class="contact-info float-left">
            <i class="icofont-envelope"></i><a href="info@thedeliveryguyug.com">  info@thedeliveryguyug.com</a>
            <i class="icofont-phone"></i> <span class="text-white">+256788545500 / +256703852731</span>
          </div>
          <div class="social-links float-right">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
          </div>
        </div>
	</section> -->
	<div class="main-banner item-bg-one">
		<header id="header">
			<div class="container">
				<div class="logo float-left">
					<a href="index.html"><img src="<?php echo base_url("assets/images/ambulance.jpg");?>" alt=""
							class="img-responsive img-fluid"></a>
				</div>
				<nav class="nav-menu float-right d-none d-lg-block">
					<ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="portfolio.html">How it works</a></li>
						<li><a href="about-us.html">About Us</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="contact-us.html">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="content">
								<form class="row" action="<?php echo base_url('search');?>" method="POST">
									<input type="text" placeholder="Enter certificate no." name="searchQ"
										class="form-control w-100" />
									<button class="btn btn-lg btn-success">SEARCH</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if($search):?>
	<h4 class="heading-extra-margin-bottom"><?php echo 'search results for certificate '. strtolower($title);?></h4>
	<?php foreach($search as $row):?>
	<?php echo $row['student_no'];?>
	<embed src="http://localhost/ambulance/assets/uploads/certificates/<?php echo $row['certificate'] ?>" type="">
	<?php endforeach;?>
	<?php else:?>
	<h1>no results</h1 <?php endif;?> <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
	<script src="<?php echo base_url("assets/dist/js/jquery.min.js");?>"></script>
	<script src="<?php echo base_url("assets/dist/js/jquery.easing.min.js");?>"></script>
	<script src="<?php echo base_url("assets/dist/js/validate.js");?>"></script>
	<script src="<?php echo base_url("assets/dist/js/jquery.sticky.js");?>"></script>
	<script src="<?php echo base_url("assets/dist/js/main.js");?>"></script>
</body>

</html>
