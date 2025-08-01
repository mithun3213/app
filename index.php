<?php
// 1. Connect to database
$servername = "localhost";
$username = "root";
$password = ""; // Default for XAMPP
$database = "kct";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 2. Get values from the form
$email = $_POST['email'];
$password_input = $_POST['password'];

// 3. Check if user exists with given email and password
$sql = "SELECT * FROM info WHERE email = '$email' AND password = '$password_input'";
$result = mysqli_query($conn, $sql);

// 4. Check result
if (mysqli_num_rows($result) == 1) {
    echo "<h2>✅ Login successful! Welcome.</h2>";
} else {
    echo "<h2>❌ Invalid email or password. Please try again.</h2>";
}

mysqli_close($conn);
?>
