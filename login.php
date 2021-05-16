<?php
// session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}
require_once "config.php";
$email = $password = "";
$email_err = $password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]); 
    }
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    if(empty($email_err) && empty($password_err)){
        $sql = "SELECT `u_id`, `email`, `password` FROM `users` WHERE `email` = '".$email."'";
        $qryEmail = mysqli_query($link,$sql);
        $countEmail = mysqli_fetch_assoc($qryEmail);
        if ($countEmail['email'] === $email) {
            if ($countEmail['password'] === $password) {
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["email"] = $email;
                header("location: index.php");
            } else {
                $password_err = "The password you entered was not valid.";
            }
        } else {
            $email_err = "No account found with that email. Please Signup";
        }
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel='stylesheet' href='login.css'>
    <link rel='stylesheet' href='css/style.css'>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <form class='box' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Login</h1>
        <p style='color:gray'>Please fill in your credentials to login.</p>
            <div class="g-signin2" data-onsuccess="onSignIn"></div>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="email" placeholder='Email' value="<?php echo $email; ?>" required>
                <span class="help-block" style="color: gray;"><?php echo $email_err; ?></span>
            </div> 
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input type="password" placeholder='Password' name="password" required>
                <span class="help-block" style="color: gray;"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p style='color:gray;'>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>