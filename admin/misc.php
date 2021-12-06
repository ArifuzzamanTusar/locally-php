<?php
$page_id = 1006;
$page_tittle = "Miscellaneous";
include "admin-header.php";

?>

<div class="card">
    <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">

                <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">person</i> Profile Update
                            <div class="ripple-container"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">lock</i> Password Reset
                            <div class="ripple-container"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">cloud</i> SMTP Server config
                            <div class="ripple-container"></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="profile">
                <div class="p-3"></div>
                <!-- ------------------------------------------------------------------------ -->
                <div class="container-fluid">

                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">User Id</label>

                                    <input type="text" class="form-control" value=" <?php echo $ad_userid ?>" name="" id="" aria-describedby="emailHelpId" placeholder="" disabled>
                                    <div class="p-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">User Name</label>
                                    <input type="text" class="form-control" value=" <?php echo $ad_username ?>" name="" id="" aria-describedby="emailHelpId" placeholder="" disabled>
                                    <div class="p-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">Role</label>
                                    <input type="text" class="form-control" value=" <?php echo $ad_username ?>" name="" id="" aria-describedby="emailHelpId" placeholder="" disabled>
                                    <div class="p-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" value=" <?php echo $ad_fname ?>" name="" id="" aria-describedby="emailHelpId" placeholder="">
                                    <div class="p-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">Last name</label>
                                    <input type="text" class="form-control" value=" <?php echo $ad_lname ?>" name="" id="" aria-describedby="emailHelpId" placeholder="">
                                    <div class="p-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" value=" <?php echo $ad_email ?>" name="" id="" aria-describedby="emailHelpId" placeholder="">
                                    <div class="p-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" value=" <?php echo $ad_phone ?>" name="" id="" aria-describedby="emailHelpId" placeholder="">
                                    <div class="p-2"></div>
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Update Profile</button>

                    </form>

                </div>
            </div>
            <div class="tab-pane" id="messages">
                <div class="p-3"></div>
                <!-- --------------------------------------------------------------------------  -->
                <div class="container-fluid">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">Current Password</label>
                                    <input type="password" class="form-control" value="" name="" id="" aria-describedby="emailHelpId" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">New Password</label>
                                    <input type="password" class="form-control" value="" name="" id="" aria-describedby="emailHelpId" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">Re-enter New password</label>
                                    <input type="password" class="form-control" value="" name="" id="" aria-describedby="emailHelpId" placeholder="">
                                </div>
                            </div>

                        </div>
                        <div class="p-2"></div>
                        <button type="submit" class="btn btn-primary">Change Password</button>

                    </form>
                </div>
            </div>
            <div class="tab-pane" id="settings">
                <!-- --------------------------------SMTP-----------------------------------------  -->
                <div class="p-3"></div>
                <div class="container-fluid">
                    <?php

                    // fetching existing data 

                    function fetch_appOptions($key)
                    {
                        global $con;
                        $result = mysqli_query($con, "SELECT `ao_value`  FROM `app_options` WHERE `ao_key` LIKE '$key'");
                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                $db_smtp_host = $row["ao_value"];
                                echo $db_smtp_host;
                            }
                        }
                    };





                    if (isset($_POST["update_smtp"])) {
                        $form_smtpHOST = $_REQUEST['s_host'];
                        $form_smtpUser = $_REQUEST['s_user'];
                        $form_password = $_REQUEST['s_pass'];
                        $form_port = $_REQUEST['s_port'];

                        $smtp_up_query1 = "UPDATE `app_options` SET `ao_value` = '$form_smtpHOST' WHERE `ao_key` LIKE 'smtp_host';";
                        if (mysqli_query($con, $smtp_up_query1)) {
                            $smtp_up_query1 = "UPDATE `app_options` SET `ao_value` = '$form_smtpUser' WHERE `ao_key` LIKE 'smtp_user';";
                            if (mysqli_query($con, $smtp_up_query1)) {
                                $smtp_up_query1 = "UPDATE `app_options` SET `ao_value` = '$form_password' WHERE `ao_key` LIKE 'smtp_password';";
                                if (mysqli_query($con, $smtp_up_query1)) {
                                    $smtp_up_query1 = "UPDATE `app_options` SET `ao_value` = '$form_port' WHERE `ao_key` LIKE 'smtp_port';";
                                    if (mysqli_query($con, $smtp_up_query1)) {
                    ?>
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>
                                                <b> Success - </b> SMTP data Updated</span>
                                        </div>
                    <?php
                                    }
                                }
                            }
                        }
                    }

                    ?>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">Host</label>

                                    <input type="text" class="form-control" value=" <?php fetch_appOptions("smtp_host"); ?>" name="s_host" id="" aria-describedby="emailHelpId" placeholder="">
                                    <div class="p-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" value=" <?php fetch_appOptions("smtp_user"); ?>" name="s_user" id="" aria-describedby="emailHelpId" placeholder="">
                                    <div class="p-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" class="form-control" value=" <?php fetch_appOptions("smtp_password"); ?>" name="s_pass" id="" aria-describedby="emailHelpId" placeholder="">
                                    <div class="p-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="">Port</label>
                                    <input type="text" class="form-control" value=" <?php fetch_appOptions("smtp_port"); ?>" name="s_port" id="" aria-describedby="emailHelpId" placeholder="">
                                    <div class="p-2"></div>
                                </div>
                            </div>

                        </div>


                        <button type="submit" name="update_smtp" class="btn btn-primary">Update SMTP</button>

                    </form>

                </div>
                <!-- ----------------------------------------------------------------------- -->
            </div>
        </div>
    </div>
</div>










<?php include "admin-footer.php" ?>