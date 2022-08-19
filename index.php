<?php 
	include('functions.php');
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="وصلني بساعدك توصل إلى وجهتك و تساعد غيرك يوصلو كمان"
    />
    <link rel="stylesheet" href="mystyle.css" />
    <link rel="stylesheet" href="css/mystyle.css" />
    <link rel="stylesheet" href="css/signing.css" />
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/responsivenav.js"></script>
    <title>Wasselni Home</title>
  </head>
  <body>
  <?php require_once 'nav.php' ; ?>
  <div class="header" 
  
  <?php 
if (isLoggedIn()==false) {
echo 'style="display:none;"';
}
?>

  >
		<h2>الحساب المتصل حاليا</h2>
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
    <?php
  if(!empty($_GET['id'])){
      //DB details
     $dbHost     = 'localhost';
     $dbUsername = 'root';
     $dbPassword = 'asad';
     $dbName     = 'wasselni';

     //Create connection and select DB
     $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

     //Check connection
     if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
     }

     //Get image data from database
     $result = $db->query("SELECT image FROM images WHERE id = {$_GET['id']}");


   }
  ?>


			<div style="width:100%">
				<?php  if (isset($_SESSION['user'])) : ?>
          <img class="profile_img" src="uploads/<?php echo $_SESSION['user']['image_url']; ?>"/>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
            <a href="updateimage.php?id=<?php echo  $_SESSION['user']['id']; ?>" style="color: Green;">Update Your Image</a>
            <br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
  
  </body>
</html>
