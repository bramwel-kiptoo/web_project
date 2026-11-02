MY COLLEGE WEBSITE - SETUP

FILES
- Page1.html: Home page and My Details form
- Page2.html: Gallery and sample table
- Page3.html: Contact page
- style.css: Shared external stylesheet
- save_details.php: Processes Page1 details and stores them in a PHP session
- employee.php: Employee Bio-Data form
- database.php: MySQL connection
- save_employee.php: Validates and saves employee records
- database.sql: Creates database/table and inserts three sample records

RUN USING XAMPP
1. Copy the college_website folder into C:\\xampp\\htdocs\\
2. Start Apache and MySQL in XAMPP.
3. Open http://localhost/phpmyadmin
4. Import database.sql using the Import tab, or paste its SQL in the SQL tab.
5. Open http://localhost/college_website/Page1.html
6. Open http://localhost/college_website/Page2.html
7. Open http://localhost/college_website/Page3.html
8. Open http://localhost/college_website/employee.php

IMAGE
Put an image named gallery.jpg inside this project folder for Page2.

DATABASE DEFAULTS
Host: localhost
Username: root
Password: (blank, typical default XAMPP setting)
Database: employee_db

If your MySQL root account has a password, update database.php.

NOTE
The contact form is a front-end demonstration and does not send or store messages.
The Page1 details are stored in the PHP session, not in the employee database.
