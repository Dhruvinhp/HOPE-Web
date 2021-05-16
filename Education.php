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

    <title>Education | HOPE</title> 
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
						<li class="nav-item"><a class="nav-link" href="Children.php">Children</a></li>
						<li class="nav-item active"><a class="nav-link" href="Education.php">Education</a></li>
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

		
	<ul class="sc">
			<li class="text-center">
				<img src="images/education.jpg" width="100%" alt="">
				<div class="container" style='position:absolute; top:20%; left:30%'>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Educate a poor rural child in need </strong></h1>
							<p><a class="btn-lg btn-circle btn-outline-new-white" href="#Organizations" style="background-color: #1f1f1f;">Donate</a></p>
							<h3> Donations will sponsor the tuition and school supplies for a child</h3>
						</div>
					</div>
				</div>
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
							<button data-filter=".Girlchild">Girl Child</button>
							<button data-filter=".PriEdu">Primary Education</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid Girlchild">
					<div class="gallery-single fix">
						<img src="images/education1.jpg" class="img-fluid" alt="Image">
						<div class="why-text" >
							<a href="https://www.giveindia.org/program/Feed-nutritious-meals-to-a-poor-rural-child" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>FEED NUTRITIOUS MEALS TO POOR RURAL CHILD</center></b></h1></a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid Girlchild">
					<div class="gallery-single fix">
						<img src="images/education2.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<a href="https://www.giveindia.org/program/Sponsor-college-education-for-a-meritorious-girl" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>SPONSOR COLLEGE EDUCATION FOR A MERITORIOUS</center></b></h1></a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid Recommended">
					<div class="gallery-single fix">
						<img src="images/education3.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<a href="https://www.giveindia.org/program/Help-rural-children-get-access-to-nursery-education" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>HELP RURAL CHILDREN GET ACCESS TO NURSERY EDUCATION </center></b></h1></a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid Girlchild">
					<div class="gallery-single fix">
						<img src="images/education4.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<a href="https://www.giveindia.org/program/Gift-a-child-a-chance-at-education" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>GIFT A CHILD A CHANCE AT EDUCATION</center></b></h1></a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid Recommended">
					<div class="gallery-single fix">
						<img src="images/education5.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<a href="https://www.giveindia.org/program/Help-rural-tribal-children-access-education" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>HELP RURAL TRIBAL CHILDREN ACCESS EDUCATION</center></b></h1></a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid PriEdu">
					<div class="gallery-single fix">
						<img src="images/education6.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<a href="https://www.giveindia.org/program/Provide-quality-education-to-children" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>PROVIDE QUALITY EDUCATION TO CHILDREN </center></b></h1></a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid PriEdu">
					<div class="gallery-single fix">
						<img src="images/education7.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<a href="https://www.giveindia.org/program/Help-children-affected-by-political-violence-rebuild-their-lives" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>HELP CHILDREN AFFECTED BY POLITICAL VIOLENCE REBUILD THEIR LIVES </center></b></h1></a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid Recommended">
					<div class="gallery-single fix">
						<img src="images/education8.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<a href="https://www.giveindia.org/program/Help-a-differently-abled-child-with-transport" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>HELP A DIFFRENTLY ABLED CHILD WITH TRANSPORT</center></b></h1></a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid Recommended">
					<div class="gallery-single fix">
						<img src="images/education9.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<a href="https://www.giveindia.org/program/Gift-shelter-to-a-destitute-child" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>GIFT A SHELTER TO A DESTITUTE CHILD</center></b></h1></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 special-grid PriEdu">
					<div class="gallery-single fix">
						<img src="images/education10.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<a href="https://www.giveindia.org/program/Provide-support-to-rebuild-schools-in-flood-affected-areas-of-Kerala" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>PROVIDE SUPPORT TO REBULID SCHOOLS IN FLOOD AFFECTED AREAS OF KERALA</center></b></h1></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid Recommended">
					<div class="gallery-single fix">
						<img src="images/education11.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<a href="https://www.giveindia.org/program/Sponsor-residential-care-for-education-of-a-tribal-girl" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>SPONSOR RESIDENTIAL CARE FOR EDUCATION OF A TRIBAL GIRL</center></b></h1></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid Recommended">
					<div class="gallery-single fix">
						<img src="images/education12.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<a href="https://www.giveindia.org/program/Help-a-student-in-a-remote-village-commute-to-college" target="_blank" rel="noopener noreferrer"><h1><b><center><br><br>HELP A STUDENT IN A REMOTE VILLAGE COMMUTE TO COLLEGE</center></b></h1></a>
						</div>
					</div>
				</div>
				
				
			</div>
		</a></div>
	</div>
	<!-- End Menu -->

	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<p class="lead" style="font-size:32px">About the cause: Health</p>
			<p style="font-size:20px">2.4 million Indians die of treatable conditions every year! Healthcare is a luxury which inaccessible for the poor. Health cannot be a privilege. Donate to help the underprivileged people for their health. Support them with access to medical help like pediatric care, maternal healthcare, gynecology care, dental care, chemotherapy, and counseling. Give them a chance to fight their illnesses.
			<br>
			<div class="main">
				<div>
				<p class="lead" style="font-size:24px">Cancer</p>
				<p style="font-size:20px">70% of India's poor cancer patients lose their lives due to late detection of which 15% are children. Cancer survival depends on early diagnosis and access to medical treatment which poor cancer patients cannot afford. Donate to patients suffering from cancer so that they can receive access to medical support like chemotherapy, radiation and quality nutrition. Give them a chance to fight.
				</div>
				<div>
				<p class="lead" style="font-size:24px">Pediatric Care</p>
				<p style="font-size:20px">67 million Indian children under the age of 5 lack access to affordable healthcare. 66% of the poorest children in India receive no or minimal healthcare. Many children die of treatable conditions every year. Many suffer silently unable to afford treatments. Donate to children in need and help them with treatment, medicines, hospital expenses and nutritious food to help them with a chance at life.
				</div>
			</div>
			<br>
			<p class="lead" style="font-size:24px">Mental Health</p>
			<div class ="main">	
				<p style="font-size:20px">7% of Indians suffer from mental health disorders. The poor who experience debt, hunger, poverty, and hopelessness are more likely to suffer from mental disorders and cannot afford medical help. This is a vicious cycle. Donate to the aid of poor patients suffering from mental disorders so that they can get therapy, care and find a way to live a normal life.
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