<?php
include 'connection.php';

session_start();
if (isset($_SESSION['username_session'])) {
    $up_username =  $_SESSION['username_session'];

    if (isset($_POST["update_profile"])) {
        // getting all mf things 

        $up_fname = $_REQUEST["firstname"];
        $up_lname = $_REQUEST["lastname"];
        $up_email = $_REQUEST["email"];
        $up_phone = $_REQUEST["phone"];
        $up_bio = $_REQUEST["bio"];
        $up_city = $_REQUEST["city"];
        $up_nid = $_REQUEST["nid"];
        $up_birtday = $_REQUEST["birthday"];
        $up_gender = $_REQUEST["gender"];
        $up_facebook = $_REQUEST["facebook"];
        $up_website = $_REQUEST["website"];
        $up_linkedin = $_REQUEST["linkedin"];
        $up_twitter = $_REQUEST["twitter"];


        $up_company = $_REQUEST["company"];
        $up_position = $_REQUEST["position"];

        $db_up_profile_picture = $_REQUEST["db_avater_image"];
        echo $db_up_profile_picture;

        $db_up_cover_picture = $_REQUEST["db_cover_image"];
        echo $db_up_cover_picture;

        // files 

        $up_profile_picture = rand(1000, 10000) . "-" . $_FILES["avater_image"]["name"];
        $up_cover_picture = rand(1000, 10000) . "-" . $_FILES["cover_image"]["name"];

        #temporary file name to store file
        $tname_avater = $_FILES["avater_image"]["tmp_name"];
        $tname_cover = $_FILES["cover_image"]["tmp_name"];

        #upload directory path
        $uploads_dir_avater = 'uploads/user__avater';
        $uploads_dir_cover = 'uploads/user__cover';

        #TO move the uploaded file to specific location
        move_uploaded_file($tname_avater, $uploads_dir_avater . '/' . $up_profile_picture);
        move_uploaded_file($tname_cover, $uploads_dir_cover . '/' . $up_cover_picture);


        if (strlen($up_profile_picture) < 6) {
            $up_profile_picture = $db_up_profile_picture;
        }
        if (strlen($up_cover_picture) < 6) {
            $up_cover_picture = $db_up_cover_picture;
        }




        ///Update Process
        $update_query = "UPDATE `user` SET 
        `firstname` = '$up_fname', `lastname` = '$up_lname', `email` = '$up_email', 
        `phone` = '$up_phone', `bio` = '$up_bio', `city` = '$up_city', `nid` = '$up_nid', 
        `birthday` = '$up_birtday', `gender` = '$up_gender', `company` = '$up_company', `position` = '$up_position', 
        `facebook` = '$up_facebook', `twitter` = '$up_twitter', `website` = '$up_website', `linkedin` = '$up_linkedin', 
        `avater_image` = '$up_profile_picture', `cover_image` = '$up_cover_picture' 
        WHERE `user`.`username` LIKE '$up_username';";

        if (mysqli_query($con, $update_query)) {
           
            header("location:profile.php");
        }
        else
        {
            echo mysqli_error($con);
        }
    }
} else {
    echo "Vai onek hoise , nije login kore try koren";
}
