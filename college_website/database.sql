CREATE DATABASE IF NOT EXISTS employee_db
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE employee_db;

CREATE TABLE IF NOT EXISTS EmployeeTable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    membership_duration VARCHAR(50) NOT NULL
);

INSERT INTO EmployeeTable
(first_name, last_name, address, email, phone_number, gender, membership_duration)
VALUES
('Adam', 'Kwanza', '12', 'ak@example.com', '0712345678', 'Male', '1 Year'),
('Bob', 'Pili', '37', 'bp@example.com', '0723456789', 'Male', '2 Years'),
('Eve', 'Tatu', '44', 'et@example.com', '0734567890', 'Female', '5 Years');
