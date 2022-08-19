<?php include('functions.php');
  if (isLoggedIn()==True) {
    $_SESSION['msg'] = "You Are Logged in Already";
    header('location: index.php');
  }
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
  <head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="mystyle.css" />
  <link rel="stylesheet" href="css/mystyle.css" />
    <link rel="stylesheet" href="css/signing.css" />
	<link rel="icon" href="images/icon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/responsivenav.js"></script>
    <title>Wasselni -signup</title>
  </head>
  <body>
  <?php require_once 'nav.php' ; ?>
  
  <div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1" >
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2" >
	</div>

	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
        
        
  </body>
</html>
