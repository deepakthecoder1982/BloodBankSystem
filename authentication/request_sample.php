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
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
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

        <?php
        if ($_SESSION['user_type'] === 'receiver') {
            echo 'a {
                text-decoration: none;
                background-color: #0058a2;
                color: #fff;
                font-weight: bold;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }
            
            a:hover {
                background-color: #003c70;
            }';
        }
        ?>

    </style>
</head>

<body>
    <h1>Available Blood Samples</h1>

    <table>
        <tr>
            <th>Serial No.</th>
            <th>Blood Group</th>
            <th>Quantity (units)</th>
            <th>Hospital Name</th>
            <?php
            if ($_SESSION['user_type'] === 'receiver') {
                echo '<th>Request Sample</th>';
            }
            ?>
        </tr>
        <?php
        $serialNo = 1;
        foreach ($bloodSamples as $sample) {
            echo '<tr>';
            echo '<td>' . $serialNo . '</td>';
            echo '<td>' . $sample['blood_group'] . '</td>';
            echo '<td>' . $sample['quantity'] . '</td>';
            echo '<td>' . $sample['hospital_name'] . '</td>';
            if ($_SESSION['user_type'] === 'receiver') {
                echo '<td><a href="./process_request_sample.php?sample_id=' . $sample['sample_id'] . '&hospital_id=' . $sample['hospital_id'] . '">Request Sample</a></td>';
            }
            echo '</tr>';
            $serialNo++;
        }
        ?>
        <?php echo $_SESSION["user_type"]?>
    </table>
</body>

</html>
