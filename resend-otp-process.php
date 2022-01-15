<?php

include 'connection.php';
// resend OTP 

include 'email-config.php';
// ------------------

if (isset($_POST["resend-otp"])) {
    $email_receiver = $_REQUEST['re-email'];
    $OTP = rand(100000, 999999);
    $email_body = '
    <center>
        <div style="background:#F5EEDC; padding:80px 10px;">
            <div style="width:600px; border-radius:10px;">

                <div style="background:#363062; padding:20px 0px;">
                    <img width="200px" src="https://res.cloudinary.com/tusar/image/upload/v1638641935/locally/logo-dark_b7rzfx.png" alt="locally Logo">
                </div>
                <div style="background:#ffffff; padding:20px 20px;">
                    <h2>Thank you for registarting at Locally </h2>
                    <p>Use this Code bellow to verify your email, It will be expired soon </p>
                    <h1 style="color:#363062;">' . $OTP . '</h1>
                    <br>
                    <p>or, click on the button to verify your email</p>
                    <br><br>
                    <a style="padding: 20px; background:#363062; color:#ffffff; text-decoration:none" href="' . $_SERVER['HTTP_HOST'] . '/verify.php?otp=' . $OTP . ' ">VERIFY NOW</a>
                    <br><br>
                </div>
                <div style="background:#363062;  padding:10px 0px;">
                    <p style="color:white;"> &copy; all right reseved Locally</p>
                </div>
            </div>
        </div>
    </center>
    
    ';
    $mail->addAddress($email_receiver);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Verify Your Email';
    $mail->Body    = $email_body;
    $mail->AltBody = 'Welcome To Locally! Your OTP is: ' . $OTP . '.  Verify your Email Now';

    // $mail->send();
    if ($mail->send()) {
        $update_query = "UPDATE `user` SET  `last_otp_code` = '$OTP' WHERE `user`.`email` LIKE '$email_receiver';";
        if (mysqli_query($con, $update_query)) {
            echo '<script>location.replace("verify-email.php?otp_resend_success=true");</script>';
        }
    } else {
?>
        <script>
            location.replace("register.php?envalid-email");
        </script>
<?php


    }
}

?>