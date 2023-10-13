<?php
session_start();

// Check if the user is logged in as a hospital
if (!isset($_SESSION["user_id"]) || $_SESSION["user_type"] !== "hospital") {
    header("Location: ../authentication/login.php");
    exit();
}

// Hospital-specific content can be placed here
$user_name = $_SESSION["user_name"];
$user_type = $_SESSION["user_type"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #f0f0f0, #e0e0e0);
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 400px;
        }

        h1 {
            color: #0077b6;
            font-size: 32px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #333;
            margin-bottom: 30px;
        }

        a {
            display: block;
            background-color: #0077b6;
            color: #fff;
            font-weight: bold;
            padding: 12px;
            border-radius: 5px;
            text-decoration: none;
            margin: 10px 0;
        }

        a:hover {
            background-color: #005b8b;
        }

        /* Apply glassmorphism effect */
        .container {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $user_name; ?>!</h1>
        <p>This is your hospital dashboard.</p>
        <!-- Add hospital-specific content here -->
        <a href="../authentication/hospital/add_blood_info.php">Add Blood Information</a>
        <a href="./view_requests.php">View Blood Sample Requests</a>
        <a href="./request_sample.php">Available Blood Samples</a>
    </div>
</body>
</html>
