<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connexion
$conn = new mysqli($servername, $username, $password);
// Check connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS rmh";
//check connexion
if ($conn->query($sql) === TRUE) {?>
  <p class="vert"><?= "Database created successfully"; ?></p>  
<?php
  //connexion à la BDD
  $connexion = new PDO('mysql:host=localhost;dbname=RMH;charset=utf8', 'root', '');
  
  // Create table Users
  $req = "CREATE TABLE IF NOT EXISTS users(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  fullname VARCHAR(50) NOT NULL,
  email VARCHAR(70) NOT NULL,
  pwd  VARCHAR(50) NOT NULL
)";
  $exec = $connexion->query($req);

  // Create table Products
  $rec = "CREATE TABLE IF NOT EXISTS products(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nameProduct VARCHAR(250) NOT NULL,
  imageProduct VARCHAR(1000) NOT NULL,
  descriptionProduct VARCHAR(1000) NOT NULL,
  gender VARCHAR(50) NOT NULL,
  marque VARCHAR(100) NOT NULL,
  price FLOAT NOT NULL
)";
  $exe = $connexion->query($rec);
} else {
  echo "Error creating database: " . $conn->error;
}
