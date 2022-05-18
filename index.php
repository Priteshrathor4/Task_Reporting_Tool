<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .loginhere {
            color: #555;
            font-weight: 500;
            text-align: center;
            margin-top: 60px;
            margin-bottom: 60px;
        }
    </style>
</head>

<body class="bcolor" src="https://www.klipfolio.com/sites/all/themes/klipfolio_theme/img/illustrations/illustration-agency.svg?v2">
    <!-- <img alt=""> -->
    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Login </h2>

                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <span style="color: red; font-weight: bold;" id="error"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submitLogin" class="form-submit" value="Login" />
                        </div>
                    </form>
                    <p class="loginhere">
                        don't have an account then please <a href="signup.php" class="loginhere-link">sign up</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $('#submitLogin').click(function() {
            $('#error').html("");
            var email = $('#email').val();
            var pwd = $('#password').val();
            console.log(email);
            console.log(pwd);
            if (email == 0) {
                $('#error').html("**Enter Your Eamil");
                $('#email').focus();
                return false;
            } else if (!email.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)) {
                $('#error').html("**Email-id must be Ex-(example@email.com)");
                $('#email').focus();
                return false;
            } else if (pwd == 0) {
                $('#error').html("**Enter Your Password");
                $('#password').focus();
                return false;
            } else if (!pwd.match(/^[A-Za-z][A-Za-z#@0-9_]{7,29}$/)) {
                $('#error').html("**Password must be 8 digitin Ex.(example#123)");
                $('#password').focus();
                return false;
            } else {}
        })
    </script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<?php
include("connection.php");
session_start();
if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    //  $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select email,password,status,id from regdetails where email = '$email' and password = '$password'";
    $data = pg_query($db, $sql);
    $check = pg_num_rows($data);
    $row = pg_fetch_row($data);
    $id = $row[3];
    $row[0] == 'admin@gmail.com';
    // $_SESSION['id'] = $id;
    
    // echo $_SESSION['emaill'];
    // echo $_SESSION['email'];
    // echo $id;
    // if($row[0]=="admin@gmail.com"){
    //     header('Location: admin/index.php');
    //     echo '<script>alert("admin login successfully")</script>';
    // }else{ 
    // echo $row[2];
    if ($check > 0) {
        if ($row[0] == "admin@gmail.com") {
            $_SESSION['emaill'] =$row[0];
            echo '<script>alert("admin login successfully")</script>';
             header('Location: admin/index.php');
        } else {
            if ($row[2] == "t") {
                $_SESSION['email'] = $email;
                echo '<script>alert("user login successfully")</script>';
                header("Location: userI.php?id=$id");
            } else {
                echo '<script>alert("You are not authorized by admin")</script>';
            }
        }
    } else {
        echo '<script>alert("incorrect email or password!")</script>';
    }
}
?>