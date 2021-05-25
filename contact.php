<?php
include 'connection.php';

?>

<!-- getting data from banned user  -->
<?php


if (isset($_REQUEST['uname'])) {
    $banned_user =  $_REQUEST['uname'];
    $admin_query = " SELECT * FROM `user` WHERE username LIKE '$banned_user' ";
    $result = mysqli_query($con, $admin_query);
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $userid = $row["id"];
            $username = $row["username"];
            $email = $row["email"];
            $nid = $row["nid"];
            $user_status = $row["status"];
            $profile_picture = $row["avater_image"];

            if (strlen($profile_picture) < 5) {
                $profile_picture = "avater.png";
            }
        }
    } else {
    }
    $criteria = "registered";
} else {
    $criteria = "Unregistered";
}

if (!isset($profile_picture)) {
    $profile_picture = "avater.png";
}

?>


<!doctype html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="76x76" href="images/site-icon-white.png" />
    <link rel="icon" type="image/png" href="images/site-icon-white.png" />
    <title>Contact/Support</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <style>
        .col_1 {
            background-image: url();
        }

        .header1 {
            box-shadow: 0px 0px 30px rgba(128, 128, 128, 0.356);
            height: 60px;
        }

        .single_author_avater_img {
            border-radius: 100px;
            border: 1px solid white;
            box-shadow: 0px 0px 5px grey;
        }

        * {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body>
    <div class="header1">
        <div class="container">


            <div class="row d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="index.php"><img src="images/logo-dark.png" alt="" height="60px"></a>

                </div>
                <div class="">
                    <a href="profile.php"><img class="single_author_avater_img" src="uploads/user__avater/<?php echo $profile_picture ?>" width="50px" height="50px" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="body">
        <div class="container-fluid">


            <div class="row ">
                <div class="col-md-12 col-sm-12 col-xl-6">
                    <div class="col_1">
                        <div class="container">
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_bp1bwvhv.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xl-6">
                    <div class="col_1">
                        <div class="container">
                            <div class="row pt-5 d-flex justify-content-between align-items-center">
                                <div class="col-md-12 col-sm-12 col-xl-6">
                                    <h3 class=" ">Contact/Support

                                    </h3>

                                </div>
                                <div class="col-md-12 col-sm-12 col-xl-6">
                                    <!-- inserting -->
                                    <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
                                    <?php

                                    if (isset($_REQUEST["id"])) {
                                        $ct_uid = $_REQUEST["id"];
                                        $ct_username = $_REQUEST["username"];
                                        $ct_email = $_REQUEST["email"];
                                        $ct_subject = $_REQUEST["subject"];
                                        $ct_mgs = $_REQUEST["mgs__discription"];





                                        $ct_sql = "INSERT INTO `reports` (`userid`, `username`, `subject`,`email`,`criteria`, `message`) VALUES ('$ct_uid', '$ct_username', '$ct_subject','$ct_email','$criteria', '$ct_mgs');";

                                        if (mysqli_query($con, $ct_sql)) {

                                    ?>
                                            <!-- html -->
                                            <div class="p-1 text-right text-white bg-success d-flex justify-content-between align-items-center">
                                                <lottie-player src="https://assets8.lottiefiles.com/datafiles/8UjWgBkqvEF5jNoFcXV4sdJ6PXpS6DwF7cK4tzpi/Check Mark Success/Check Mark Success Data.json" background="transparent" speed="1" style="width: 35px; height: 35px;" loop autoplay>
                                                </lottie-player>Message sent sccessfully
                                                &nbsp;
                                            </div>
                                            <!-- html -->
                                    <?php
                                        }
                                    }

                                    ?>





                                </div>


                            </div>
                            <hr>


                            <form action="" method="post">

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xl-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i></span>
                                            </div>
                                            <input name="id" type="text" class="form-control" placeholder="user ID" aria-label="Username" aria-describedby="basic-addon1" value="<?php if (isset($userid)) {
                                                                                                                                                                                        echo $userid;
                                                                                                                                                                                    } ?>">
                                        </div>

                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xl-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php if (isset($username)) {
                                                                                                                                                                                            echo $username;
                                                                                                                                                                                        } ?>">
                                        </div>

                                    </div>

                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input required name="email" type="email" class="form-control" placeholder="Email " aria-label="Username" aria-describedby="basic-addon1" value="<?php if (isset($email)) {
                                                                                                                                                                                            echo $email;
                                                                                                                                                                                        } ?>">
                                </div>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-exclamation-triangle"></i> </label>
                                    </div>
                                    <select name="subject" class="custom-select" id="inputGroupSelect01">
                                        <option value="No Subject">Choose a subject. . .</option>
                                        <option <?php if ($user_status == "banned") {
                                                    echo "selected";
                                                } ?> value="banned">I Got Banned</option>
                                        <option value="Feature Request">Recommanding to add a new feature</option>
                                        <option value="Bug Found">I found a BUG</option>
                                        <option value="Report a user">I have a complain against a user</option>
                                        <option value="others">Othes , i'll discribe bellow</option>
                                    </select>
                                </div>

                                <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

                                <textarea class="form-control" name="mgs__discription" id="editor2"></textarea>
                                <!-- <textarea name="news_descrip" id="editor2" rows="10"> </textarea> -->
                                <script>
                                    CKEDITOR.replace('editor2');
                                </script>
                                <div class="text-right pt-2">
                                    <button type="submit" class="btn btn-primary "><i class="fas fa-paper-plane"></i> Submit</button>

                                </div>


                            </form>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>