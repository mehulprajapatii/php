<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="forms_demo";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 