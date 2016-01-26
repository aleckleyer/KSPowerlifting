<?php

include 'connect.php';

$email = $_POST['email'];
$suggestion = $_POST['suggestion'];

$sql = "INSERT INTO Suggestions (SID, Email, Suggestion)
VALUES ('', '$email', '$suggestion')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Thanks!</h1>";
    echo "<p>You will now be redirected back to the homepage!</p>";
    header("refresh:2; url=index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>