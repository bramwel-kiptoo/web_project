<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Invalid request.");
}

$department = trim($_POST["department"] ?? "");
$username = trim($_POST["username"] ?? "");
$password = $_POST["password"] ?? "";

$allowedDepartments = ["ICT", "Business", "Engineering"];

if (
    !in_array($department, $allowedDepartments, true) ||
    $username === "" ||
    $password === ""
) {
    exit("Please provide valid values for all fields.");
}

$_SESSION["department"] = $department;
$_SESSION["username"] = $username;
$_SESSION["password_hash"] = password_hash($password, PASSWORD_DEFAULT);

echo "<h2>Details saved successfully.</h2>";
echo "<p>Department: " . htmlspecialchars($department, ENT_QUOTES, "UTF-8") . "</p>";
echo "<p>Username: " . htmlspecialchars($username, ENT_QUOTES, "UTF-8") . "</p>";
echo "<p>Password has been stored as a secure hash in the session.</p>";
echo "<p><a href='Page1.html'>Return to home</a></p>";
?>
