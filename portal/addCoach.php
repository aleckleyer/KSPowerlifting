<?php

include '../connect.php';
include '../validate.php';

$firstName = $lastName = $email = $weightclass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $firstName = validate_input($_POST['firstName']);
    $lastName = validate_input($_POST['lastName']);
    $email = validate_input($_POST['url']);
    $weightclass = validate_input($_POST['wclass']);

    $query = "INSERT INTO `cl53-ksp-gmx`.`coaches` (`CoachID`, `FirstName`, `LastName`, `Email/Link`, `WeightClass`) VALUES (NULL, '$firstName', '$lastName', '$email', '$weightclass')";
    
    $result = $conn->query($query);

    if ($result === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

header('Location:addEntry.php');
?>