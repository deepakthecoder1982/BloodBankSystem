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
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #f5f5f5, #ececec);
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #0058a2;
            font-size: 28px;
            margin: 20px 0;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin: 10px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .sample-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .sample-item {
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin: 10px;
            width: calc(33.33% - 20px);
        }

        .sample-item h2 {
            color: #0058a2;
            font-size: 20px;
        }

        .sample-item p {
            color: #333;
        }

        a.request-button {
            text-decoration: none;
            background-color: #0058a2;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            width: 100%;
            max-width: 200px;
            margin: 20px auto;
        }

        a.request-button:hover {
            background-color: #003c70;
        }

        .hide-for-hospital {
            display: none;
        }
        
    </style>
</head>
<body>
    <?php include("../includes/header.php"); ?>

    <div class="container">
        <h1>Available Blood Samples</h1>
        <p>Here are the blood samples available for donation:</p>
        <div class="sample-list">
            <div class="sample-item">
                <h2>Sample 1: A+</h2>
                <p>Quantity: 1 liter</p>
            </div>
            <div class="sample-item">
                <h2>Sample 2: O-</h2>
                <p>Quantity: 500 ml</p>
            </div>
        </div>
        <?php if ($_SESSION['user_type'] === 'receiver') { ?>
            <a href="./request_sample.php" class="request-button">Request a Sample</a>
            <?php } ?>
        </div>
        <?php echo $_SESSION["user_type"]; echo "depa"?>

    <?php include("../includes/footer.php"); ?>
</body>
</html>
