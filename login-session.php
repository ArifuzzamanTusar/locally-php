<?php
    session_start();

    if(isset($_SESSION['username_session']))
    {

        $logged_user=  $_SESSION['username_session'];
        

        include "connection.php";
        $admin_query = " SELECT * FROM `user` WHERE username LIKE '$logged_user' ";
        $result= mysqli_query($con,$admin_query);
        if (mysqli_num_rows($result) > 0) {
           
            while($row = mysqli_fetch_assoc($result)) {

                
                
                $userid= $row["id"];
                $username = $row["username"];
                $fname = $row["firstname"];
                $lname = $row["lastname"];
                $email = $row["email"];
                $phone= $row["phone"];
                $bio = $row["bio"];
                $city= $row["city"];
                $nid = $row["nid"];
                $birtday = $row["birthday"];
                $gender = $row["gender"];
                $facebook = $row["facebook"];
                $website = $row["website"];
                $linkedin = $row["linkedin"];
                $twitter =$row["twitter"];
                $password = $row["password"];
                $user_status = $row["status"];

                $company = $row["company"];
                $position = $row["position"];

                $profile_picture = $row["avater_image"];
                $cover_picture = $row["cover_image"];
                $ev_status = $row["ev_status"];

                // creating backup 
                if (strlen($profile_picture) < 5) {
                    $profile_picture = "avater.png";
                }
                
                
                
                
                
            }
        }
        if ($ev_status=="unverified"){
            header("location:verify-email.php?user=$username");
        }
        // if ($ev_status=1){
        //     if ($user_status=="pending") {
        //         header("location:pending.php?user=$username");
               
        //     }
        //     if ($user_status=="banned") {
        //         header("location:banned.php?user=$username");
               
        //     }
        // }
       
       
   
        
    }

    
    else
    {
        header("location:login.php");
    }

?>





