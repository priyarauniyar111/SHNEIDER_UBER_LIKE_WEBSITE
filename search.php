<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$pickup = $_POST['pickup'];
$dropoff = $_POST['dropoff'];
$pickup_time = $_POST['pickup_time'];
$for_whom = $_POST['for_whom'];
$vehicle_type = $_POST['vehicle_type'];

echo "<h1>🚕 Ride Details</h1>";
echo "From: $pickup <br>";
echo "To: $dropoff <br>";
echo "Pickup Time: $pickup_time <br>";
echo "For: $for_whom <br>";
echo "Vehicle: $vehicle_type <br>";
?>
