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
  $username = $_POST['signupUsername'];
  $password = $_POST['signupPassword'];

  $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
  if (mysqli_query($conn, $sql)) {
    // Signup successful
    echo "Signup successful!";
  } else {
    // Signup failed
    echo "Error: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>


<!-- 
Make sure to replace 'your_username', 'your_password', and 'your_database' with your actual database credentials. Create a database table called users with columns username and password.

Place all the files (index.html, style.css, login.php, signup.php) in the same directory on your server, and then you can access the login and signup page through the browser.

Remember, this is a basic example for demonstration purposes. In a real-world application, you would need to implement stronger security measures, such as using prepared statements and hashing passwords, to protect against SQL injection and improve password storage. -->