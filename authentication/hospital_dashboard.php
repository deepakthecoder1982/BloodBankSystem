<?php
session_start();
// Check if the user is logged in as a hospital

if (!isset($_SESSION["user_id"]) || !isset($_SESSION["user_name"])  || $_SESSION["user_type"] !== "hospital") {
    header("Location: ../authentication/login/login.php");  
    exit();
}

// Hospital-specific content can be placed here
$user_name = $_SESSION["user_name"];
$user_type = $_SESSION["user_type"];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Dashboard</title>
    <style>
        .hospital-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 420px;
            margin: 3rem auto;
            width: 60%;
        }
        
        .hospital-container>h1 {
            color: #0077b6;
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
        }
        
        .hospital-container>p {
            text-align: center;
            font-size: 18px;
            color: #333;
            margin-bottom: 30px;
        }
        
        .hospital-container>a {
            display: block;
            background-color: #0077b6;
            color: #fff;
            font-weight: bold;
            padding: 12px;
            border-radius: 5px;
            text-decoration: none;
            margin: 10px 0;
        }

        .hospital-container>a:hover {
            background-color: #005b8b;
        }

        /* Apply glassmorphism effect */
        .hospital-container {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
        }

        footer {
            position: absolute;
            bottom: 0;
            background-color: #005b8b;
        }
        </style>
</head>
<?php include "../includes/header.php" ?>

<div class="hospital-container">
        <h1>Welcome, <?php echo $user_name; ?>!</h1>
        <p>This is your hospital dashboard.</p>
        <!-- Add hospital-specific content here -->
        <a href="../authentication/hospital/add_blood_info.php">Add Blood Information</a>
        <a href="./view_requests.php">View Blood Sample Requests</a>
        <a href="./request_sample.php">Available Blood Samples</a>
    </div>
    <?php include "../includes/footer.php" ?>