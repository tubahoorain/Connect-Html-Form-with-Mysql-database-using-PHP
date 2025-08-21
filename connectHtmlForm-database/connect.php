<?php
// Get form data
$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$gender    = $_POST['gender'];
$email     = $_POST['email'];
$password  = $_POST['password'];
$number    = $_POST['number'];

// Database connection
$conn = mysqli_connect("localhost", "root", "", "test");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert query
$sql = "INSERT INTO registration (firstName, lastName, gender, email, password, number) 
        VALUES ('$firstName', '$lastName', '$gender', '$email', '$password', '$number')";

// Run query
if (mysqli_query($conn, $sql)) {
    echo "Registration successfully...";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
