<?php

$servername = "localhost";
$username = "root";
$password = "nH3%bCz_DQhu3.Pw";
$database = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>