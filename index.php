<!--  -->
    <?php include("./header.php")?>
    <!-- Overview of the Blood Management System -->
    <div class="overview">
        <div class="overview-text">
            <h2>Welcome to the Blood Bank System</h2>
            <p>Your trusted source for managing and donating blood. We connect hospitals, donors, and receivers to save lives.</p>
        </div>
        <img src="images/image_head1-removebg-preview.png" width="50%">
    </div>

    <!-- User Sign In and Register Options -->
    <div class="user-options">
        <h2>Get Started</h2>
        <div class="buttons">
            <div class="sign-receiver">
                <img src="./images/blood-reciver-removebg-preview.png" alt="reciver-image">
                <a href="authentication/registration/reciver_registeration.php" class="btn">Register as Receiver</a>
            </div>
            <div class="sign-hospital">
                <img src="./images/hospital-iamge-removebg-preview.png" alt="hospital-image">
                <a href="authentication/registration/hospital_registration.php" class="btn">Register as Hospital</a>
            </div>
        </div>
        <div class="register-part">
            <p id="register-page">Aready have an account? <a href="authentication/login/login.php">Login Here</a></p>
        </div>
    </div>

    <!-- Footer -->
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