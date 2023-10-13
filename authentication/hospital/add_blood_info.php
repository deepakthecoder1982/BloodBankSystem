<?php
session_start();
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'hospital') {
    
    // Redirect unauthorized users (e.g., receivers) to a different page
    header('Location: ../receiver_dashboard.php'); // Replace with the appropriate page
    exit();
}

// Rest of the page code (form and processing logic) goes here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blood Info</title>
</head>
<body>
    <h2>Add Blood Information</h2>
    <form action="./process_add_blood_info.php" method="post">
        <div>
            <label for="blood_type">Blood Type:</label>
            <select name="blood_type" id="blood_type">
            <option value="">Select the blood type</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
                <!-- Add other blood types here -->
            </select>
        </div>
        <div>
            <label for="quantity">Quantity (liters):</label>
            <input type="number" name="quantity" id="quantity" required>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
