<?php
// Initialize the session
include("connection/connect.php");
session_start();
// require_once "auth_check.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | HOPE</title> 
	<link rel = "icon" href ="images/logo.png" type = "image/x-icon"> 	
	
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">   
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" style="width:70px; height:70px;"><b> HOPE</b>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="Children.php">Children</a></li>
						<li class="nav-item"><a class="nav-link" href="Education.php">Education</a></li>
						<li class="nav-item"><a class="nav-link" href="Health.php">Health</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item"><a class="nav-link" href="https://www.giveindia.org/certified-indian-ngos">Donate</a></li>
						<?php
						if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){	
							echo '<ul class="navbar-nav ml-auto nav-flex-icons">
                				<li class="nav-item dropdown">
                  				<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    			<i class="fa fa-user" aria-hidden="true"></i>
                    			<strong><b>';
							echo htmlspecialchars($_SESSION["email"]); 
							echo '</b></strong>
                  				</a>
                  				<div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    			<a class="dropdown-item" href="reset-password.php">Reset Password</a>
                    			<div class="dropdown-divider"></div>
                    			<a class="dropdown-item" href="logout.php">Log out</a>
                  				</div>
                			</li>
						</ul>';
						}
						else{
						echo '<li class="nav-item"><a class="nav-link" style="background: #EA2340; color: white;" href="Login.php">Login</a></li>';
						}
					?>
            		</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/slider-01.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To HOPE </strong></h1>
							<p class="m-b-40">Helping Oppressed People Everywhere</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#Organizations">Donate</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To HOPE</strong></h1>
							<p class="m-b-40">Helping Oppressed People Everywhere</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#Organizations">Donate</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong> Welcome To HOPE </strong></h1>
							<p class="m-b-40">Helping Oppressed People Everywhere</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#Organizations">Donate</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/about-img.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>HOPE</span></h1>
						<h4>Little Story</h4>
						<p>In 2020, during the pandemic situation people were in lots of trouble like they don't have enough money to pay rent, food,
						 and everything necessary things. So there are so many organizations who want to help them but cause of the pandemic 
						 situation they couldn't make it. And there are so many kinda people who want to donate and they have enough money but
						  the cause of lockdown situation they couldn't leave their house so they went online platform to find NGO but 
						  there are so many websites to choose from, they are confused between platform is trustworthy or not. 
						  so here we come with the idea of HOPE, in this website, we provide many trustworthy and authorized websites 
						  which are already into this.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						"People always ask me that, how it feels to be an orphan. I don't know. I want to ask them how it feels to have a family."
					</p>
					<span class="lead">David j. krik</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<a name="Organizations">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Organizations</h2>
						<p>Be aware before donate </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">All</button>
							
							
							<?php $ssql ="select * from ngo_category";
							$res=mysqli_query($db, $ssql); 
							while($row=mysqli_fetch_array($res))  
							{
								echo '<button data-filter=".'.$row['c_name'].'">'.$row['c_name'].'</button>';
								
							}  
							?> 
						</div>
					</div>
				</div>
			</div>
			<div class="row special-list">
			<?php $sql ="select * from ngo";
							$res=mysqli_query($db, $sql);
							 
							while($row=mysqli_fetch_array($res))  
							{ echo $row['url'];
								?>
							<div class="col-lg-4 col-md-6 special-grid health">
								<div class="gallery-single fix">
								<img src="admin/Res_img/<?php echo $row['image']; ?>" class="img-fluid" alt="Image">
								<div class="why-text" >
									<a href="<?php echo $row['url']; ?>" target="_blank" rel="noopener noreferrer"><h1><b><center><?php echo $row['title']; ?></center></b></h1></a>
								</div>
								</div>
							</div>	
							<?php }  ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Reviews</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-10.jpg" alt="">
								</div>
								<h5 class="mt-5 mb-2"><strong class="text-warning text-uppercase">Dhruvin Prajapati</strong></h5>
							<!--	<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>-->
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-20.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Hiren Jadvani</strong></h5>
								<!--<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>-->
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Parth Vora</strong></h5>
								<!--<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>-->
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-4.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Mohit Dholariya</strong></h5>
								<!--<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>-->
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+91 7600704046
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							Hopeplateform@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							AHMEDABAD
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3><a style='color:white;' href='about.php'>About Us</a></h3>
					<p>WE ARE HOPE</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Mon-fri :</span> 9 AM - 7 PM</p>
					<p><span class="text-color">Sat-Sun :</span> 10 AM - 1 PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">AHMEDABAD-GUJARAT</p>
					<p class="lead"><a href="tel:+917600704046">+91 7600704046</a></p>
					<p><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSKjDRcfPqgVNdQTspntgmxqvrQxgDrqwwvdCTSlsFMJztrSKwGlqSlkXlLmTngRWztmRLKp">Hopeplateform@gmail.com</a></p>
				</div>
				
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://codepen.io/dhruvinhp"><i class="fa fa-codepen" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.twitter.com/Dhruvinhp"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.linkedin.com/in/dhruvin-prajapati-184147167/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://github.com/dhruvinhp"><i class="fa fa-github" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/_dp_official_"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2021 <a href="#">HOPE</a>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>