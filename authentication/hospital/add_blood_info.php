<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blood Information</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #f5f5f5, #ececec);
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #0058a2;
            font-size: 28px;
            margin-top: 20px;
        }

        form {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            margin: 20px auto;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            text-align: left;
            color: #333;
        }

        select, input {
            width: 100%;
            padding: 12px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            color: #333;
            font-family: 'Arial', sans-serif;
        }

        input[type="number"] {
            padding: 12px;
        }

        button {
            background-color: #0058a2;
            color: #fff;
            font-weight: bold;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 15px;
        }

        button:hover {
            background-color: #003c70;
        }

        /* Apply glassmorphism effect */
        form {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        /* Enhance select input */
        select {
            background-color: rgba(255, 255, 255, 0.6);
        }

        /* Enhance button */
        button {
            background-color: rgba(0, 88, 162, 0.9);
            box-shadow: 0 5px 15px rgba(0, 88, 162, 0.3);
        }
    </style>
</head>
<body>
    <h2>Add Blood Information</h2>
    <form action="./process_add_blood_info.php" method="post">
        <div>
            <label for="blood_type">Blood Type:</label>
            <select name="blood_type" id="blood_type">
                <option value="">Select the blood type</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <!-- Add other blood types here -->
            </select>
        </div>
        <div>
            <label for="quantity">Quantity (liters):</label>
            <input type="number" name="quantity" id="quantity" required>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
