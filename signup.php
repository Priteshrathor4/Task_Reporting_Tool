<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up For Reposting</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .bcolor {
            background-image: linear-gradient(to left, #74ebd5, #9face6);
        }
        
        .loginhere {
            color: #555;
            font-weight: 500;
            text-align: center;
            margin-top: 60px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body class="bcolor">

    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input autocomplete="off" type="text" class="form-input" name="name" id="Fname" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <input type="email" autocomplete="off" class="form-input" name="email" id="email" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <input autocomplete="off" type="text" class="form-input" name="password" id="password" placeholder="Password" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div>
                            <span id="error" style="color: red; font-weight: bold;"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submitSign" class="form-submit" value="Sign up" />
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="index.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $('#submitSign').click(function() {
            $('#error').html("");
            var Fname = $('#Fname').val();
            var email = $('#email').val();
            var pwd = $('#password').val();
            console.log(email);
            console.log(pwd);
            if (Fname == 0) {
                $('#error').html("**Enter Your name");
                $('#Fname').focus();
                return false;
            } else if (!Fname.match(/^[A-Za-z ]{4,20}$/)) {
                $('#error').html("**Enter correct Name");
                $('#Fname').focus();
                return false;
            } else if (email == 0) {
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
            } else if (!pwd.match(/^[A-Za-z][A-Za-z#@0-9_]{7,15}$/)) {
                $('#error').html("**Password must be 8 digitin Ex.(example#123)");
                $('#password').focus();
                return false;
            } else {
               
            }
        })
    </script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<?php
include("admin/connection.php");
if(isset($_POST['submit'])&&!empty($_POST['submit']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
     $password = $_POST['password'];

     $sql ="select *from regdetails where email = '$email'";
     $data = pg_query($db,$sql); 
     $check = pg_num_rows($data);  
     if($check > 0){ 
        echo '<script>alert("user already exist!")</script>';
        }else{
                $query = "INSERT INTO regdetails(name,email,password,status) 
                values ('$name','$email','$password','false')"; 
                if($result = pg_query($query)){
                    echo '<script>alert("registration successfully done")</script>';
                    ?>
                    <script>
                        window.location.href = 'index.php';
                    </script>
        <?php
                }
                else{
                    echo "Error.";
                }
            }
}
?>