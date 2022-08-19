<?php
$servername = "localhost";
$username = "root";
$password = "asad";
$dbname = "wasselni";

$uname = "";
$uemail = "";
$pass = ""; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_GET["id"];

$sql = "SELECT * FROM users WHERE id = "."$id";

$result = $conn->query($sql);

if($result ->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $uname = $row["username"];
        $uemail = $row["email"];
        $pass = $row["password"]; 
        $user_type = $row["user_type"];
        
    }
} else{
    echo "0 results";
}


// sql to update a record

?>
<?php 
	include('functions.php');
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/mystyle.css" />
    <link rel="stylesheet" href="css/signing.css" />
  <link rel="stylesheet" href="signing.css" />
  

    <title>Wasselni - update user</title>
  </head>
  <body>
  <?php require_once 'nav.php' ; ?>

  <div class="header">
	<h2>تحديث بيانات المستخدم</h2>
</div>
<form method="post" action="updateuser.php">
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $uname; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $uemail; ?>">
	</div>
  <div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" value="<?php echo $user_type; ?>" >
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
	<div class="input-group">
		<label>Password</label>
		<input type="text" name="password" value="<?php echo $pass ?> ">
	</div>


	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Update info</button>
	</div>
    <div class="input-group">
		<input type="hidden" name="id" value="<?php echo $id; ?>"></input>
    <?php 
    
    $_SESSION['user']['username'] = $username;
    $_SESSION['user']['username'] = $email;
    $_SESSION['user']['username'] = $password;
    
     ?>
	</div>


</form>
  </body>
</html>