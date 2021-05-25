<?php
$page_id = 1003;
$page_tittle = "Posts";
include "admin-header.php";

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h3> All Posts</h3>
        </div>
        <div class="col-6">
            <div class="text-right">
                <a class="btn " href="pending-users.php">Manage Posts</a>

            </div>

        </div>
    </div>
    <div class="topics">
        <div class="row pt-4">

            <?php
            for ($i = 0; $i < 10; $i++) {

            ?>
                <!-- ---Topic design starts -->
                <div class="col-md-4 col-sm-4  pb-5">
                    <div class=" topic">
                        <img src="../uploads/topic/food-review.png" width="100%" alt="">
                        <div class="p-2">
                            <div class="topic-tittle pt-2"><b>Author:</b> John Doe</div>
                            <div class="topic-slug"><b>Post ID</b> fr-10112</div>
                            <div class="topic-slug"><b>Date</b> 12-12-2020</div>
                            <div class="topic-details"><b>Post Content:</b> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Enim tempora nihil......
                            </div>
                            <div class="">
                                <a class="btn btn-primary" href=""> Action</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- topic design ends -->
            <?php
            }
            ?>
        </div>
    </div>



</div>





<?php include "admin-footer.php" ?>