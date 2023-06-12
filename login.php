<?php
$hostname = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['loginUsername'];
  $password = $_POST['loginPassword'];

  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    // Login successful
    echo "Login successful!";
  } else {
    // Invalid username or password
    echo "Invalid username or password";
  }
}

mysqli_close($conn);
?>
