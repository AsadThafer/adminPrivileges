
<?php 
	include('functions.php');
  if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/mystyle.css" />
    <link rel="stylesheet" href="css/signing.css" />
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/responsivenav.js"></script>
    <title>Wasselni - orders</title>
  </head>
  <body>
  <?php require_once 'nav.php' ; ?>
   
        
         
    
  </body>
</html>
