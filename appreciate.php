<?php
include 'connection.php';
require_once 'login-session.php';

if (isset($_POST['like'])) {

	$id = $_POST['id'];
	// getting post authors id 
	$getpostAuthor_ID = mysqli_query($con, "SELECT * FROM `posts` WHERE `id` = $id");
	if (mysqli_num_rows($getpostAuthor_ID) > 0) {

		while ($row = mysqli_fetch_assoc($getpostAuthor_ID)) {
			
			$post_author_id = $row["author_id"];
		}
	}


	// ||||||||||||||||||||

	$query = mysqli_query($con, "select * from `appreciation` where postid='$id' and userid='" . $userid . "'") or die(mysqli_error($conn));

	if (mysqli_num_rows($query) > 0) {
		mysqli_query($con, "delete from `appreciation` where userid='" . $userid . "' and postid='$id'");
	} else {
		mysqli_query($con, "insert into `appreciation` (userid,postid,username) values ('" . $userid . "', '$id','$username' )");


		$like_notice_SQL = "INSERT INTO `notification` (`post_id`, `post_userid`, `act_userid`,`act_username`, `type`) 
		VALUES ('$id', '$post_author_id', '$userid','$username', 'appreciated');";
		mysqli_query($con, $like_notice_SQL);
	}
}
