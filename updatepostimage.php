<?php
include 'connection.php';
require_once 'login-session.php';
if (isset($_POST["update_post_image"])) {
    // getting all mf things 



    $post_id = $_REQUEST["post_id"];

    // files 

    $up_post_img = rand(1000, 10000) . "-" . $_FILES["post_img"]["name"];

    #temporary file name to store file
    $tname_avater = $_FILES["post_img"]["tmp_name"];

    #upload directory path
    $uploads_dir_avater = 'uploads/post__image';

    #TO move the uploaded file to specific location
    move_uploaded_file($tname_avater, $uploads_dir_avater . '/' . $up_post_img);
    if (strlen($up_post_img) < 6) {
        $up_post_img = $db_up_post_img;
    }




    $sql = "UPDATE `posts` SET `image` = '$up_post_img' WHERE `posts`.`id` =$post_id;";


    if (mysqli_query($con, $sql)) {

        header("location:manage-post.php");
    } else {
        $topic_up_failed = "Failed";
        echo '<div class="alert-light text-danger text-center py-3">' . $topic_up_failed . '</div>';
        echo mysqli_error($con);
    }
}
