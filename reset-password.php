<?php
//includes
include 'connection.php';
// $logged_user = "null";
include 'email-config.php';

if (isset($_GET['token'])) {
    $get_req_token = $_REQUEST['token'];
}

if (isset($_POST['reset-password'])) {
    $getToken = $_REQUEST['token'];
    $getPassword = $_REQUEST['password'];
    $getNewPassword = $_REQUEST['new-password'];


    // get Token users email
    if ($getU_email = mysqli_query($con, "SELECT *  FROM `user` WHERE `last_otp_code`=$getToken")) {
        /* determine number of rows result set  */
        if (mysqli_num_rows($getU_email) > 0) {
            while ($row = mysqli_fetch_assoc($getU_email)) {
                $new_email = $row["email"];
            }
        }
    }
    // ----------------------------------------------

    if ($getPassword == $getNewPassword) {
        $newPassword = $getNewPassword;
        $md5Password = md5($getNewPassword);
        // If Password are matched then check the token is availeble or not
        if ($result = mysqli_query($con, "SELECT *  FROM `user` WHERE `last_otp_code`=$getToken")) {
            /* determine number of rows result set  */
            $row_cnt = mysqli_num_rows($result);
            // Checking Row 
            if ($row_cnt > 0) {
                //TOKEN MATCHED
                $update_query = "UPDATE `user` SET  `password` = '$md5Password' WHERE `user`.`last_otp_code`=$getToken;";
                if (mysqli_query($con, $update_query)) {

                    $email_body = '
                    <center>
                        <div style="background:#F5EEDC; padding:80px 10px;">
                            <div style="width:600px; border-radius:10px;">
                
                                <div style="background:#363062; padding:20px 0px;">
                                    <img width="200px" src="https://res.cloudinary.com/tusar/image/upload/v1638641935/locally/logo-dark_b7rzfx.png" alt="locally Logo">
                                </div>
                                <div style="background:#ffffff; padding:20px 20px;">
                                    <h2>Password Has Been Reset</h2>
                                    <br><br>
                                    <br><br>
                                    <p>Your Password has beeen reset succesfully</p>
                                
                                    <br>
                                    <p>If you havent change the password, Please reset your password now</p>    
                                    <br><br>
                                    <br><br>
                                </div>
                                <div style="background:#363062;  padding:10px 0px;">
                                    <p style="color:white;"> &copy; all right reseved Locally</p>
                                </div>
                            </div>
                        </div>
                    </center>
        
                     ';
                    $mail->addAddress($new_email);     //Add a recipient

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'RESET PASSWORD SUCCESFULLY';
                    $mail->Body    = $email_body;
                    $mail->AltBody = 'Your Password has Been Reset';



                    if ($mail->send()) {
                        $hasPasswordReset = "true";
                    }
                }
            } else {
                $token_notFound = '<div class="bg-danger text-white p-2">Sorry,Token Expired or Not Matched</div>';
            }
        }
    } else {
        $passwordNotMatched = '<div class="bg-danger text-white p-2">Password Not Matched</div>';
    }
}











?>


<!doctype html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="76x76" href="images/site-icon-white.png" />
    <link rel="icon" type="image/png" href="images/site-icon-white.png" />
    <title>Forgot Password</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a559834955.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
    <div class="login-body" style="background-image: url(images/login-bg.jpg);">
        <div class="container">
            <div class="center-widget">



                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                        <div class="widget">
                            <div class="login-logo text-center">
                                <img src="images/logo-dark.png" width="50%" alt="">
                            </div>
                            <div class="p-3"></div>
                            <div class="container">
                                <div class="widget">
                                    <div class="otpworks">
                                        <!-- |||||| FORM |||||| -->
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label for="">
                                                    Your Token
                                                </label>
                                                <input name="token" type="number" value="<?php if (isset($get_req_token)) {
                                                                                                echo $get_req_token;
                                                                                            } elseif (isset($getToken)) {
                                                                                                echo $getToken;
                                                                                            }
                                                                                            ?>" class="form-control field-inner-shadow mb-3" id="" placeholder="Token from Email " required <?php if (isset($get_req_token)) {
                                                                                                                                                                                                echo "disabled";
                                                                                                                                                                                            } ?>>

                                                <!-- ----------------------- password --------------------- -->
                                                <label for="">New Password </label>
                                                <div class="input-group mb-3" id="show_hide_password">

                                                    <input name="password" type="password" class="form-control field-inner-shadow" placeholder="Enter New Password" required>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary show_hide_password" type="button"><i class="fas fa-eye"></i></button>
                                                    </div>
                                                </div>

                                                <!-- ---------------------  Confirm Password ------------------  -->
                                                <label for="">Re-type New Password </label>
                                                <div class="input-group mb-3" id="show_hide_password">

                                                    <input name="new-password" type="password" class="form-control field-inner-shadow" placeholder="Enter Re-type New Password" required>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary show_hide_password" type="button"><i class="fas fa-eye"></i></button>
                                                    </div>
                                                </div>


                                                <div class="p-2"></div>
                                                <button name="reset-password" value="true" type="submit" class="form-control login ">Reset Password</button>
                                                <!-- <input type="submit" class="form-control login " value="Verify Your Email"> -->


                                                <div class="validation pt-3">
                                                    <!-- |||||||||||||||||||||||||||||||    VALIDATION   |||||||||||||||||||||||||||||| -->
                                                    <?php
                                                    if (isset($token_notFound)) {
                                                        echo $token_notFound;
                                                    }
                                                    if (isset($passwordNotMatched)) {
                                                        echo $passwordNotMatched;
                                                    }
                                                    ?>
                                                    <!-- |||||||||||||||||||||||||||||||    VALIDATION   |||||||||||||||||||||||||||||| -->
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                    <?php
                                    if (isset($hasPasswordReset)) {

                                    ?>

                                        <style>
                                            .otpworks {
                                                display: none;
                                            }
                                        </style>
                                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <center>
                                            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_9n1h4nww.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                                            <div class="text-white text-center bg-success p-2">
                                               Password Reset Succesfully
                                            </div>
                                            <div class="p-2"></div>

                                            <a class="btn center btn btn-primary" href="index.php">Back to Home</a>

                                        </center>
                                    <?php

                                    }

                                    ?>
                                </div>
                            </div>

                        </div>


                    </div>


                    <div class="col-md-2">

                    </div>
                </div>
            </div>
        </div>
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $(".show_hide_password").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("fa-eye-slash");
                    $('#show_hide_password i').removeClass("fa-eye");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("fa-eye-slash");
                    $('#show_hide_password i').addClass("fa-eye");
                }
            });
        });
    </script>

    <style>


    </style>
</body>

</html>