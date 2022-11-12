<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sim_perpus";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
