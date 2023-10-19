<?php

session_start();
// echo $_SESSION["user_id"];
// echo "</br>";
// echo $_SESSION["user_type"];
// echo "</br>";
// echo $_SESSION["user_name"];

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
<?php include("../../includes/header.php") ?>
<style>
    .login-button:hover {
        background-color: white;
        color: black;
        box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
    }

    form {
        position: relative;
    }

    .login-button {
        width: 20%;
        text-align: center;
        margin: auto;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }

    footer {
        position: absolute;
        bottom: 0;
    }

</style>

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
                            <button type="submit" class=" login-button btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("../../includes/footer.php") ?>
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