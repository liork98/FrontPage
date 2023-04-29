<?php

// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "Danflo98!0111";
$dbname = "Local instance MySQL80";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

// Prepare SQL query
$sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();

?>