<?php
// Database configuration
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "Vidya"; // Change this to your database name
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
// Prepare SQL statement
$sql = "INSERT INTO admission_forms (fullname, email, phone, course) VALUES ('$fullname', '$email', '$phone', '$course')";
// Execute SQL query
if ($conn->query($sql) === TRUE) {
echo "Admission form submitted successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close connection
$conn->close();
?>

