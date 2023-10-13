<?php
// Start a session to manage user sessions
session_start();

// Include database connection code here (replace with your actual database credentials)
$host = 'localhost'; // Your database host (usually 'localhost')
$db = 'blood_bank_system'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

// Check if the user is logged in (you can modify this based on your user authentication logic)
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect to the login page
    exit();
}

// Include your database connection code here (e.g., using PDO or MySQLi)
// Connect to the database using PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Set PDO to throw exceptions on error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle database connection error
    echo "Error: " . $e->getMessage();
    exit();
}

// Fetch blood samples from your database
try {
    $stmt = $conn->query("SELECT * FROM bloodsamples");
    $bloodSamples = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Handle database query error
    echo "Error: " . $e->getMessage();
    exit();
}

// Include the header for your HTML
// include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Blood Samples</title>
    <!-- Include your CSS file for styling -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Available Blood Samples</h2>
    <table>
        <tr>
            <th>Blood Type</th>
            <th>Quantity (units)</th>
            <th>Request Sample</th>
        </tr>
        <?php
        foreach ($bloodSamples as $sample) {
            echo '<tr>';
            echo '<td>' . $sample['blood_type'] . '</td>';
            echo '<td>' . $sample['quantity'] . '</td>';
            echo '<td><a href="request_sample.php?sample_id=' . $sample['id'] . '">Request Sample</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>

<?php
// Include the footer for your HTML
// include('includes/footer.php');
?>
