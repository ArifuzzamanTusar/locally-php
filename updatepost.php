<?php
include 'connection.php';
require_once 'login-session.php';
if (isset($_POST["update_post"])) {
    // getting all mf things 


    $post_disc = $_REQUEST["post__discription"];
    $post_id = $_REQUEST["post_id"];

 

    $sql = "UPDATE `posts` SET `disc` = '$post_disc' WHERE `posts`.`id` =$post_id;";


    if (mysqli_query($con, $sql)) {

        header("location:manage-post.php");
    } else {
        $topic_up_failed = "Failed";
        echo '<div class="alert-light text-danger text-center py-3">' . $topic_up_failed . '</div>';
        echo mysqli_error($con);
    }
}
