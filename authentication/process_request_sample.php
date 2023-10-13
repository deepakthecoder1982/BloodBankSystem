<?php
session_start();

// Include your database connection code here
$host = 'localhost';
$db = 'blood_bank_system';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (!isset($_SESSION['user_id'])) {
        header('Location: ./login/login.php');
        exit();
    }

    // if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["sample_id"])&& isset($_GET["hospital_id"])) {
    //     $sampleId = $_GET["sample_id"];
    //     $hospital_id = $_GET["hospital_id"];
    //     // You can use a SQL query to update the status of the blood sample
    //     $updateQuery = "UPDATE bloodsamples SET status = 'requested' WHERE sample_id = :sampleId And hospital_id = :hospital_id";
    //     $stmt = $conn->prepare($updateQuery);
    //     $stmt->bindParam(':sample_id', $sampleId, PDO::PARAM_INT);
    //     $stmt->bindParam(':hospital_id', $hospital_id, PDO::PARAM_INT);
    //     $stmt->execute();

    //     // You might also want to record the request in the BloodRequests table
    //     $receiverId = $_SESSION['user_id'];
    //     $bloodGroup = ''; // Get the blood group from the sample in the database
    //     $status = 'requested';
    //     $requestDate = date('Y-m-d');

    //     // Insert the request into the BloodRequests table
    //     $insertQuery = "INSERT INTO bloodrequests (receiver_id, blood_group, status, request_date) VALUES (:receiverId, :bloodGroup, :status, :requestDate)";
    //     $stmt = $conn->prepare($insertQuery);
    //     $stmt->bindParam(':receiverId', $receiverId, PDO::PARAM_INT);
    //     $stmt->bindParam(':bloodGroup', $bloodGroup, PDO::PARAM_STR);
    //     $stmt->bindParam(':status', $status, PDO::PARAM_STR);
    //     $stmt->bindParam(':requestDate', $requestDate, PDO::PARAM_STR);
    //     $stmt->execute();

    //     // After processing, you can redirect the user to a confirmation page.
    //     header('Location: confirmation_page.php'); // Replace with your actual confirmation page
    //     exit();
    // } else {
    //     header('Location: available_blood_samples.php'); // Redirect if the sample ID is missing
    //     exit();
    // }

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["sample_id"]) && isset($_GET["hospital_id"])) {
        $sampleId = $_GET["sample_id"];
        $hospital_id = $_GET["hospital_id"];
        // Fetch the blood group from the BloodSamples table
        $bloodGroupQuery = "SELECT blood_group FROM bloodsamples WHERE sample_id = :sampleId";
        $stmt = $conn->prepare($bloodGroupQuery);
        $stmt->bindParam(':sampleId', $sampleId, PDO::PARAM_INT);
        $stmt->execute();
        $bloodGroupResult = $stmt->fetch(PDO::FETCH_ASSOC);
        echo var_dump($bloodGroupResult);
        if ($bloodGroupResult) {
            $bloodGroup = $bloodGroupResult['blood_group'];

            // Fetch the user name from the Users table based on user_id (receiver_id)
            $receiverId = $_SESSION['user_id'];
            $userNameQuery = "SELECT NAME FROM receivers WHERE receiver_id = :receiverId";
            $stmt = $conn->prepare($userNameQuery);
            $stmt->bindParam(':receiverId', $receiverId, PDO::PARAM_INT);
            $stmt->execute();
            $userNameResult = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($userNameResult) {
                $user_name = $userNameResult['NAME'];
                echo "<br>";

                // Proceed with your update and insertion logic
                $status = 'requested';
                $requestDate = date('Y-m-d');

                // Insert the request into the BloodRequests table
                // Insert the request into the BloodRequests table
                $insertQuery = "INSERT INTO bloodrequests (receiver_id, blood_group, status, request_date, hospital_id, sample_id) VALUES (:receiverId, :bloodGroup, :status, :requestDate, :hospital_id, :sample_id)";
                $stmt = $conn->prepare($insertQuery);
                $stmt->bindParam(':receiverId', $receiverId, PDO::PARAM_INT);
                $stmt->bindParam(':bloodGroup', $bloodGroup, PDO::PARAM_STR);
                $stmt->bindParam(':status', $status, PDO::PARAM_STR);
                $stmt->bindParam(':requestDate', $requestDate, PDO::PARAM_STR);
                $stmt->bindParam(':hospital_id', $hospital_id, PDO::PARAM_INT);
                $stmt->bindParam(':sample_id', $sampleId, PDO::PARAM_INT);
                $stmt->execute();


                echo "<br>";
                echo $hospital_id;
                echo "<br>";
                echo $sampleId;
                echo "<br>";

                // After processing, you can redirect the user to a confirmation page.
                header('Location: confirmation_page.php'); // Replace with your actual confirmation page
                exit();
            }
        }
        // Handle cases where data retrieval fails
        // header('Location: error_page.php'); // Redirect to an error page
        exit();
    } else {
        header('Location: available_blood_samples.php'); // Redirect if the sample ID is missing
        exit();
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
