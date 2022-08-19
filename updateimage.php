
<?php 
	include('functions.php');
  $id = $_GET['id'];
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
    <title>Wasselni update img</title>
  </head>
  <body>
  <?php require_once 'nav.php' ; ?>

  <div class="header">
	<h2>Update user info -insert Image </h2>
</div>
<form method="post" action="upload.php?id=<?php echo $id; ?>" enctype="multipart/form-data">

	<div class="input-group">
		<label>Upload Your Image </label>
		<input type="file" name="my_image" >
	</div>


	<div class="input-group">
		<button type="submit" class="btn" name="submit">Upload </button>
	</div>




</form>

  
    
  </body>
</html>