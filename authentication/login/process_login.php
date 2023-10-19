<?php
// include "./db_connection.php";
// Start a session to store user data
// error_reporting(E_ALL); // /For displaying error in the code
// ini_set('display_errors', 1);

session_start();
// Include database connection code here (replace with your actual database credentials)
$host = 'localhost'; // Your database host (usually 'localhost')
$db = 'blood_bank_system'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password
// echo "<h1>I am logged in</h1>";
// Create a MySQLi connection
    $conn = new mysqli($host, $user, $pass, $db);

// Check the connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform server-side validation (you can add more validation as needed)
    if (empty($email) || empty($password)) {
        $_SESSION["error_message"] = "Email and password are required.";
        header("Location: ./login.php"); // Replace with your actual login page
        exit();
    }

    // Check if the user is a hospital
    $check_hospital_query = "SELECT * FROM hospitals WHERE email = ?";
    $stmt = $conn->prepare($check_hospital_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user_data = $result->fetch_assoc();
        // Verify the hashed password
        if (password_verify($password, $user_data["PASSWORD"])) {
            // User is a hospital, store user data in the session
            $_SESSION["user_id"] = $user_data["hospital_id"];
            $_SESSION["user_type"] = "hospital";
            $_SESSION["user_name"] = $user_data["NAME"];
            header("Location: ../hospital_dashboard.php"); // Replace with your actual hospital dashboard page
            exit();
        }else{
            print "<h1>Password is incorrect</h1>";
        }
    }

    // Check if the user is a receiver
    $check_receiver_query = "SELECT * FROM receivers WHERE email = ?";
    $stmt = $conn->prepare($check_receiver_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    echo var_dump($result);
    if ($result->num_rows == 1) {
        $user_data = $result->fetch_assoc();
        
        // Verify the hashed password
        if (password_verify($password, $user_data["PASSWORD"])) {
            // User is a receiver, store user data in the session
            $_SESSION["user_id"] = $user_data["receiver_id"];
            $_SESSION["user_type"] = "receiver";
            $_SESSION["user_name"] = $user_data["NAME"];
            header("Location: ../receiver_dashboard.php"); // Replace with your actual receiver dashboard page
            exit();
        }else{
            print "<h1>Password is incorrect</h1>";
        }
    }

    // If no matching user found, display an error
    $_SESSION["error_message"] = "Invalid email or password.";
    header("Location: http://localhost/bloodbanksysteminternshala/authentication/login/login.php"); // Replace with your actual login page
    exit();
}

// Close the database connection at the end
$conn->close();
?>
