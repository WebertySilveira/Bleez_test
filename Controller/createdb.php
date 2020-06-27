<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $sql = "CREATE DATABASE banco";

  $conn->exec($sql);
} catch(PDOException $e) {
  
}

$conn = null;
?>