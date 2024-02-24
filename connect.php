<?php
// Database configuration
$host = "localhost";
$Name = "Name";
$Email = "Email";
$Contact = "Contact";
$Address = "Address";
// Create connection
$conn = new mysqli( $host, $Name, $Email, $Contact, $Address);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
