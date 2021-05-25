<?php 
include 'connection.php';


if (isset($_POST['add_admin'])) {
    $new_admin_user = $_REQUEST["new_user"];

    $new_admin_id = $new_admin_user . rand(100, 100);
    $new_admin_email = $_REQUEST["new_email"];
    $new_admin_pass = $_REQUEST["new_pass"];
    $new_admin_md5_pass = md5($new_admin_pass);



    $add_sql = "INSERT INTO `admin_user` (`user_id`, `username`,  `email`, `password`, `role`, `status`, `phone`) 
            VALUES ('$new_admin_id', '$new_admin_user', '$new_admin_email', '$new_admin_md5_pass', 'Admin', '1', 'Not Set');";

    

    if (mysqli_query($con, $add_sql)) {
        header("location:admins.php");
        
        
    }
    else{
        mysqli_error($con);
    }
}


?>