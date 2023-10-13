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
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include("../includes/header.php"); ?>
    
    <div class="container">
        <h1>Welcome, <?php echo $user_name; ?>!</h1>
        <p>This is your hospital dashboard.</p>
        <!-- Add hospital-specific content here -->
        <a href="../authentication/hospital/add_blood_info.php">Add Blood Info</a>
        <a href="./view_requests.php">View Blood Sample request</a>
    </div>

    <?php include("../includes/footer.php"); ?>
</body>
</html>
