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