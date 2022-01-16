<?php include 'connection.php'; 
include 'email-config.php';?>
<!-- 
    
INSERT INTO `user` (`id`, `username`, `First name`, `Last Name`, `email`, `phone`, `bio`, `city`, `nid`, `birthday`, `gender`, `facebook`, `twitter`, `website`, `linkedin`, `password`) 
VALUES (NULL, 'tusar', 'Arifuzzaman', 'Tusar', 'arifuzzamantusar50@ggmail.com', '', '', '', '', '', '', '', '', '', '', '1e48c4420b7073bc11916c6c1de226bb'); 

-->

<!doctype html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="76x76" href="images/site-icon-white.png" />
    <link rel="icon" type="image/png" href="images/site-icon-white.png" />
    <title>REGISTER</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fa  -->
    <script src="https://kit.fontawesome.com/a559834955.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <script src="js/geolocation.js"></script>

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
                                    <div class="php-works text-danger">

                                        <!-- validation -->
                                        <!-- |||||||||||||||||||||||||||||| -->



                                        <?php
                                        if (isset($_POST['request_for_user'])) {

                                            $new_user = $_REQUEST['username'];
                                            $new_email = $_REQUEST['email'];
                                            $new_nid = $_REQUEST['nid'];
                                            $new_city = $_REQUEST['city'];

                                            $new_pass = $_REQUEST['password'];
                                            $md5_new_pass = md5($new_pass);
                                            $new_status = "pending";
                                            $ev_status = "unverified";





                                            // ||||||||||| Username Duplicate Validation ||||||||||
                                            if ($result = mysqli_query($con, "SELECT *  FROM `user` WHERE `username` LIKE '$new_user'")) {
                                                /* determine number of rows result set  */
                                                $row_cnt = mysqli_num_rows($result);
                                            }
                                            if ($row_cnt > 0) {
                                                $dbex_username = "username exists";
                                            }

                                            // ||||||||||| NID Duplicate Validation ||||||||||
                                            if ($result = mysqli_query($con, "SELECT *  FROM `user` WHERE `nid` LIKE '$new_nid'")) {
                                                /* determine number of rows result set  nid*/
                                                $row_cnt = mysqli_num_rows($result);
                                            }
                                            if ($row_cnt > 0) {
                                                $dbex_nid = "You have already registered";
                                            }
                                            // ---------------------------


                                            if (empty($new_user) || empty($new_email) || empty($new_pass) || empty($new_nid) || empty($new_city)) {

                                                $primary_error = "Please check errors!";

                                                if (empty($new_email)) {

                                                    $empty_email = "Email cant be empty";
                                                }
                                                if (empty($new_user)) {

                                                    $empty_user = "Username cant be empty";
                                                }
                                                if (empty($new_pass)) {

                                                    $empty_pass = "Password cant be empty";
                                                }
                                                if (empty($new_nid)) {

                                                    $empty_nid = "Nid cant be empty";
                                                }
                                                if (empty($new_city)) {

                                                    $empty_city = "City cant be empty";
                                                }
                                            } else {
                                                // inserting 
                                                $new_user_query = "INSERT INTO `user` (`username`,`email`, `nid`,`city`,`password`,`status`,`ev_status`) 
                                                                     VALUES ('$new_user', '$new_email','$new_nid','$new_city', '$md5_new_pass','$new_status','$ev_status');";
                                                if (mysqli_query($con, $new_user_query)) {
                                                    // JODI registraton hoy 
                                                    $email_receiver = $new_email;
                                                    $OTP = rand(100000, 999999);
                                                    $email_body = '
                                                    <center>
                                                        <div style="background:#F5EEDC; padding:80px 10px;">
                                                            <div style="width:600px; border-radius:10px;">
                                                
                                                                <div style="background:#363062; padding:20px 0px;">
                                                                    <img width="200px" src="https://res.cloudinary.com/tusar/image/upload/v1638641935/locally/logo-dark_b7rzfx.png" alt="locally Logo">
                                                                </div>
                                                                <div style="background:#ffffff; padding:20px 20px;">
                                                                    <h2>Thank you for registarting at Locally </h2>
                                                                    <p>Use this Code bellow to verify your email, It will be expired soon </p>
                                                                    <h1 style="color:#363062;">' . $OTP . '</h1>
                                                                    <br>
                                                                    <p>or, click on the button to verify your email</p>
                                                                    <br><br>
                                                                    <a style="padding: 20px; background:#363062; color:#ffffff; text-decoration:none" href="' . $_SERVER['HTTP_HOST'] . '/verify-email.php?otp=' . $OTP . ' ">VERIFY NOW</a>
                                                                    <br><br>
                                                                </div>
                                                                <div style="background:#363062;  padding:10px 0px;">
                                                                    <p style="color:white;"> &copy; all right reseved Locally</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </center>
                                                    
                                                    ';
                                                    $mail->addAddress($email_receiver);     //Add a recipient

                                                    //Content
                                                    $mail->isHTML(true);                                  //Set email format to HTML
                                                    $mail->Subject = 'Verify Your Email';
                                                    $mail->Body    = $email_body;
                                                    $mail->AltBody = 'Welcome To Locally! Your OTP is: ' . $OTP . '.  Verify your Email Now';

                                                    // $mail->send();
                                                    if ($mail->send()) {
                                                        $update_query = "UPDATE `user` SET  `last_otp_code` = '$OTP' WHERE `user`.`email` LIKE '$email_receiver';";
                                                        if (mysqli_query($con, $update_query)) {
                                                            ?>
                                                            <div class="alert-light text-success text-center p-3">Registration Succesful. Please login now</div>
                                                            <?php 
                                                        
                                                        }
                                                    }

                                                  
                                                   

                                                } else {
                                                    $product_up_failed = "Failed";
                                                    echo '<div class="alert-light text-danger text-center py-3">' . $product_up_failed . '</div>';
                                                    echo mysqli_error($con);
                                                }
                                            }
                                        }

                                        ?>

                                        <!-- end -->

                                        <!-- header error  -->
                                        <?php
                                        if (isset($primary_error)) {

                                        ?>
                                            <div class="text-light p-2 bg-danger">

                                                <?php echo $primary_error; ?>

                                            </div>
                                        <?php
                                        }
                                        ?>

                                        <!-- city selection  -->
                                        <?php

                                        // check cookie 
                                        if (isset($_COOKIE["geoCity"])) {
                                            $gpsCity = $_COOKIE["geoCity"];
                                            $gpsAddress = $_COOKIE["geoFormattedAddress"];
                                        } else {
                                        }
                                        if (isset($new_city)) {
                                            $definedCity = $new_city;
                                        } elseif (isset($gpsCity)) {
                                            $definedCity = $gpsCity;
                                        } else {
                                            $definedCity = "Select A City";
                                        }


                                        ?>

                                        <!-- header error ends -->


                                        <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

                                    </div>
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label for=""></label>
                                            <div class="input-group">
                                                <select class="form-control" name="city" id="">
                                                    <!-- defined  -->
                                                    <option value="<?php if (isset($definedCity)) {
                                                                        echo $definedCity;
                                                                    } else {
                                                                        echo "not selected";
                                                                    }  ?>" selected><?php if (isset($definedCity)) {
                                                                                        echo $definedCity;
                                                                                    } else {
                                                                                        echo "Select A city";
                                                                                    } ?></option>

                                                    <?php

                                                    $query = "SELECT * FROM `districts` ORDER BY `districts`.`name` ASC";
                                                    $result = mysqli_query($con, $query);
                                                    if (mysqli_num_rows($result) > 0) {

                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            // $dist_id = $row["dist_id"];
                                                            $dist_name = $row["name"];
                                                            $dist_bn_name = $row["bn_name"];
                                                    ?>

                                                            <option value="<?php echo $dist_name ?>"> <?php echo $dist_name ?></option>



                                                    <?php }
                                                    }
                                                    ?>

                                                </select>
                                                <div class="input-group-append">
                                                    <button onclick="refresh()" title="Get Your Location" class="btn btn-secondary" type="button"><i class="fas fa-map-marker-alt"></i></button>
                                                </div>
                                            </div>
                                            <!-- suggestion -->
                                            <div class="text-success p-2"><i class="fas fa-map-marker-alt"></i> <?php if (isset($gpsAddress)) {
                                                                                                                    echo $gpsAddress;
                                                                                                                } ?></div>


                                            <!-- ------------------------------------------------------------------- -->
                                            <label for=""></label>
                                            <input type="text" class="form-control field-inner-shadow" name="username" id="" placeholder="Username" value="<?php if (isset($new_user)) {
                                                                                                                                                                echo $new_user;
                                                                                                                                                            } ?>">
                                            <!-- Empty Validation  -->
                                            <div class="text-danger">
                                                <?php if (isset($empty_user)) {
                                                    echo $empty_user;
                                                }
                                                ?>
                                            </div>

                                            <!-- Duplicate  -->


                                            <div class="text-danger">
                                                <?php if (isset($dbex_username)) {
                                                    echo $dbex_username;
                                                }
                                                ?>
                                            </div>



                                            <label for=""></label>
                                            <input type="email" class="form-control field-inner-shadow" name="email" id="" placeholder="Email" value="<?php if (isset($new_email)) {
                                                                                                                                                            echo $new_email;
                                                                                                                                                        } ?>">
                                            <!-- Empty Validation  -->
                                            <div class="text-danger">
                                                <?php if (isset($empty_email)) {
                                                    echo $empty_email;
                                                }
                                                ?>
                                            </div>
                                            <label for=""></label>
                                            <input type="number" class="form-control field-inner-shadow" name="nid" id="" placeholder="Nid Number" value="<?php if (isset($new_nid)) {
                                                                                                                                                                echo $new_nid;
                                                                                                                                                            } ?>">
                                            <!-- Empty Validation  -->
                                            <div class="text-danger">
                                                <?php if (isset($empty_nid)) {
                                                    echo $empty_nid;
                                                }
                                                ?>
                                            </div>
                                            <!-- Duplicate  -->


                                            <div class="text-danger">
                                                <?php if (isset($dbex_nid)) {
                                                    echo $dbex_nid;
                                                }
                                                ?>
                                            </div>



                                            <!-- Duplicate  -->


                                            <div class="text-danger">
                                                <?php if (isset($empty_city)) {
                                                    echo $empty_city;
                                                }
                                                ?>
                                            </div>

                                            <label for=""></label>
                                            <input type="password" class="form-control field-inner-shadow" name="password" id="" placeholder="Password" value="<?php if (isset($new_pass)) {
                                                                                                                                                                    echo $new_pass;
                                                                                                                                                                } ?>">

                                            <!-- Empty Validation  -->
                                            <div class="text-danger">
                                                <?php if (isset($empty_pass)) {
                                                    echo $empty_pass;
                                                }
                                                ?>
                                            </div>
                                            <label for=""></label>

                                            <button name="request_for_user" type="submit" class="form-control login ">REGISTER</button>

                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 pt-3">
                                                    <div class="form-check">

                                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                                        Remember Login

                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 pt-3">
                                                    <div class="form-check text-right">
                                                        <a href="login.php">Already have an account?</a>
                                                    </div>
                                                </div>
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