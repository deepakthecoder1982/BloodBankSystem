<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css"> <!-- Updated CSS file path -->
    <title>Blood Bank System</title>
</head>

<body>
    <!-- 1) Logo and First Page -->
    <div class="top"style="display:flex;width:90%" >
        <div class="header" style="width: 20%;">
            <img src="images/logo.png" alt="Blood Bank System Logo" width="19vw" height=""> <!-- Updated image path -->
        </div>

        <!-- 2) Navbar -->        <nav>
            <div class="navbar" style="display:flex">
                <ul>
                    <li><a href="./authentication/available_blood_samples.php">Blood Samples</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- 3) Overview of the Blood Management System -->
    <div class="overview">
        <div class="overview-text">
            <h2>Welcome to the Blood Bank System</h2>
            <p>Your trusted source for managing and donating blood. We connect hospitals, donors, and receivers to save lives.</p>
        </div>
        <div class="overview-image">
            <img src="images/blood_sample_image.jpg" alt="Blood Sample Image"> <!-- Updated image path -->
        </div>
    </div>

    <!-- 4) Sign In and Register Options -->
    <div class="user-options">
        <h2>Get Started</h2>
        <div class="buttons">
            <a href="authentication/login/login.php" class="btn">Sign In as Receiver</a> <!-- Updated path to the login page -->
            <a href="authentication/login/login.php" class="btn">Sign In as Hospital</a> <!-- Updated path to the login page -->
        </div>
        <p>Don't have an account? <a href="authentication/registration/hospital_registration.php">Register Here</a></p> <!-- Updated path to the registration page -->
    </div>

    <!-- 5) Footer -->
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
</body>

</html>