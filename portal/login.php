<?php
session_start();
include '../connect.php';
include '../validate.php';

$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   
    $username = validate_input($_POST['username']);
    $password = validate_input($_POST['password']);
    
	$query="SELECT * FROM users WHERE Username='$username' AND Password='$password'";
		
	$result = $conn->query($query);
	
	if ($result->num_rows > 0){
	while($row = mysqli_fetch_array($result)){
			$_SESSION['valid_user'] = $row['Username'];
            $_SESSION['valid_user_priv'] = $row['AdminPriv'];
    }
    }
	else if(!$result)
		echo "<div class='alert alert-danger'>Could not log you in.</div>";
}

header('Location:admin.php');
?>