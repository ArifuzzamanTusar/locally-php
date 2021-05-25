<?php
$page_id = 1006;
$page_tittle = "Miscellaneous";
include "admin-header.php";

?>

<div class="welcome p-3" style="border-left: 5px solid green;">
    <h4>
        Update Profile
        
    </h4>
</div>
<div class="p-4"></div>

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

<div class="p-5"></div>
<div class="welcome p-3" style="border-left: 5px solid green;">
    <h4>
        Change password
    </h4>
</div>
<div class="p-4"></div>
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






<?php include "admin-footer.php" ?>