<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//Load Composer's autoloader
require 'vendor/autoload.php';


// fetching existing data 
include 'connection.php';
function fetch_appOptions($key)
{
    global $con;
    $result = mysqli_query($con, "SELECT `ao_value`  FROM `app_options` WHERE `ao_key` LIKE '$key'");
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            return $row["ao_value"];
        }
    }
};



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer;
//Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = fetch_appOptions("smtp_host");                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = fetch_appOptions("smtp_user");                     //SMTP username
$mail->Password   = fetch_appOptions("smtp_password");                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = fetch_appOptions("smtp_port");                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('locally@arifuzzamantusar.com', 'LOCALLY');
