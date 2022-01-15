<?php
//includes
include 'connection.php';
// $logged_user = "null";
include 'email-config.php';

// get request token 


if (isset($_POST['forgot-password'])) {
    $new_email = $_REQUEST['email'];

    // check avaibility 
    if ($result = mysqli_query($con, "SELECT *  FROM `user` WHERE `email` LIKE '$new_email'")) {
        /* determine number of rows result set  */
        $row_cnt = mysqli_num_rows($result);
    }
    if ($row_cnt > 0) {

        $OTP = rand(100000000, 999999999);
        $email_body = '
        <center>
            <div style="background:#F5EEDC; padding:80px 10px;">
                <div style="width:600px; border-radius:10px;">
    
                    <div style="background:#363062; padding:20px 0px;">
                        <img width="200px" src="https://res.cloudinary.com/tusar/image/upload/v1638641935/locally/logo-dark_b7rzfx.png" alt="locally Logo">
                    </div>
                    <div style="background:#ffffff; padding:20px 20px;">
                        <h2>You have request for password Reset</h2>
                        <p>Use this Code bellow to Reset your Password, It will be expired soon </p>
                        <h1 style="color:#363062;">' . $OTP . '</h1>
                        <br>
                        <p>or, click on the button to Continue</p>
                        <br><br>
                        <a style="padding: 20px; background:#363062; color:#ffffff; text-decoration:none" href="' . $_SERVER['HTTP_HOST'] . '/reset-password.php?token=' . $OTP . ' ">RESET PASSWORD NOW</a>
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
        $mail->Subject = 'RESET PASSWORD';
        $mail->Body    = $email_body;
        $mail->AltBody = 'Your request has been recieved! Your Token is: ' . $OTP . '.  Reset password now';



        if ($mail->send()) {
            $update_query = "UPDATE `user` SET  `last_otp_code` = '$OTP' WHERE `user`.`email` LIKE '$new_email';";
            if (mysqli_query($con, $update_query)) {
                $hasOTPsent = "true";
            }
        }
    } else {
        $email_notFound = '<div class="bg-danger text-white p-2">Sorry, ' . $new_email . ' not found</div>';
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
                                                    Enter your Email Address
                                                </label>
                                                <input name="email" type="email" class="form-control field-inner-shadow" id="" placeholder="Your Email Address" required>

                                                <div class="p-2"></div>
                                                <button name="forgot-password" value="true" type="submit" class="form-control login ">Send Password Reset Token</button>
                                                <!-- <input type="submit" class="form-control login " value="Verify Your Email"> -->


                                                <div class="validation pt-3">
                                                    <!-- |||||||||||||||||||||||||||||||    VALIDATION   |||||||||||||||||||||||||||||| -->
                                                    <?php if (isset($email_notFound)) {
                                                        echo $email_notFound;
                                                    }
                                                    if (isset($hasOTPsent)) {

                                                    ?>
                                                        
                                                        <div class="p-3 bg-success text-white">A Password reset token has been sent your email. please check email</div>
                                                        <div class="pt-2 text-center">
                                                            <a class="text-center" href="reset-password.php">Enter Code mannually</a>
                                                        </div>
                                                    <?php

                                                    }

                                                    ?>
                                                    <!-- |||||||||||||||||||||||||||||||    VALIDATION   |||||||||||||||||||||||||||||| -->
                                                </div>

                                            </div>
                                        </form>
                                    </div>
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
</body>

</html>