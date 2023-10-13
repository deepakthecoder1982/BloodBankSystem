<!DOCTYPE html>
<html>
<head>
    <title>Hospital Registration</title>
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #ffcccc, #ff9999);
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            color: #0077b6;
            font-size: 32px;
            margin: 0;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 400px;
            margin: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border: 1px solid #0077b6;
        }

        input[type="submit"] {
            background-color: #0077b6;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 15px;
        }

        input[type="submit"]:hover {
            background-color: #005b8b;
        }

        .sigUpAsReciver {
            margin-top: 10px;
            font-weight: bold;
        }

        .sigUpAsReciver a {
            color: #0077b6;
            text-decoration: none;
        }
    </style> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
            padding: 2rem;
        }

        h1 {
            color: #0077b6;
            font-size: 28px;
        }

        form {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        select:focus {
            border: 1px solid #0077b6;
        }

        input[type="submit"] {
            background-color: #0077b6;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 15px;
        }

        input[type="submit"]:hover {
            background-color: #005b8b;
        }
    </style>
</head>
<body>
    <h1>Hospital Registration</h1>
    <form method="post" action="process_registeration.php">
        <label for="name">Hospital Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Register">
    </form>
    <p>OR</p>
    <div class="sigUpAsReciver">
        <a href="./reciver_registeration.php">Register as Blood Receiver</a>
    </div>
</body>
</html>
