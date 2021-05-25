<?php
require_once('connection.php');
session_start();

if (isset($_POST['login'])) {
    $login_username = $_POST['username'];
    $login_pass = $_POST['password'];
    $login_pass_md = md5($login_pass);
    

    // Empty Validation
    if (empty($login_username) || empty($login_pass)) {

        header("location:login.php?Empty= Fields cannot be empty");
    }


    // check
    else {
        $query = "select `username` , `password` from `user` where 	`username` ='" . $login_username . "' and `password` ='" . $login_pass_md . "'";

        $result = mysqli_query($con, $query);

        if (mysqli_fetch_assoc($result)) {
            $_SESSION['username_session'] = $login_username;
            header("location:index.php");
        } else {
            header("location:login.php?Invalid= Username or password wrong");
        }
    }
} else {
    echo 'Not Working Now Guys';
}
