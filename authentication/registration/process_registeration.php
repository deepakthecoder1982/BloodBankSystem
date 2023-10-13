<?php
// Start a session to store error messages or other session data
session_start();

// Include database connection code here (replace with your actual database credentials)
$host = 'localhost'; // Your database host (usually 'localhost')
$db = 'blood_bank_system'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

// Create a MySQLi connection
$conn = new mysqli($host, $user, $pass, $db);
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "<h1>Connnected</h1>connection created";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize user inputs
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform server-side validation
    if (empty($name) || empty($email) || empty($password)) {
        $_SESSION["error_message"] = "All fields are required.";
        header("Location: hospital_registration.php"); // Replace with your actual registration page
        exit();
    }

    // Check if the email is unique (not already registered)
    $check_email_query = "SELECT COUNT(*) FROM hospitals WHERE email = ?";
    $stmt = $conn->prepare($check_email_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        $_SESSION["error_message"] = "Email already exists.";
        header("Location: hospital_registration.php"); // Replace with your actual registration page
        exit();
    }

    // Hash the password (for security)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // $hashed_password = $password;

    // Determine the user type based on the form submission
    if (isset($_POST["blood_group"])) {
        $user_type = "receiver";
        $blood_group = $_POST["blood_group"];

        // Insert the new receiver record into the database
        $insert_query = "INSERT INTO receivers (name, email, password, blood_group) VALUES (?, ?, ?, ?)";
    } else {
        $user_type = "hospital";

        // Insert the new hospital record into the database
        $insert_query = "INSERT INTO hospitals (name, email, password) VALUES (?, ?, ?)";
    }
    $stmt = $conn->prepare($insert_query);
    // $stmt->bind_param("ssss", $name, $email, $hashed_password, $blood_group); // Adjust the types (s for string) as needed

    if ($user_type === "receiver") {
        $stmt->bind_param("ssss", $name, $email, $hashed_password, $blood_group); // Adjust the types (s for string) as needed
    } else {
        $stmt->bind_param("sss", $name, $email, $hashed_password); // Adjust the types (s for string) as needed
    }

    $stmt->execute();

    // Redirect to a confirmation page
    header("Location: registeration_success.php"); // Replace with your actual success page
    exit();
}

// Close the database connection at the end
$conn->close();
?>
