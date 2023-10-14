<!DOCTYPE html>
<html>

<head>
    <title>Receiver Registration</title>
    <!-- <style>
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
    </style> -->
    <link rel="stylesheet" href="registeration.css">
</head>

<body>
    <div class="navbar">
        <div class="nav-logo">
            <a href="../../index.php" style="text-decoration:none;">
                <img src="../../images/logo-main.png" id="logo-img">
                <span>Blood Bank</span>
            </a>
        </div>
        <div class="nav-items">
            <ul>
                <li><a href="./authentication/request_sample.php">Blood Samples</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>

                <?php if (isset($_SESSION["user_type"])) : ?>
                    <!-- Display User Name and Logout Button when logged in -->
                    <div class="user-info" id="user-info">
                        <span class="user-name"><?php echo $_SESSION["user_id"] ?></span>
                        <button class="logout-button" id="logout-button">Logout</button>
                    </div>
                <?php else : ?>
                    <!-- Display Login Button when not logged in -->
                    <ul id="login-btn"><a href="./authentication/login/login.php">Login</a></ul>
                <?php endif; ?>
            </ul>

        </div>
    </div>
    <div class="container">
        <h3>Receiver Registration</h3>
        <div class="form-container">

            <img src="../../images/login.jpg" alt="" width="100%">
            <form method="post" action="process_registeration.php">
                <label for="name">Full Name:</label>
                <input type="text" placeholder="Enter your full name." id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Enter your email." name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" placeholder="Enter your password" name="password" required>

                <label for="blood_group">Blood Group:</label>
                <select id="blood_group" name="blood_group" required>
                    <option value="">Choose the Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>


                <input type="submit" value="Register">
                <p class="or">Or</p>
                <span>Aready have an account?</span> <a class="login-link" href="../login/login.php">Login</a>
            </form>
        </div>
    </div>
    <footer>
        <div class="footer">
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Download on Play Store</a></li>
                <li><a href="#">Download on App Store</a></li>
            </ul>
            <div class="copyright">
                <p>Blood-Bank-System © 2023</p>
            </div>
        </div>
    </footer>
</body>

</html>