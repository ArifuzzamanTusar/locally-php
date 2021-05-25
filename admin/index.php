<?php
$page_id = 1001;
$page_tittle = "Admin Panel | Locally";
include "admin-header.php";

?>
<!-- Page Contents -->

<div class="welcome p-3" style="border-left: 5px solid green;">
    <h4>
        Welcome, <span style="font-weight: bold; color: green;">
            <?php
            if (strlen($ad_fname) < 1) {
                echo $ad_username;
            } else {
                echo $ad_fname;
            }

            ?> </span>
    </h4>
</div>
<div class="p-2"></div>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Total Posts</p>
                <?php
                // Post count 
                if ($result = mysqli_query($con, "SELECT * FROM `topic`")) {
                    $post_count = mysqli_num_rows($result);
                }

                ?>
                <h3 class="card-title">
                    <?php echo $post_count?>
                    <!-- <small>GB</small> -->
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons orange">dynamic_feed</i>
                    <a class="orange" href="audience.php">See all posts</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">verified_user</i>
                </div>
                <p class="card-category">Verified User</p>
                <?php
                // Verified count 
                if ($result = mysqli_query($con, "SELECT * FROM `user` WHERE `status` LIKE 'approved' ")) {
                    $verified_count = mysqli_num_rows($result);
                }

                ?>
                <h3 class="card-title"><?php echo $verified_count?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-success">build</i>
                    <a class="text-success" href="#">Manage them</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                </div>
                <p class="card-category">Pending User</p>

                <?php
                // Pending count 
                if ($result = mysqli_query($con, "SELECT * FROM `user` WHERE `status` LIKE 'pending' ")) {
                    $pending_count = mysqli_num_rows($result);
                }

                ?>
                <h3 class="card-title"><?php echo $pending_count?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-danger">report_problem</i>
                    <a class="text-danger" href="pending-users.php">Check Them</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="fa fa-folder-open"></i>
                </div>
                <p class="card-category">Topics</p>
                <?php
                // topic count 
                if ($result = mysqli_query($con, "SELECT * FROM `topic`")) {
                    $topic_cnt = mysqli_num_rows($result);
                }

                ?>


                <h3 class="card-title"><?php echo $topic_cnt ?> </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons blue">topic</i> <a class="blue" href="manage-topic.php">Organize Those</a>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>






<?php include "admin-footer.php" ?>