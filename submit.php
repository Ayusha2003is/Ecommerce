<?php
$host = "localhost";
$user = "root";
$password = ""; // Change if needed
$dbname = "shop";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$product = $_POST['product'];
$rawPassword = $_POST['password'];

// Hash the password for security
$hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);

// Insert into database
$sql = "INSERT INTO orders (name, email, password, product) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $hashedPassword, $product);

if ($stmt->execute()) {
    echo "Order placed successfully for <b>$product</b>!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
<!--CREATE TABLE orders( 
id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(200), 
 email VARCHAR(200), 
 product VARCHAR(200), 
 password varchar(200),
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ); 
 db name shop -->