<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css"> <!-- Your CSS file path -->
    <style>
    /* Reset some default styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Apply a background color and font styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        color: #333;
        margin: 0;
    }

    /* Sticky Navbar with Box Shadow */
    .navbar {
        position: sticky;
        top: 0;
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        z-index: 100;
    }

    .navbar ul {
        display: flex;
        justify-content: space-between;
        list-style: none;
        padding: 0;
    }

    .navbar li {
        margin-right: 20px;
    }

    .navbar a {
        text-decoration: none;
        color: #0077b6;
        font-weight: bold;
    }

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
        justify-content: space-between;
        padding: 20px;
        background: rgba(255, 255, 255, 0.8);
    }

    .overview-text {
        width: 50%;
    }

    .overview-text h2 {
        font-size: 24px;
        color: #a80000;
        margin-bottom: 10px;
    }

    .overview-text p {
        font-size: 16px;
    }

    /* User options section */
    .user-options {
        text-align: center;
        background: rgba(255, 255, 255, 0.8);
        padding: 20px;
    }

    .user-options h2 {
        font-size: 24px;
        color: #a80000;
        margin-bottom: 20px;
    }

    .buttons {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .btn {
        text-decoration: none;
        background-color: #a80000;
        color: #fff;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 5px;
        margin: 0 10px;
    }

    .btn:hover {
        background-color: #900000;
    }

    /* Footer section */
    footer {
        position: sticky;
        bottom: 0;
        background-color: #a80000;
        padding: 10px 0;
        text-align: center;
    }

    .footer ul {
        list-style: none;
    }

    .footer li {
        margin: 0 15px;
    }

    .footer a {
        text-decoration: none;
        color: #fff;
    }

    .copyright {
        color: #fff;
    }
</style>

</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <ul>
            <li><a href="./authentication/available_blood_samples.php">Blood Samples</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <!-- Display User Name and Logout Button when logged in -->
            <div class="user-info" id="user-info">
                <span class="user-name">User Name</span>
                <button class="logout-button" id="logout-button">Logout</button>
            </div>
        </ul>
    </div>

    <!-- Overview of the Blood Management System -->
    <div class="overview">
        <div class="overview-text">
            <h2>Welcome to the Blood Bank System</h2>
            <p>Your trusted source for managing and donating blood. We connect hospitals, donors, and receivers to save lives.</p>
        </div>
    </div>

    <!-- User Sign In and Register Options -->
    <div class="user-options">
        <h2>Get Started</h2>
        <div class="buttons">
            <a href="authentication/login/login.php" class="btn">Sign In as Receiver</a>
            <a href="authentication/login/login.php" class="btn">Sign In as Hospital</a>
        </div>
        <p>Don't have an account? <a href="authentication/registration/hospital_registration.php">Register Here</a></p>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer">
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="download/playstore">Download on Play Store</a></li>
                <li><a href="download/appstore">Download on App Store</a></li>
            </ul>
        </div>
    </footer>

    <script>
        // Toggle user info and logout button when logged in
        const userLoginStatus = true; // Set this to true if the user is logged in
        const userInfo = document.getElementById('user-info');
        const logoutButton = document.getElementById('logout-button');

        if (userLoginStatus) {
            userInfo.classList.add('active');
        }

        logoutButton.addEventListener('click', () => {
            // Implement your logout logic here
            // For example, redirect the user to the logout page
        });
    </script>
</body>
</html>
