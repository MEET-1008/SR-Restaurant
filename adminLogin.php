<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/login-style.css">
    <title>Admin Login</title>
</head>

<body>

    <div class="container">
        <div class="box">
            <!------------------ Login Box --------------------->
            <div class="box-login" id="login">

                <div class="top-header" >
                    <h3 >Hello, Admin</h3>
                    <small>We are happy to have you back.</small>
                </div>
                <form method="POST">
                    <div class="input-group">
                        <div class="input-field">
                            <input type="text" class="input-box" id="logEmail" name="aname" required>
                            <label> User name </label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input-box" id="logPassword" name="password" required>
                            <label for="logPassword">Password</label>
                            <div class="eye-area">
                                <div class="eye-box" onclick="myLogPassword()">
                                    <i class="fa-regular fa-eye" id="eye-2"></i>
                                    <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
                                </div>
                            </div>
                        </div>


                       
                        <div class="input-field">
                            <input type="submit" class="input-submit" name="login" value="login">
                        </div>
                        
                        
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script>
        function myLogPassword() {

            var a = document.getElementById('logPassword');
            var b = document.getElementById('eye');
            var c = document.getElementById('eye-slash');

            if (a.type === "password") {
                a.type = "text"
                b.style.opacity = "0";
                c.style.opacity = "1";

            } else {
                a.type = "password"
                b.style.opacity = "1";
                c.style.opacity = "0";

            }

        }
    </script>
</body>

</html>


<?php
include 'conntect.php';
if (isset($_POST['login'])) {
    $username = $_POST['aname'];
    $password = $_POST['password'];

    //to prevent from mysqli injection  
    $username = stripcslashes($username);
    $password = stripcslashes($password);

    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    $sql = "select *from admin where aname = '$username' and password = '$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header('location:adminHome.php');
    } else {
        echo "<script>alert('Login failed. Invalid username or password.');</script>";
    }
    // close the connection
    $con->close();
}
?>