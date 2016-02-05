<?php 	

$servername = "localhost";
$username = "cl53-ksp-gmx";
$password = "C4GfU.2dn";
$dbname = "cl53-ksp-gmx";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>