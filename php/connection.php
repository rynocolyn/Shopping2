<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "shopping";

// Create connection
$conn = new mysqli($servername, $username, $password);
mysql_select_db($db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
header('Location:../index.php');
?>