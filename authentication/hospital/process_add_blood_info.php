<?php
session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'hospital') {
    // Redirect unauthorized users (e.g., receivers) to a different page
    header('Location: ../receiver_dashboard.php'); // Replace with the appropriate page
    exit();
}

// Validate the data (this is a simplified example)
$blood_type = $_POST['blood_type'];
$quantity = $_POST['quantity'];

if (empty($blood_type) || empty($quantity) || !is_numeric($quantity) || $quantity <= 0) {
    $_SESSION['error_message'] = "Invalid data. Please check your inputs.";
    header('Location: add_blood_info.php');
    exit();
}

// Connect to the database (you'll need to update these with your actual credentials)
$host = 'localhost';
$db = 'blood_bank_system';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert data into the 'blood_samples' table
    $insert_query = "INSERT INTO bloodsamples (hospital_id, blood_group, quantity) VALUES (:hospital_id, :blood_group, :quantity)";

    $stmt = $conn->prepare($insert_query);
    $hospital_id = $_SESSION['user_id']; // Assuming you've stored hospital ID in the session

    $stmt->bindParam(':hospital_id', $hospital_id, PDO::PARAM_INT);
    $stmt->bindParam(':blood_group', $blood_type, PDO::PARAM_STR);
    $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);

    $stmt->execute();

    // Redirect to the hospital dashboard
    header('Location: ../hospital_dashboard.php');
    exit();
} catch (PDOException $e) {
    // Handle database connection or query errors
    echo "Error: " . $e->getMessage();
}
?>
