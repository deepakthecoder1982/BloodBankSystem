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
    <title>Receiver Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include("../includes/header.php"); ?>
    
    <div class="container">
        <h1>Welcome, <?php echo $user_name; ?>!</h1>
        <p>This is your receiver dashboard.</p>
        <a href="./request_sample.php">Request Sample</a>
        <!-- <a href="./view_requests.php">View Blood Sample request</a> -->
        <!-- Add receiver-specific content here -->
    </div>

    <?php include("../includes/footer.php"); ?>
</body>
</html>
