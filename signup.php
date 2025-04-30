<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Signup successful! Please login now.'); window.location.href='login.html';</script>";
    } else {
        echo "<script>alert('Error: Email already registered or something went wrong!'); window.location.href='signup.html';</script>";
    }
}

$conn->close();
?>
