<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Bio-Data Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Employee Registration</h1>
    <nav aria-label="Main navigation">
        <a href="Page1.html">Home</a>
        <a href="Page2.html">Gallery</a>
        <a href="Page3.html">Contact</a>
        <a href="employee.php">Employee Form</a>
    </nav>
</header>

<main class="container">
    <h2>Employee Bio-Data Form</h2>

    <form action="save_employee.php" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" maxlength="100" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" maxlength="100" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" maxlength="255" required>

        <label for="email">Email ID:</label>
        <input type="email" id="email" name="email" maxlength="150" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone"
               pattern="0[0-9]{9}"
               title="Enter a 10-digit phone number starting with 0"
               required>

        <fieldset>
            <legend>Gender:</legend>
            <label class="inline-label">
                <input type="radio" name="gender" value="Male" required> Male
            </label>
            <label class="inline-label">
                <input type="radio" name="gender" value="Female"> Female
            </label>
        </fieldset>

        <label for="membership">Membership Duration:</label>
        <select id="membership" name="membership_duration" required>
            <option value="">Select Duration</option>
            <option value="1 Year">1 Year</option>
            <option value="2 Years">2 Years</option>
            <option value="5 Years">5 Years</option>
        </select>

        <button type="submit">Submit</button>
        <button type="reset" class="reset">Reset</button>
    </form>
</main>

<footer><p>&copy; 2026 My College Website</p></footer>
</body>
</html>
