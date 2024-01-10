<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST request
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Example: You can process, validate, or store the data here
    // For demonstration purposes, let's just echo the received data
    echo "Received Data:<br>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";
} else {
    echo "Invalid request";
}
?>
