<?php 

// $_POST["user_type"] = "hopitals";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Hospital Registration</title>
</head>
<body>
    <h1>Hospital Registration</h1>
    <form method="post" action="process_registeration.php">
        <label for="name">Hospital Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <!-- <?php  echo $error_message ?> -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <!-- You can add more fields as needed -->
        <input type="submit" value="Register">
    </form>
    <p>OR</p>
    <div class="sigUpAsReciver">
        <span>Register as Receiver</span><a href="./reciver_registeration.php">  Blood Reciver</a>
    </div>
</body>
</html>
