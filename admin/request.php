<?php

include 'connection.php';

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
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
    <div class="login-body" style="background-image: url(../images/login-bg.jpg);">
        <div class="container">
            <div class="center-widget">
                <div class="widget login-widget">
                    <!-- validation -->
                    <!-- |||||||||||||||||||||||||||||| -->



                    <?php
                    if (isset($_POST['request_for_admin'])) {

                        $new_user = $_REQUEST['n_user'];
                        $new_user_id= $new_user.rand(1000, 10000);
                        $new_email = $_REQUEST['n_email'];
                        $new_pass = $_REQUEST['n_password'];
                        $md5_new_pass= md5($new_pass);
                        $new_role = "";
                        $new_status = "0";

                        //    getting row number
                        if ($result = mysqli_query($con, "SELECT *  FROM `admin_user` WHERE `username` LIKE '$new_user'")) {
                            /* determine number of rows result set */
                            $row_cnt = mysqli_num_rows($result);        
                        }
                        // duplicate validation 
                        if ($row_cnt>0) {
                            $dbex_username="username exists";
                        }
                        if (empty($new_user) || empty($new_email) || empty($new_pass)) {

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
                            
                        }
                        else{
                            // inserting 
                            $new_admin_query="INSERT INTO `admin_user` (`user_id`, `username`,  `email`, `password`, `role`, `status`) 
                            VALUES ('$new_user_id', '$new_user', '$new_email', '$md5_new_pass', 'guest', '0');";
                            if (mysqli_query($con, $new_admin_query)) {

                                $product_up_ok = "Admin Request Sent";
                                echo '<div class="alert-light text-success text-center py-3">' . $product_up_ok . '</div>';
                                // header("location:manage-topic.php");
                    
                            } else {
                                $product_up_failed = "Failed";
                                echo '<div class="alert-light text-danger text-center py-3">' . $product_up_failed . '</div>';
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

                    <!-- header error ends -->
                    <form action="" method="POST">
                        <div class="form-group">

                            <label for=""></label>
                            <input type="text" class="form-control field-inner-shadow" name="n_user" id="" placeholder="UserName" value="<?php if (isset($new_user)) {
                                                                                                                                                echo $new_user;
                                                                                                                                            } ?>">
                            <!-- validation  -->
                            <div class="text-danger">
                                <?php if (isset($empty_user)) {
                                    echo $empty_user;
                                }
                                ?>
                                <?php if (isset($dbex_username)) {
                                    echo$dbex_username;
                                }
                                ?>
                            </div>




                            <label for=""></label>
                            <input type="email" class="form-control field-inner-shadow" name="n_email" id="" placeholder="Email" value="<?php if (isset($new_email)) {
                                                                                                                                            echo $new_email;
                                                                                                                                        } ?>">
                            <!-- validation  -->
                            <div class="text-danger">
                                <?php if (isset($empty_email)) {
                                    echo $empty_email;
                                }
                                ?>
                            </div>


                            <label for=""></label>
                            <input type="password" class="form-control field-inner-shadow" name="n_password" id="" placeholder="Password" value="<?php if (isset($new_pass)) {
                                                                                                                                                        echo $new_pass;
                                                                                                                                                    } ?>">
                            <!-- validation  -->
                            <div class="text-danger">
                                <?php if (isset($empty_pass)) {
                                    echo $empty_pass;
                                }
                                ?>
                            </div>

                            <label for=""></label>
                            <button type="submit" name="request_for_admin" class="form-control login ">REQUEST FOR ADMIN</button>

                            <div class="row">
                                <div class="col-md-6 col-sm-6 pt-3">
                                    <!-- <div class="form-check">

                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                        Remember Login

                                    </div> -->
                                </div>
                                <div class="col-md-6 col-sm-6 pt-3">
                                    <div class="form-check text-right">
                                        <a href="login.php">Already a admin</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                    <!-- signup process  -->

                </div>

                <!-- -------------------------- -->






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