<?php
session_start();

// Include your database connection code here (replace with your actual database credentials)
$host = 'localhost'; // Your database host (usually 'localhost')
$db = 'blood_bank_system'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit();
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Modify this query to fetch blood samples and hospital name from your database
$query = "
    SELECT bs.*, h.name AS hospital_name
    FROM BloodSamples bs
    JOIN Hospitals h ON bs.hospital_id = h.hospital_id
"; // Updated query based on your schema

$stmt = $conn->query($query);
$bloodSamples = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Blood Samples</title>
    <!-- Include your CSS file for styling -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Available Blood Samples</h2>
    <table>
        <tr>
            <th>Serial No.</th>
            <th>Blood Group</th>
            <th>Quantity (units)</th>
            <th>Hospital Name</th>
            <th>Request Sample</th>
        </tr>
        <?php
        $serialNo = 1;
        foreach ($bloodSamples as $sample) {
            echo '<tr>';
            echo '<td>' . $serialNo . '</td>';
            echo '<td>' . $sample['blood_group'] . '</td>';
            echo '<td>' . $sample['quantity'] . '</td>';
            echo '<td>' . $sample['hospital_name'] . '</td>';
            echo '<td><a href="./process_request_sample.php?sample_id=' . $sample['sample_id'] . '&hospital_id=' . $sample['hospital_id'] . '">Request Sample</a></td>'; // Append hospital_id
            echo '</tr>';
            $serialNo++;
        }
        ?>
    </table>
</body>
</html>
