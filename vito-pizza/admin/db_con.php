<?php
$servername = "localhost";
// $username = "vitopizz_admin";
$username = "root";
// $password = "VvOu#F#XUxW9";
$password = "";
$database = "vitopizz_admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
