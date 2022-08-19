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
    <link rel="stylesheet" href="css/table.css" />
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/responsivenav.js"></script>
    <title>Wasselni - Users</title>
  </head>
  <body>
  <?php require_once 'nav.php' ; ?>
  <?php
$servername = "localhost";
$username = "root";
$password = "asad";
$dbname = "wasselni";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, email,password FROM users";
$result = $conn->query($sql);

?>

<div style="max-width:90%; margin :20px auto;">
<table class="table">

	
	<?php
	if ($result->num_rows > 0) {

    ?>
 <tr class="table__head" style="background: #5668ca;
    color: #fff;">
		<th class="table__th">ID</td>
        <th class="table__th">username</td>
        <th class="table__th">Email</td>
        <th class="table__th">Password</td>
        <th class="table__th">Delete</td>
        <th class="table__th">Update</td>
        
	  </tr>
    <?php
		// output data of each row
		while($row = $result->fetch_assoc()) {    
	?>		

	 
	  <tr class="table__tr">
      <td class="table__td"><?php echo $row["id"]; ?></td>
	    <td class="table__td"><?php echo $row["username"]; ?></td>
        <td class="table__td"><?php echo $row["email"]; ?></td>
        <td class="table__td"><?php echo $row["password"]; ?></td>
        <td class="table__td"><a href="deluser.php?id=<?php echo $row["id"] ?>">Delete</a></td>
        <td class="table__td"><a href="update.php?id=<?php echo $row["id"] ?>">Update</a></td>
	  </tr>



		
	<?php	
		} 
	?>
		</table>	</div>

<?php	
	} else {
			echo "0 results";
	}

	
$conn->close();

?>



    
  </body>
</html>


