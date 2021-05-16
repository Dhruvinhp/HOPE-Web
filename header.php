<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo2.png" style="width:70px; height:70px;"><b> HOPE</b>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
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