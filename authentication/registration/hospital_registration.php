<!DOCTYPE html>
<html>

<head>
    <title>Hospital Registration</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@600&family=Montserrat:wght@500;700;900&family=Open+Sans&family=Oswald:wght@200;300;400;600&family=Poppins:ital,wght@0,300;0,500;0,600;1,300;1,400;1,500&family=Raleway:ital,wght@1,900&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- <style>
        body {
            font-family: sans-serif;
            background: #f4f4f4;
            text-align: center;
        }

        h1 {
            color: dodgerblue;
            font-size: 28px;
            margin: 1rem auto;
            font-weight: bold;
        }
    </style>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --font-color: #090808bd;
        }

        /* Apply a background color and font styles */
        body {
            font-family: Poppins, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            background-image: url("https://img.freepik.com/premium-photo/abstract-blur-exhibition-hallway-corridor-background_488220-21231.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        /* Sticky Navbar with Box Shadow */

        .user-info {
            display: none;
        }

        .user-info.active {
            display: flex;
            align-items: center;
        }

        .user-name {
            margin-right: 10px;
            font-weight: bold;
        }

        .logout-button {
            background-color: #ff3333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        /* Footer section */
        footer {
            bottom: 0;
            background-color: black;
            padding: 10px 0;
            text-align: center;
            display: flex;
            width: 100%;
            padding: 20px;
        }

        .footer ul {
            list-style: none;
            min-width: 95vw;
            width: 100%;
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin: auto;
        }

        .footer li {
            margin: 0 15px;
        }

        .footer a {
            text-decoration: none;
            color: #fff;
        }

        .copyright {
            color: #f9f1f182;
            margin: 1rem 0 .2rem;
            position: relative;
            bottom: 0;
        }

        .navbar {
            position: sticky;
            top: 0;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px 18px;
            z-index: 100;
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 50px;
            top: 8px;
            margin: 10px 10px;
            border-radius: 8px;
        }

        .navbar .nav-logo {
            width: 25%;
            /* box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px; */
            /* border-radius: 20px;
            border-bottom:1px solid #a80000; */
        }

        .navbar .nav-logo img {
            width: 2.5vw;
        }

        .navbar ul {
            display: flex;
            justify-content: space-between;
            list-style: none;
            font-size: 1.1rem;
        }

        .nav-items a {
            position: relative;
        }

        .nav-items {
            /* border: 1px solid; */
            width: 40%;
        }

        .nav-items a::after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #0077b6;
            transform-origin: bottom right;
            transition: transform 0.2s ease-in-out;
        }

        .nav-items a:hover::after {
            transform: scaleX(1);
        }

        .navbar li {
            margin-right: 20px;
        }

        .navbar .nav-items a {
            text-decoration: none;
            color: #0077b6;
            font-weight: bold;
        }

        .navbar .nav-items a:hover a::after {
            text-decoration: dashed;
            border: 1px solid red;

        }

        .nav-logo {
            display: inline-block;
        }

        .nav-logo span {
            background: linear-gradient(45deg, #ff0000, #ff6600);
            -webkit-background-clip: text;
            font-family: Alkatra;
            background-clip: text;
            color: transparent;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(255, 102, 0, 0.6);
            letter-spacing: 2px;
            position: relative;
            bottom: 10px;
            left: 10px;
        }

        #login-btn>a {
            color: white;
            padding: 5px 15px;
            border-radius: 8px;
            background: rgb(210 33 34 / 85%);
            color: white;
            position: relative;
            bottom: 6px;
        }

        #register-page {
            font-size: 1.2rem;
            color: gray;
            margin: 2rem 0;
        }

        #register-page a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 6px;
            background-color: #a80000;
            color: white;
            font-size: 1.1rem;
        }

        #register-page a:hover {
            background-color: white;
            outline: .01rem solid;
            color: black;
        }

        .container {
            width: 82%;
            margin: 1rem auto;
            /* background-color: rgba(255, 255, 255, 0.55); */
            border-radius: 30px;
            padding: 20px;
        }

        .container h3 {
            color: #a80000;
            font-size: 2.2rem;
            margin: 0;
            padding: 10px 20px;
            background-color: #005b8b;
            width: 50%;
            margin: auto;
            color: wheat;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.2);
            background-color: rgba(255, 255, 255, 0.75);
            opacity: .9;
            width: 100%;
            height: 100%;
            display: flex;
            margin: 2rem auto;
            justify-content: space-around;
            align-items: center;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        }

        .form-container img {
            width: 100%;
            height: 100%;
            border-top-left-radius: .5rem;
            border-bottom-left-radius: .5rem;
            border-bottom-right-radius: 4px;
            border-top-right-radius: 4px;
            object-fit: contain;
        }

        form {
            border-radius: 5px;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); */
            padding: 0 30px;
            max-width: 400px;
            margin: 1rem .5rem;
        }


        .form-container form {
            min-width: 35%;
            height: 100%;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            text-align: left;
            font-size: 1.1rem;
            /* color: whitesmoke; */
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 6px;
            background-color: #eff8ff;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            border: none;
            font-size: 1rem;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        select:focus {
            outline: none;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            outline: 1px solid blueviolet;
        }

        input[type="text"]:active,
        input[type="email"]:active,
        input[type="password"]:active,
        select:active {
            outline: 1px solid blue;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;

        }

        input[type="submit"] {
            background-color: #0077b6;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 18px;
            font-size: 1rem;
            letter-spacing: 1px;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        .login-link {
            padding: 8px 20px;
            background-color: #a80000;
            width: 100%;
            text-decoration: none;
            color: white;
            border: none;
            border-radius: 6px;
            margin: 1rem auto;
        }

        .or {
            font-size: 1.5rem;
            font-weight: bold;
            font-family: Montreat;
            margin: 1rem;
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
        <h3>Hospital Registration</h3>
        <div class="form-container">

            <img src="../../images/image_head3.jpg" alt="" width="100%">
            <form method="post" action="process_registeration.php">
                <label for="name">Hospital Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter the hospital name...">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter the hospital email...">

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Enter the hospital Password">

                <input type="submit" value="Register">
                <p class="or">Or</p>
                <span>Aready have an account?</span> <a class="login-link" href="../login/login.php">Login</a>
            </form>
        </div>
    </div>
    <!-- <p>OR</p>
        <div class="sigUpAsReciver">
            <span>Are you a new user? </span> <a href="./reciver_registeration.php">Register as Blood Receiver</a>
        </div> -->
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