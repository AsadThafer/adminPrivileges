<?php 
	include('functions.php');
    if (!isAdmin()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
  <head>
  <style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/mystyle.css" />
    <link rel="stylesheet" href="css/signing.css" />
	<link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/responsivenav.js"></script>
    <title>Wasselni Admin Home</title>
  </head>
  <body>
  <?php require_once 'nav.php' ; ?>
  <div class="header">
		<h2>صفحة الادمن الرئيسية</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
		<img class="profile_img" src="uploads/<?php echo $_SESSION['user']['image_url']; ?>"/>

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="create_user.php"> Add New User</a> <br>
						<a href="delete.php"> Users Menu </a> <br>
						<a href="home.php?logout='1'" style="color: red;">logout</a> <br>
                        
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>

  
  </body>
</html>
