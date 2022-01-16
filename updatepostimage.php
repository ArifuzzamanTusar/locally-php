<?php
include 'connection.php';
require_once 'login-session.php';

include "cloudinary-config.php";
if (isset($_POST["update_post_image"])) {
    // getting all mf things 



    $post_id = $_REQUEST["post_id"];

    // files 
    // ********* CLOUDINARY ***************

    $imageType = ["jpg", "png", "jpeg", "gif"];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["post-img"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["post-img"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists

    // Check file size exceeds from 5mb
    if ($_FILES["post-img"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    //check file extension
    foreach ($imageType as $type) {
        if (strcasecmp($type, $imageFileType) == 0);
        $uploadok = 1;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {

        $image_properties = \Cloudinary\Uploader::upload($_FILES["post-img"]["tmp_name"], array("upload_preset" => "locally"));
        $image_url = $image_properties['secure_url'];
        // echo ('           ' . "<a href=\"$image_url\" target=\"_blank\"> View uploaded image </a>");
    }






    // *********** CLOUDINARY **************** 




    $sql = "UPDATE `posts` SET `image` = '$image_url' WHERE `posts`.`id` =$post_id;";


    if (mysqli_query($con, $sql)) {

        header("location:manage-post.php");
    } else {
        $topic_up_failed = "Failed";
        echo '<div class="alert-light text-danger text-center py-3">' . $topic_up_failed . '</div>';
        echo mysqli_error($con);
    }
}
