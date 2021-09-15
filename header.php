<?php
//includes
include 'connection.php';
// $logged_user = "null";
require_once('login-session.php');

?>


<?php
if ($page_id == 1) {
    $class1 = "active";
}
if ($page_id == 2) {
    $class2 = "active";
}
if ($page_id == 3) {
    $class3 = "active";
}
if ($page_id == 4) {
    $class4 = "active";
}
?>
<!doctype html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="76x76" href="images/site-icon-white.png" />
    <link rel="icon" type="image/png" href="images/site-icon-white.png" />
    <title> <?php echo $page_tittle ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- theme style -->
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
  

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- matarial-icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- font aweasome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/responsive-main.css?<?php echo time();?>">
</head>

<body>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-3 d-flex justify-content-start">
                    <div class="site-logo d-flex justify-content-start ">
                        <img class="desktop-logo" src="images/logo-light.png" height="40px" alt="logo">
                        <img class="mobile-logo" src="images/site-icon-white.png" height="30px" alt="logo">
                    </div>
                </div>

                <div class="col-6">
                    <div class="nav-menu">


                        <div class="nav-items icon-bg <?php echo $class1 ?>">
                            <a data-toggle="tooltip" data-placement="bottom" title="Home" href="index.php"><i class="material-icons icon">home</i></a>

                        </div>
                        <div class="nav-items icon-bg <?php echo $class2 ?>">
                            <a data-toggle="tooltip" data-placement="bottom" title="Topics" href="topic.php"><i class="material-icons icon">category</i></a>

                        </div>
                        <div class="nav-items icon-bg <?php echo $class3 ?>">
                            <a data-toggle="tooltip" data-placement="bottom" title="Create Posts" href="create.php"><i class="material-icons icon">create</i></a>

                        </div>


                    </div>

                </div>
                <div class="col-3">
                    <div class="d-flex float-right icon-bg <?php echo $class4 ?>">
                        <a href="profile.php"> <i class="material-icons icon">account_circle</i> </a>

                    </div>

                </div>
            </div>
        </div>
    </div>