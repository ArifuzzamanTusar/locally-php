<?php
require_once('connection.php');
session_start();

if (isset($_POST['login'])) {
    $login_admin = $_POST['admin_username'];
    $login_pass = $_POST['password'];
    $login_pass_md= md5($login_pass);
    
    

    // $query = "SELECT *  FROM `customer` WHERE `username` LIKE '$test_admin' AND `password` LIKE '$test_pass'";
    // $result= mysqli_query($conn,$sql);

    // Empty Validation
    if (empty($login_admin) || empty($login_pass)) {

        header("location:login.php?Empty= Fields cannot be empty");
    }
    
    
    // check
    else {
        $query = "select username ,password from `admin_user` where 	username ='" .$login_admin . "' and password='" .$login_pass_md. "'";

        $result = mysqli_query($con, $query);

        if (mysqli_fetch_assoc($result)) {
            $_SESSION['admin_username_session'] = $login_admin;
            header("location:index.php");
        } else {
            header("location:login.php?Invalid= Username or password wrong");
        }
    }
} else {
    echo 'Not Working Now Guys';
}
