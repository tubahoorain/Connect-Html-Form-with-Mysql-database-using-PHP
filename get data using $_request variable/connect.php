<?php
// Get form data using $_REQUEST
$name = $_REQUEST['name'];
$age  = $_REQUEST['age'];

// Database connection
$conn = mysqli_connect("localhost", "root", "", "test");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert query
$sql = "INSERT INTO users (name, age) VALUES ('$name', '$age')";

// Run query
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!<br>";
    echo "Hello, " . $name . "! Your age is " . $age;
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
