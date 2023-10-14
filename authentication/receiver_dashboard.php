<?php
session_start();

// Check if the user is logged in as a receiver
if (!isset($_SESSION["user_id"]) || $_SESSION["user_type"] !== "receiver") {
    header("Location: ./login/login.php");
    exit();
}

// Receiver-specific content can be placed here
$user_name = $_SESSION["user_name"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            font-family: Poppins, sans-serif;
            background: linear-gradient(to bottom, #f5f5f5, #ececec);
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #0058a2;
            font-size: 28px;
            margin: 20px 0;
        }

        .receiver-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 600px;
            margin: 20px auto;
        }

        .receiver-container > p {
            font-size: 18px;
            color: #333;
        }

       .receiver-container > a {
            display: block;
            background-color: #0058a2;
            color: #fff;
            font-weight: bold;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 20px auto;
            max-width: 200px;
        }

       .receiver-container > a:hover {
            background-color: #003c70;
        }

        /* Apply glassmorphism effect */
        .receiver-container{
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body>
    <?php include("../includes/header.php"); ?>
    
    <div class="receiver-container">
        <h1>Welcome, <?php echo $user_name; ?>!</h1>
        <p>This is your reciver dashboard.</p>
        <a href="./request_sample.php">Request Sample</a>
        <!-- <a href="./view_requests.php">View Blood Sample request</a> -->
        <!-- Add hospital-specific content here -->
    </div>

    <?php include("../includes/footer.php"); ?>
</body>
</html>
