<?php
// Start a session to manage user sessions
session_start();

// Check if the user is logged in and is a hospital (you can modify this based on your user authentication logic)
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'hospital') {
    header('Location: ./login/login.php'); // Redirect to the login page if not logged in or not a hospital
    exit();
}

// Include your database connection code here (e.g., using PDO or MySQLi)
$host = 'localhost'; // Your database host
$db = 'blood_bank_system'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

// Replace with your actual database connection code
try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve the list of requests for the logged-in hospital
    $hospitalId = $_SESSION['user_id'];
    $sql = "SELECT r.receiver_id, r.blood_group, r.status, r.request_date, rc.name AS receiver_name
            FROM bloodrequests r
            INNER JOIN receivers rc ON r.receiver_id = rc.receiver_id
            WHERE r.hospital_id = :hospitalId";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':hospitalId', $hospitalId, PDO::PARAM_INT);
    $stmt->execute();
    $requests = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Handle database connection or query errors
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
    <title>View Requests</title>
    <?php include("../includes/header.php")?>
    <style>
        /* Basic CSS styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            color: #0058a2;
            font-size: 28px;
            margin: 10px auto;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #0058a2;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        footer {
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body>
    <h2>View Requests</h2>
    <table>
        <tr>
            <th>Receiver Name</th>
            <th>Blood Group</th>
            <th>Status</th>
            <th>Request Date</th>
        </tr>
        <?php
        foreach ($requests as $request) {
            echo '<tr>';
            echo '<td>' . $request['receiver_name'] . '</td>';
            echo '<td>' . $request['blood_group'] . '</td>';
            echo '<td>' . $request['status'] . '</td>';
            echo '<td>' . $request['request_date'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
<?php
include('../includes/footer.php');
?>
</body>
</html>

