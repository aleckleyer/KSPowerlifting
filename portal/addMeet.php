<?php

include '../connect.php';
include '../validate.php';

$meetName = $city = $state = $fed = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    $meetName = validate_input($_POST['meetName']);
    $city = validate_input($_POST['city']);
    $state = validate_input($_POST['state']);
    $fed = validate_input($_POST['federation']);
    $date = validate_input($_POST['date']);

    $query = "INSERT INTO `cl53-ksp-gmx`.`meets` (`MeetID`, `Meet_Name`, `City`, `State`, `Federation`, `FederationID`, `Date`) VALUES (NULL, '$meetName', '$city', '$state', '$fed', '', '$date')";
    
    $result = $conn->query($query);

    if ($result === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

header('Location:addEntry.php');
?>