<?php
// Define your database credentials
$servername = "localhost"; // Change to your database server name
$username = "your_username"; // Change to your database username
$password = "your_password"; // Change to your database password
$database = "your_database"; // Change to your database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user inputs from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Insert data into the database
$sql = "INSERT INTO your_table (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
