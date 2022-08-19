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



$username = val($_POST['username']);
$email = val($_POST['email']);
$user_type = val($_POST['user_type']);
$password = val($_POST['password']);
$id = val($_POST['id']);

function val($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}




// sql to update a record
$sql = "UPDATE users SET username='$username', email='$email',user_type='$user_type', password='$password' where id='$id'";

if ($conn->query($sql) === TRUE) {
    header ('location:delete.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>