

<?php
//includes
include 'connection.php';
// $logged_user = "null";
require_once('login-session.php');




?>





<!doctype html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="76x76" href="images/site-icon-white.png" />
    <link rel="icon" type="image/png" href="images/site-icon-white.png" />
    <title>LOGIN</title>
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
                                    <!-- |||||| FORM |||||| -->
                                    <form action="login-process.php" method="POST">
                                        <div class="form-group">
                                            <label for="">
                                                OTP verifition for <i> <?php echo $email ?></i>
                                                <a href="logout.php?logout">(Change account)</a>
                                            </label>
                                            <input name="username" type="text" class="form-control field-inner-shadow" id="" placeholder="OTP here">

                                            <div class="p-2"></div>
                                            <button name="login" type="submit" class="form-control login ">Verify Your Email</button>



                                            <div class="validation pt-3">
                                                <!-- |||||||||||||||||||||||||||||||    VALIDATION   |||||||||||||||||||||||||||||| -->
                                                <?php
                                                if (@$_GET['Empty'] == true) {
                                                ?>
                                                    <div class="alert-danger text-danger text-center"><?php echo $_GET['Empty'] ?></div>
                                                <?php
                                                }
                                                ?>


                                                <?php
                                                if (@$_GET['Invalid'] == true) {
                                                ?>
                                                    <div class="alert-danger text-danger text-center"><?php echo $_GET['Invalid'] ?></div>
                                                <?php
                                                }
                                                ?>
                                                <!-- |||||||||||||||||||||||||||||||    VALIDATION   |||||||||||||||||||||||||||||| -->
                                            </div>

                                        </div>
                                    </form>

                                    <div class="form-check text-center pt-2">
                                        <p>OTP Expired? </p>
                                        <form action="resend-otp-process.php" method="post">
                                            <input type="text" name="re-email" value="<?php echo $email ?>" hidden>
                                            <input name="resend-otp" style="border: none;" type="submit" value="Resend Verification Code">
                                        </form>
                                        <?php
                                        if (isset($_GET['otp_resend_success'])) {
                                            echo '<div class="mt-2 alert-success"> OTP has been sent to <br>' . $email . ' </div>';
                                        }
                                        ?>


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