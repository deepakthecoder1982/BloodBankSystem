<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css"> <!-- Include your CSS file -->
    <title>Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .confirmation {
            background-color: #ffffff;
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
            font-size: 36px;
        }

        p {
            color: #555;
            font-size: 18px;
            margin: 10px 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="confirmation">
            <h1>Confirmation</h1>
            <p>Your blood sample request has been submitted successfully.</p>
            <p>Thank you for helping save lives!</p>
            <a href="receiver_dashboard.php" class="btn">Back to Dashboard</a>
        </div>
    </div>
</body>

</html>