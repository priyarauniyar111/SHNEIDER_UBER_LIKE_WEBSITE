<?php
// Database connection
$servername = "localhost";
$username = "root"; // Change if needed
$password = "";     // Change if needed
$dbname = "uber_clone"; // ✅ use your existing database

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST
$pickup = $_POST['pickup'];
$dropoff = $_POST['dropoff'];
$vehicle = $_POST['vehicle'];
$payment = $_POST['payment'];
$fare = $_POST['fare'];

// Insert into database
$sql = "INSERT INTO bookings (pickup_location, dropoff_location, vehicle_type, payment_method, fare)
        VALUES ('$pickup', '$dropoff', '$vehicle', '$payment', '$fare')";

if ($conn->query($sql) === TRUE) {
    echo "Booking saved successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
