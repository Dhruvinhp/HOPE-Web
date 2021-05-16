<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->

    <title>Children | HOPE</title> 
	<link rel = "icon" href ="images/logo.png" type = "image/x-icon"> 	
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="stylesheet" href="css/education.css">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
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
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="Children.php">Children</a></li>
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
					?></ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

		
	<ul class="slides-container">
		<li class="text-center">
			<img src="images/children.jpg" width="100%" height='50%' alt="">
			<div class="container" style='position:absolute; color:white; top:20%; left:30%'>
				<h1 style='color:white;'><strong> Sponsor mid-day meals to Children </strong></h1><br>
					<p><a class="btn-lg btn-circle btn-outline-new-white" href="#Organizations" style="background-color: #1f1f1f;">Donate</a></p>
					<p class="m-b-40"><h2 style='color:white;'>Donations will help provide mid-day meals to children</h2></p>
			</div>			
		</li>
	</ul> 

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
							<button data-filter=".Recommended">Recommended</button>
							<button data-filter=".midday">Mid-day Meals</button>
							<button data-filter=".hiv">HIV/AIDS</button>
							<button data-filter=".primary">Primary Education</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid Recommended">
					<div class="gallery-single fix">
						<img src="images/children1.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Support-the-treatment-of-a-baby-at-risk" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Support the treatment of a baby</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid Recommended">
					<div class="gallery-single fix">
						<img src="images/children2.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Educate-a-poor-rural-child-in-need" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Educate a poor rural child in need</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid Recommended midday">
					<div class="gallery-single fix">
						<img src="images/children3.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Feed-nutritious-meals-to-a-poor-rural-child" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Feed nutritious meals to a poor rural child</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid Recommended">
					<div class="gallery-single fix">
						<img src="images/children4.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Support-a-child-suffering-from-cancer-with-monthly-rations" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Support a child suffering from cancer with monthly rations</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid Recommended hiv">
					<div class="gallery-single fix">
						<img src="images/children5.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Support-the-living-expenses-of-HIV-orphan" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Support the living expenses of an orphan with HIV</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid Recommended">
					<div class="gallery-single fix">
						<img src="images/children6.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Provide-nutrition-support-for-a-HIV-positive-child" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Provide nutrition support for a HIV positive child</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid midday">
					<div class="gallery-single fix">
						<img src="images/children7.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Sponsor-mid-day-meals-to-children-in-Maharashtra" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Sponsor mid day meals to children in Maharashtra</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid midday">
					<div class="gallery-single fix">
						<img src="images/children8.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Support-the-midday-meal-of-an-underprivileged-child" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Support the midday meal of an underprivileged child</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid midday">
					<div class="gallery-single fix">
						<img src="images/children9.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Sponsor-midday-meals-for-a-poor-child" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Sponsor midday meals for a poor child</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid midday">
					<div class="gallery-single fix">
						<img src="images/children10.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Sponsor-mid-day-meals-to-poor-rural-children" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Sponsor mid day meals to poor rural children</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid hiv">
					<div class="gallery-single fix">
						<img src="images/children11.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Help-a-HIV-child-with-monthly-groceries" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Help a HIV child with monthly groceries</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid hiv">
					<div class="gallery-single fix">
						<img src="images/children13.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Sponsor-nutritious-food-to-provide-strength-to-children-with-HIV-to-undergo-treatment" target="_blank" rel="noopener noreferrer"><h1><b><center><br>Sponsor nutritious food to provide strength to children with HIV to undergo treatment</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid primary">
					<div class="gallery-single fix">
						<img src="images/children14.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Gift-tuition-and-medical-expenses-of-a-poor-child" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Gift tuition and medical expenses of a poor child</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid primary">
					<div class="gallery-single fix">
						<img src="images/children15.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Sponsor-teacher-s-salary-to-educate-a-very-poor-child" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Sponsor teacher's salary to educate a very poor child</center></b></h1></a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid primary">
					<div class="gallery-single fix">
						<img src="images/children16.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Sponsor-the-school-fees-of-a-girl-child" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>Sponsor the school fees of a girl child</center></b></h1></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>				
				

	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<p class="lead" style="font-size:32px">About the cause: Children</p>
			<p style="font-size:20px">Help poor children fight their way out of poverty. When it is hard to afford necessities like food, shelter, and clothing; education becomes a luxury that the poor give up. Illiteracy then leads to further poverty. Donate for child education in India, support them with fees, school supplies, footwear, transport and opportunities to showcase their talents.</p>
			<br>
			<div class="main">
				<div>
				<p class="lead" style="font-size:24px">Mid-day Meals</p>
				<p style="font-size:20px">21% of India's children are severely underweight. Hungry children can not build the country's future. For India's poor children, the mid-day meal at school is their only proper meal in a day. Feed our children and their hopes by donating mid-day meals to our starving children in need to help them fight starvation and malnutrition, so they don’t have to live and learn on a hungry stomach.</p>
				</div>
				<div>
				<p class="lead" style="font-size:24px">HIV/AIDS</p>
				<p style="font-size:20px">Close to 145,000 of India’s are HIV+, and about 22,000 new infections occur every year. Having inherited an incurable disease for no fault of their own, the affected children soon become orphans and suffer from severe poverty, and social stigma. Donate to poor children who are fighting a deadly disease and help them get access to nutritious food and medical treatment.</p>
				</div>
			</div>
			<br>
			<p class="lead" style="font-size:24px">Primary Education</p>
			<div class ="main">	
				<p style="font-size:20px">20 Million children in India do not go to school. Millions of children are still denied their right to education because of poverty. Donate for the education of poor children and support them with necessities like tuition fees, school supplies, footwear, transport, etc. Help them build a future that will make them escape poverty passed from generation to generation.</p>
			</div>		
		</div>
	</div>
	
	
	
	
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
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Dhruvin Prajapati</strong></h5>
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