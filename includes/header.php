<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles/style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@600&family=Montserrat:wght@500;700;900&family=Open+Sans&family=Oswald:wght@200;300;400;600&family=Poppins:ital,wght@0,300;0,500;0,600;1,300;1,400;1,500&family=Raleway:ital,wght@1,900&family=Roboto:wght@300&display=swap" rel="stylesheet">
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

        /* User Info and Logout Button */
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

        /* Overview section */
        .overview {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            background: rgba(255, 255, 255, 0.7);
            width: 90%;
            margin: 2vw auto;
            border-radius: 10px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            transition: all 0.2s ease-in-out;
        }

        /* .overview:hover {
            transform: scale(1.01);
        } */


        .overview-text {
            width: 50%;
        }

        .overview-text h2 {
            font-size: 1.9rem;
            color: #a80000;
            margin-bottom: 10px;
        }

        .overview-text p {
            font-size: 1.1rem;
            line-height: 1.5rem;
            padding: 0px 6px;
            color: var(--font-color);

        }

        /* User options section */
        .user-options {
            text-align: center;
            background: rgba(255, 255, 255, 0.7);
            padding: 20px;
            width: 90%;
            margin: 2vw auto;
            border-radius: 10px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        }

        .user-options h2 {
            font-size: 24px;
            color: #a80000;
            margin-bottom: 20px;
            font-weight: 900;
        }

        .buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            width: 80%;
            margin: auto;
        }

        .buttons .sign-hospital,
        .buttons .sign-receiver {
            width: 35%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            margin: .6rem auto;
            padding: 1rem;
            border-radius: 1rem;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            transition: all .3s ease-in-out;
        }

        .buttons .sign-hospital:hover,
        .buttons .sign-receiver:hover {
            transform: scale(1.07);
        }

        .buttons .sign-receiver img {
            width: 70%;
        }

        .buttons .sign-hospital img {
            width: 70%;
        }

        .user-options .buttons .btn {
            text-decoration: none;
            background-color: #a80000;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
        }

        .user-options .buttons .btn:hover {
            background-color: transparent;
            color: black;
            outline: .01rem solid;
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
            margin: 1rem 0;
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
    </style>

</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="nav-logo">
            <a href="./index.php" style="text-decoration:none;">
                <img src="../im" id="logo-img">
                <span>Blood Bank</span>
            </a>
        </div>
        <div class="nav-items">
            <ul>
                <li><a href="./authentication/available_blood_samples.php">Blood Samples</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>

                <?php if (isset($_SESSION["user_type"])) : ?>
                    <!-- Display User Name and Logout Button when logged in -->
                    <div class="user-info" id="user-info">
                        <span class="user-name">User Name</span>
                        <button class="logout-button" id="logout-button">Logout</button>
                    </div>
                <?php else : ?>
                    <!-- Display Login Button when not logged in -->
                    <ul id="login-btn"><a href="./authentication/login/login.php">Login</a></ul>
                <?php endif; ?>
            </ul>

        </div>
    </div>