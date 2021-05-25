<?php
include 'connection.php';
require_once 'admin-session.php';
if (isset($_GET['id'])) {
    $approve_id = $_GET['id'];
    $sql = "UPDATE `user` SET `status` = 'approved' WHERE `user`.`id` = $approve_id ";

    if (mysqli_query($con, $sql)) {

        $topic_up_ok = "Topic Sucessfully Deleted";
        header("location:pending-users.php");
    } else {
        $topic_up_failed = "Failed";
        echo '<div class="alert-light text-danger text-center py-3">' . $topic_up_failed . '</div>';
        echo mysqli_error($con);
    }
}
