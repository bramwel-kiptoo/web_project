<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "employee_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    http_response_code(500);
    exit("Database connection failed.");
}

$conn->set_charset("utf8mb4");
?>
