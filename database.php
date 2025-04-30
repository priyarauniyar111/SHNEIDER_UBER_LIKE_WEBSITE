<?php
$host = "localhost";
$username = "root"; // default XAMPP/WAMP username
$password = "";     // default XAMPP/WAMP password is empty
$database = "uber_clone";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
