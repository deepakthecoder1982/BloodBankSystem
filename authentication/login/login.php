<?php

if (isset($_SESSION["user_type"])) {
    if (isset($_SESSION["user_type"]) === "hospital") {
        header("Location: ../hospital_dashboard.php");
    } else if (isset($_SESSION["user_type"]) === "receiver") {
        header("Location: ../reciver_dashboard.php");
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <!-- Login form -->
                        <form action="process_login.php" method="POST" id="login-form">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <?php echo isset($_SESSION['user_id']) ? "Email is not there" : null ?>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <!-- <div class="form-group">
                                <label for="userType">Select User Type:</label>
                                <select name="userType" id="userType">
                                    <option value="hospital">Hospital</option>
                                    <option value="receiver">Receiver</option>
                                </select>
                            </div> -->
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Link to Bootstrap JS and jQuery (if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script>
    // document.getElementById("login-form").addEventListener("submit", (e)=>{
    //     e.preventDefault();
    // })
</script>

</html>