<?php
include 'connection.php';
require_once 'admin-session.php';
if (isset($_GET['id'])) {
    $approve_id = $_GET['id'];
    $sql = "UPDATE `admin_user` SET `status` = '1' WHERE `admin_user`.`SL` =$approve_id ";

    if (mysqli_query($con, $sql)) {
        header("location:admins.php");
    } else {
        echo mysqli_error($con);
    }
}
