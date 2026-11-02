<?php
require "database.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Invalid request.");
}

$first_name = trim($_POST["first_name"] ?? "");
$last_name = trim($_POST["last_name"] ?? "");
$address = trim($_POST["address"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$gender = $_POST["gender"] ?? "";
$membership = $_POST["membership_duration"] ?? "";

if (
    $first_name === "" || $last_name === "" || $address === "" ||
    $email === "" || $phone === "" || $gender === "" || $membership === ""
) {
    exit("All fields are required.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Invalid email address.");
}

if (!preg_match('/^0[0-9]{9}$/', $phone)) {
    exit("Invalid phone number. Enter 10 digits starting with 0.");
}

if (!in_array($gender, ["Male", "Female"], true)) {
    exit("Invalid gender.");
}

if (!in_array($membership, ["1 Year", "2 Years", "5 Years"], true)) {
    exit("Invalid membership duration.");
}

$sql = "INSERT INTO EmployeeTable
(first_name, last_name, address, email, phone_number, gender, membership_duration)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    http_response_code(500);
    exit("Could not prepare database query.");
}

$stmt->bind_param(
    "sssssss",
    $first_name,
    $last_name,
    $address,
    $email,
    $phone,
    $gender,
    $membership
);

if ($stmt->execute()) {
    echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Registration Successful</title><link rel='stylesheet' href='style.css'>";
    echo "</head><body><main class='container'>";
    echo "<h2>Employee registered successfully!</h2>";
    echo "<p>First Name: " . htmlspecialchars($first_name, ENT_QUOTES, "UTF-8") . "</p>";
    echo "<p>Last Name: " . htmlspecialchars($last_name, ENT_QUOTES, "UTF-8") . "</p>";
    echo "<p>Email: " . htmlspecialchars($email, ENT_QUOTES, "UTF-8") . "</p>";
    echo "<p><a href='employee.php'>Register another employee</a></p>";
    echo "</main></body></html>";
} else {
    http_response_code(500);
    echo "Error saving employee.";
}

$stmt->close();
$conn->close();
?>
