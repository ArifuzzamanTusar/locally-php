<?php
	include 'connection.php';
	
	if (isset($_POST['showlike'])){
		$id = $_POST['id'];
		
		$query5=mysqli_query($con,"SELECT username FROM `appreciation` WHERE postid = '$id' ORDER BY likeid DESC LIMIT 1");
		if (mysqli_num_rows($query5) > 0) {
			while ($row = mysqli_fetch_assoc($query5)) {
			echo $row["username"]." and ";
			}
		}
		$query2=mysqli_query($con,"select * from `appreciation` where postid='$id'");
		echo mysqli_num_rows($query2)." others";	
	}
?>

