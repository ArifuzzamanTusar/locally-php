<?php
include 'connection.php';

if (isset($_POST["add_comment"])) {
    $comment_author_id = $_REQUEST["ca_id"];
    $comment_author_username = $_REQUEST["ca_user"];
    $comment_author_email = $_REQUEST["ca_auth_email"];
    $post_author_id = $_REQUEST["po_uid"];
    $post_id = $_REQUEST["po_id"];
    $comment_content= $_REQUEST["content"];

    $comment_SQL= "INSERT INTO `comments` (`comment_author_id`, `comment_user`, `comment_author_email`,  `comment_content`,  `post_user_id`, `post_ID`) 
    VALUES ('$comment_author_id', '$comment_author_username', '$comment_author_email',  '$comment_content', '$post_author_id', '$post_id');";
    echo $comment_SQL;
    if (mysqli_query($con,$comment_SQL)) {

        $comment_notice_SQL="INSERT INTO `notification` (`post_id`, `post_userid`, `act_userid`,`act_username`, `type`) VALUES ('$post_id', '$post_author_id', '$comment_author_id','$comment_author_username', 'commented');";
        if (mysqli_query($con,$comment_notice_SQL)){
            header("location:post.php?id=$post_id#comment");

        }
        
    }
}
