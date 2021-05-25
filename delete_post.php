<?php
include 'connection.php';
require_once 'login-session.php';
if (isset($_GET['id'])) {
    $del_id = $_GET['id'];
    $sql = "DELETE FROM `posts` WHERE `posts`.`id` = $del_id ";

    if (mysqli_query($con, $sql)) {

        $topic_up_ok = "Topic Sucessfully Deleted";
        header("location:manage-post.php");
    } else {
        $topic_up_failed = "Failed";
        echo '<div class="alert-light text-danger text-center py-3">' . $topic_up_failed . '</div>';
        echo mysqli_error($con);
    }
}
