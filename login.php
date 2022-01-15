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
                    <div class="col-sm-5 col-md-5">
                        <div class="p-2"></div>
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
                                            <label for=""></label>
                                            <input name="username" type="text" class="form-control field-inner-shadow" id="" placeholder="Username">

                                            <label for=""></label>
                                            <input name="password" type="password" class="form-control field-inner-shadow" id="" placeholder="Password">                                   
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label pt-3 pb-3">
                                                    <input class="form-check-input" type="checkbox" name="" id="" value="checkedValue"> Remember Me
                                                </label>
                                            </div>




                                            <button name="login" type="submit" class="form-control login ">LOGIN</button>

                                            <div class="row">
                                                <div class="col-6 pt-3">
                                                    <div class="text-left">
                                                        <a href="forgot-password.php">Forgot Password?</a>
                                                    </div>
                                                </div>
                                                <div class="col-6 pt-3">
                                                    <div class=" text-right">
                                                        <a href="register.php">Create Account</a>
                                                    </div>
                                                </div>

                                            </div>
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
                                </div>
                            </div>

                        </div>
                        <div class="p-2"></div>

                    </div>


                    <div class="col-sm-7 col-md-7">
                        <div class="p-2"></div>
                        <div class="learn text-right">
                            <h2>Learn About <span class="primary">Locally</span> </h2>

                            <div class="image">
                                <img src="images/connected.png" width="60%" alt="">
                            </div>
                            <p>
                                Locally is a user’s local based forums which make peoples everyday easier to move this forum will create
                                an informative, Communicative, helpful, co-operative environment which can easily improve lifestyle.
                                This environment will provide users to spread area-based information, services, news, collaborations
                                according to well organized topics & tags.

                            </p>
                            <a name="" id="" class="btn learn-more" href="about" role="button">Learn More</a>
                        </div>
                        <div class="p-2"></div>
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