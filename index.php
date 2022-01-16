<?php
$page_tittle = "Locally | Home";
$page_id = 1;
$bg = "discuss.jpg";
include "header.php";

?>

<script src="js/geolocation.js"></script>
<link rel="stylesheet" href="css/marquee.css">

<div class="page_body">

    <!-- | HERO SECTION | -->



    <!--| posts section |-->


    <div class="home_posts">
        <div class="container ">
            <div class="row">


                <div class="mb-4  col-md-9 col-sm-12 col-12 pt-5">



                    <div class="widget">
                        <div class="row">
                            <div class="col-3">
                                <img class="single_author_avater_img" src="uploads/user__avater/<?php echo $profile_picture ?>" width="60px" height="60px" alt="">
                            </div>
                            <div class="col-9">
                                <a href="create.php">
                                    <div class="inner_field"> Create new Post</div>
                                </a>
                            </div>
                        </div>
                    </div>



                    <!-- |||||||||||||||| NO POSTS ||||||||||||||||| -->
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

                    <?php
                    // ||||||||||| NID Duplicate Validation ||||||||||
                    if ($result = mysqli_query($con, "SELECT *  FROM `posts` WHERE `area` LIKE '$feedArea'")) {
                        /* determine number of rows result set  nid*/
                        $row_cnt = mysqli_num_rows($result);

                        if ($row_cnt == 0) {
                    ?>
                            <center>
                                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_IwKi9V.json" background="transparent" speed="1" style="height: 300px; width:300px" loop autoplay></lottie-player>
                                <h2>Whoopss! There's No posts in This area</h2>
                            </center>
                    <?php
                        }
                    }
                    ?>



                    <!-- all posts  -->
                    <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
                    <?php

                    $topic_query = "SELECT *  FROM `posts` WHERE  `area` LIKE '$feedArea' AND `post_status` LIKE 'approved' ORDER BY `id`  DESC";

                    $result = mysqli_query($con, $topic_query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {



                            $post_id = $row["id"];
                            $post_name = $row["tittle"];
                            $post_disc = $row["disc"];
                            $post_image = $row["image"];
                            $post_topic = $row["topic"];
                            $post_topic_id = $row["topic_id"];
                            $post_area = $row["area"];
                            $post_author_user = $row["author_user"];
                            $post_author_id = $row["author_id"];
                            $post_time = $row["post_time"];
                            $topic_id = $row["topic_id"];



                    ?>
                            <!-- 
                                |||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                                |||||||||||      CRUD STARTS HERE     |||||||||||||||||||
                                ||||||||||||||||||||||||||||||||||||||||||||||||||||||||| 
                            -->
                            <div class="php">
                                <?php
                                $author_result = mysqli_query($con, "SELECT *  FROM `user` WHERE `id` = $post_author_id");
                                if (mysqli_num_rows($author_result) > 0) {

                                    while ($row = mysqli_fetch_assoc($author_result)) {
                                        $post_author_first_name = $row["firstname"];
                                        $post_author_last_name = $row["lastname"];
                                        $post_author_profile_pic = $row["avater_image"];
                                        if (strlen($post_author_profile_pic) < 6) {
                                            $post_author_profile_pic = "avater.png";
                                        }
                                    }
                                }
                                // // functions 

                                $topic_disc_length = strlen($post_disc);
                                if ($topic_disc_length > 60) {
                                    $topic_disc_short = substr($post_disc, 0, 800) . "&nbsp;" . "<a href='post.php?id=" . $post_id . "'>Read More</a>";
                                    //<a href="../topic?topic-id=<?php echo $topic_id> ">read more</a>
                                } else {
                                    $topic_disc_short = $post_disc;
                                }
                                ?>


                            </div>



                            <div class="single_post ">
                                <div class="single_author">
                                    <div class="single_author_avater">
                                        <img class="single_author_avater_img" src="uploads/user__avater/<?php echo $post_author_profile_pic ?>" height="40px" alt="">
                                    </div>
                                    <div class="single_author_name">
                                        <span><a href="user.php?user_id=<?php echo $post_author_id ?>"> <?php echo $post_author_first_name . " " . $post_author_last_name ?></a></span>
                                        <span class="single_author_username"> @<?php echo $post_author_user ?></span>
                                        <div class="single_post_date"><?php echo $post_time ?></div>
                                    </div>

                                </div>
                                <div class="single_post_content">
                                    <p><?php echo $topic_disc_short ?>
                                    </p>
                                </div>
                                <div class="single_post_category">
                                    <a class="single_post_category_tittle" href="single-topic.php?topic-id=<?php echo $post_topic_id ?>"><?php echo $post_topic ?></a>
                                </div>
                                <div class="single_post_image">
                                    <a href="post.php?id=<?php echo $post_id ?>"> <img src="<?php echo $post_image ?>" width="100%" alt=""> </a>
                                </div>
                                <?php

                                if (strlen($post_image) < 6) {
                                    echo "<br><br> " . "<small><i>This post has no image</i></small>";
                                }
                                ?>

                                <div class="single_post_cont">
                                    <!-- showing likes  -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">

                                                <small id="show_like<?php echo $post_id ?>">
                                                    <?php


                                                    $query5 = mysqli_query($con, "SELECT username FROM `appreciation` WHERE postid = '$post_id' ORDER BY likeid DESC LIMIT 1");
                                                    if (mysqli_num_rows($query5) > 0) {
                                                        while ($row = mysqli_fetch_assoc($query5)) {
                                                            echo $row["username"] . " and ";
                                                        }
                                                    }
                                                    $query2 = mysqli_query($con, "select * from `appreciation` where postid='$post_id'");
                                                    echo mysqli_num_rows($query2) . " others";

                                                    ?>
                                                </small>

                                            </div>
                                            <div class="col-6 text-right">
                                                <small>

                                                    <?php
                                                    $query2 = mysqli_query($con, "select * from `comments` where post_ID='$post_id'");
                                                    echo mysqli_num_rows($query2) . " Comments";
                                                    ?>
                                                </small>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
                                        <!-- ||||||||||||||||||||||||||  LIKE COMMENTS ||||||||||||||||||||||||||| -->
                                        <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
                                        <div class="col-6 text-left">


                                            <!-- like  Starts -->
                                            <?php
                                            $query1 = mysqli_query($con, "select * from `appreciation` where postid='" . $post_id . "' and userid='" . $userid . "'");
                                            if (mysqli_num_rows($query1) > 0) {
                                            ?>
                                                <!-- <span> <i class="fas fa-heart unlike"></i></span> -->
                                                <button value="<?php echo $post_id ?>" class="unlike btn">
                                                    <i class="fas fa-heart"></i>
                                                    Appreciate
                                                </button>


                                            <?php
                                            } else {
                                            ?>

                                                <button value="<?php echo  $post_id; ?>" class="like btn">
                                                    <i class="fas fa-heart"></i>
                                                    Appreciate
                                                </button>


                                            <?php
                                            }
                                            ?>
                                            <!-- like ends  -->
                                        </div>

                                        <div class="col-6 text-right">
                                            <button class="btn">
                                                <a href="post.php?id=<?php echo $post_id ?> #comment"> <i class="fas fa-comments"></i> Comment</button> </a>

                                        </div>
                                    </div>
                                </div>

                                <!-- Comment Feed  -->
                                <!-- ||||||||||||||||||||||||||||||||||| -->



                                <div class="single_post_comments">
                                    <hr>
                                    <?php include 'limit_comment.php'; ?>

                                </div>

                                <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||\ -->


                            </div>


                    <?php
                        }
                    }



                    ?>


                    <!-- |||||||||||||||||||||||||||||||||||||||||||||||\\  ENDS ||||||||||||||||||||||||||||||||||||||||\ -->
                </div>


                <!-- 
                ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                ||||||||||||||||||||||||||||  SIDEBAR ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| 
                -->
                <!-- | Sidebar Column |-->

                <div class="mb-4  col-md-3 col-sm-12 col-12">

                    <div class=" pt-5">
                        <div class="sb_topics">
                            <p>Welcome,</p>
                            <h4><?php echo $fname ?></h4>
                        </div>
                        <!-- =================================================== -->
                        <div class="topic_lists">
                            <div class="current_location">
                                <div class="status bg-white">
                                    <div class="btn text-white bg-success "><i class="fas <?php echo $city_icon ?>"></i></div>
                                    <!-- <div class="btn text-white bg-success "><i class="fas <?php echo $city_icon ?>"></i></div> -->
                                    <div class="btn"> <?php echo $feedArea ?></div>
                                </div>
                                <div class="text-center">
                                    <a type="button" class="p-2" data-toggle="modal" data-target="#modelId">
                                        Change Location
                                    </a>
                                </div>

                            </div>

                            <div class="Modal Area ">

                                <!-- Button trigger modal -->


                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Change Location Manually</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-center">
                                                    <p>Current GPS location: <span class="text-success"> <?php echo $gpsAddress ?></span></p>
                                                    <p>
                                                    <form action="#" method="post"> <button class="bg-success text-white btn" type="submit" name="set_toGPS">USE GPS</button></form>
                                                    </p>
                                                    <p>Change Temporary Location to,</p>
                                                    <form action="#" method="POST">
                                                        <div class="input-group">
                                                            <select class="form-control" name="temp_city" id="">
                                                                <!-- defined  -->
                                                                <option value="<?php if (isset($feedArea)) {
                                                                                    echo $feedArea;
                                                                                } else {
                                                                                    echo "not selected";
                                                                                }  ?>" selected><?php if (isset($feedArea)) {
                                                                                                    echo $feedArea;
                                                                                                } else {
                                                                                                    echo "Select A city";
                                                                                                } ?></option>

                                                                <?php

                                                                $query = "SELECT * FROM `districts` ORDER BY `districts`.`name` ASC";
                                                                $result = mysqli_query($con, $query);
                                                                if (mysqli_num_rows($result) > 0) {

                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        // $dist_id = $row["dist_id"];
                                                                        $dist_name = $row["name"];
                                                                        $dist_bn_name = $row["bn_name"];
                                                                ?>

                                                                        <option value="<?php echo $dist_name ?>"> <?php echo $dist_name ?></option>



                                                                <?php }
                                                                }
                                                                ?>

                                                            </select>

                                                        </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button name="change_tempCity" type="submit" class="btn btn-primary">Change City</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <!-- ====================================================== -->
                    </div>
                    <div class=" pt-5">
                        <div class="sb_topics">
                            <h4>Notifications</h4>
                        </div>
                        <div class="topic_lists">
                            <!-- ||||||||||||||||||||||||||||||||||  SHORT NOTIFICARION ||||||||||||||||||||||\\\ -->
                            <?php
                            $notice_query = "SELECT *  FROM `notification` WHERE `post_userid` LIKE '$userid' AND `act_userid` NOT LIKE '$userid' ORDER BY id DESC  LIMIT 4";

                            $n_result = mysqli_query($con, $notice_query);
                            if (mysqli_num_rows($n_result) > 0) {

                                while ($row = mysqli_fetch_assoc($n_result)) {
                                    $n_id = $row["id"];
                                    $n_post_id = $row["post_id"];
                                    $n_act_userid = $row["act_userid"];
                                    $n_type = $row["type"];
                                    $n_get_name = mysqli_query($con, "SELECT *  FROM `user` WHERE `id` = $n_act_userid");
                                    if (mysqli_num_rows($n_get_name) > 0) {

                                        while ($row = mysqli_fetch_assoc($n_get_name)) {
                                            $n_full_name = $row["firstname"] . " " . $row["lastname"];
                                            $act_avater = $row["avater_image"];
                                        }
                                    }

                                    if ($n_type == "commented" || $n_type == "appreciated") {
                                        $string = $n_full_name . " has " . $n_type . " on your post";



                            ?>

                                        <a href="post.php?id=<?php echo $n_post_id ?>">
                                            <div class="container">


                                                <div class="row lists ">

                                                    <div class=""> <img class="single_author_avater_img" src="uploads/user__avater/<?php echo $act_avater ?>" height="30px" alt="">
                                                        <?php echo $string ?></div>


                                                </div>
                                            </div>




                                        </a>
                            <?php
                                    }
                                }
                            }
                            ?>
                            <!-- ||||||||||||||||||||||||||||   NOTIFICATON MODAL |||||||||||||||||\ -->
                            <!-- Button trigger modal -->
                            <div class="text-center p-2">
                                <a class="likers_modal_btn" type="button" data-toggle="modal" data-target="#exampleModalLong">
                                    See All
                                </a>

                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">All Notifications</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- ----------------------------------- -->

                                            <div class="topic_lists">
                                                <?php
                                                $notice_query = "SELECT *  FROM `notification` WHERE `post_userid` LIKE '$userid' AND `act_userid` NOT LIKE '$userid' ORDER BY id DESC";
                                                $n_result = mysqli_query($con, $notice_query);
                                                if (mysqli_num_rows($n_result) > 0) {

                                                    while ($row = mysqli_fetch_assoc($n_result)) {
                                                        $n_id = $row["id"];
                                                        $n_post_id = $row["post_id"];
                                                        $n_act_userid = $row["act_userid"];
                                                        $n_type = $row["type"];
                                                        $n_get_name = mysqli_query($con, "SELECT *  FROM `user` WHERE `id` = $n_act_userid");
                                                        if (mysqli_num_rows($n_get_name) > 0) {

                                                            while ($row = mysqli_fetch_assoc($n_get_name)) {
                                                                $n_full_name = $row["firstname"] . " " . $row["lastname"];
                                                                $act_avater = $row["avater_image"];
                                                            }
                                                        }
                                                        // $string = "";
                                                        // if ($n_act_userid != $userid) {
                                                        //     $string = $n_full_name . " has " . $n_type . " on your post";


                                                        if ($n_type == "commented" || $n_type == "appreciated") {
                                                            $string = $n_full_name . " has " . $n_type . " on your post";

                                                            // $string = $n_full_name . " has " . $n_type . "Your post";


                                                ?>

                                                            <a href="post.php?id=<?php echo $n_post_id ?>">
                                                                <div class="container">


                                                                    <div class="row lists ">

                                                                        <div class=""> <img class="single_author_avater_img" src="uploads/user__avater/<?php echo $act_avater ?>" height="30px" alt="">
                                                                            <?php echo $string ?></div>


                                                                    </div>
                                                                </div>




                                                            </a>
                                                <?php
                                                        }
                                                    }
                                                    // }
                                                }
                                                ?>

                                            </div>
                                            <!-- ------------------------------ -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- ||||||||||||||||||||||||||||   NOTIFICATON MODAL ENDS |||||||||||||||||\ -->


                        </div>
                    </div>
                    <div class="sidebar pt-5">
                        <div class="pt-3"></div>
                        <div class="sb_topics">
                            <h4>Popular Topics </h4>
                        </div>
                        <div class="topic_lists">

                            <?php
                            $topic_query = " SELECT * FROM `topic`  ORDER BY id DESC";
                            $result = mysqli_query($con, $topic_query);
                            if (mysqli_num_rows($result) > 0) {

                                while ($row = mysqli_fetch_assoc($result)) {
                                    $topic_id = $row["id"];
                                    $topic_name = $row["name"];
                            ?>

                                    <a href="single-topic.php?topic-id= <?php echo $topic_id ?>">
                                        <div class="lists"><?php echo $topic_name ?>
                                            <?php
                                            $query2 = mysqli_query($con, "select * from `posts` where topic_id='$topic_id'");
                                            echo "  (" . mysqli_num_rows($query2) . ")";

                                            ?>

                                        </div>
                                    </a>
                            <?php
                                }
                            }
                            ?>


                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>