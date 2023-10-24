<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/login-style.css">
    <title>Forgot password</title>
</head>

<body>

    <div class="container">
        <div class="box">
            <!------------------ Login Box --------------------->
            <div class="box-login" id="login">

                <div class="top-header">
                    <h3>Forgot password</h3>
                    <!-- <small>We are happy to have you back.</small> -->
                </div>
                <form method="POST">
                    <div class="input-group">
                        <div class="input-field">
                            <input type="text" class="input-box" id="logEmail" name="uname" required>

                            <label>User Name</label>
                        </div>
                        <div class="input-field">
                            <input type="email" class="input-box" id="logEmail" name="email" required>
                            <label for="logPassword">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input-box" id="logEmail" name="npassword" required>
                            <label for="logPassword">New password</label>
                        </div>

                        <div class="input-field">
                            <input type="submit" class="input-submit" name="forgot" value="Forgot">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</body>

</html>


<?php
include 'conntect.php';
if (isset($_POST['forgot'])) {
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $npassword = $_POST['npassword'];

    //to prevent from mysqli injection  
    $username = stripcslashes($username);
    $email = stripcslashes($email);
    $npassword = stripcslashes($npassword);

    $username = mysqli_real_escape_string($con, $username);
    $email = mysqli_real_escape_string($con, $email);
    $npassword = mysqli_real_escape_string($con, $npassword);

    $sql = "select *from user where uname = '$username' and email = '$email'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $sql1 = "UPDATE `user` SET  `password` = '$npassword' where uname = '$username' and email = '$email'";
        $result1 = mysqli_query($con, $sql1);
        if ($result1) {
            echo "<script>alert('Forgot . username or email.');</script>";
        }
        header('location:login.php');
    } else {
        echo "<script>alert('Forgot failed. Invalid username or email.');</script>";
    }
    // close the connection
    $con->close();
}
?>