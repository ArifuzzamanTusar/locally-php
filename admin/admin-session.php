<?php
    session_start();

    if(isset($_SESSION['admin_username_session']))
    {

        $logged_admin_user=  $_SESSION['admin_username_session'];

        include "connection.php";
        $admin_query = " SELECT * FROM `admin_user` WHERE username LIKE '$logged_admin_user' ";
        $result= mysqli_query($con,$admin_query);
        if (mysqli_num_rows($result) > 0) {
           
            while($row = mysqli_fetch_assoc($result)) {

                
                
                $ad_username = $row["username"];
                $ad_userid= $row["user_id"];
                $ad_fname = $row["first_name"];
                $ad_lname = $row["last_name"];
                $ad_email = $row["email"];
                $ad_role= $row["role"];
                $ad_pass = $row["password"];
                $ad_status = $row["status"];
                $ad_phone= $row["phone"];
                
                
                
                
            }
        }
        if ($ad_status=="0") {
            header("location:pending.php?user=$ad_username");
           
        }
   
        
    }

    
    else
    {
        header("location:login.php");
    }

?>

