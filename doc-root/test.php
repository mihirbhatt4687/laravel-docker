<?php
//phpinfo();


$servername = "mysql";
$username = "myuser";
$password = "mypassword";
$database = "mydatabase";


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


docker-php-ext-install pdo pdo_mysql mysqli