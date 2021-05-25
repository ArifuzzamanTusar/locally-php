<?php
$page_tittle = "Profile";
$page_id = 5;
include "header.php";

if (isset($_GET["user_id"])) {
    $user_id = $_GET["user_id"];

    $result = mysqli_query($con, "SELECT *  FROM `user` WHERE `id` = $user_id");
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $user_username = $row["username"];
            $user_fname = $row["firstname"];
            $user_lname = $row["lastname"];
            $user_email = $row["email"];
            $user_phone = $row["phone"];
            $user_bio = $row["bio"];
            $user_city = $row["city"];
            $user_nid = $row["nid"];
            $user_birtday = $row["birthday"];
            $user_gender = $row["gender"];
            $user_facebook = $row["facebook"];
            $user_twitter = $row["twitter"];
            $user_website = $row["website"];
            $user_linkedin = $row["linkedin"];

            $user_company = $row["company"];
            $user_position = $row["position"];

            $user_profile_picture = $row["avater_image"];
            $user_cover_picture = $row["cover_image"];
        }
    }
}

?>
<link rel="stylesheet" href="css/profile.css">

<div class="profile_body">
    <div class="identity">
        <div class="cover_pic" style="background-image: url(uploads/user__cover/<?php echo $user_cover_picture ?>);">

        </div>
        <div class="profile text-center">
            <div>
                <img class="profile_pic" src="uploads/user__avater/<?php echo $user_profile_picture ?>" alt="">
            </div>
            <div class="profile_name pt-2">
                <span class="profile_username">@ <?php echo $user_username ?></span>
                <h3><?php echo $user_fname . "&nbsp;" . $user_lname ?></h3>

                <div class="h6 profile_sub">
                    <span><i class="fas fa-map-marker-alt"></i> <a href="#"> <?php echo $user_city ?></a></span>
                    <span>&nbsp; | &nbsp;</span>
                    <span><i class="fas fa-briefcase"></i> <a href="#"> <?php echo $user_position ?></a></span>
                </div>
                <div class="p-3"></div>

            </div>
        </div>
        <div class="p-2"></div>
    </div>

    <div class="profile_feeds">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="profile_intro">
                        <h3>Intro</h3>

                        <hr>
                        <a href="#">
                            <div class="profile_sub"><i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp; <?php echo $user_city ?></div>
                        </a>
                        <a href="#">
                            <div class="profile_sub"><i class="fas fa-briefcase"></i>&nbsp; &nbsp; <?php echo $user_position ?></div>
                        </a>
                        <a href="#">
                            <div class="profile_sub"><i class="fas fa-building"></i> &nbsp; &nbsp; <?php echo $user_company ?></div>
                        </a>
                        <a href="#">
                            <div class="profile_sub"><i class="fas fa-venus-mars"></i> &nbsp; &nbsp; <?php echo $user_gender ?></div>
                        </a>
                        <a href="#">
                            <div class="profile_sub"><i class="fas fa-birthday-cake"></i> &nbsp; &nbsp; <?php echo $user_birtday ?></div>
                        </a>

                    </div>
                    <div class="p-2"></div>
                    <div class="profile_intro">
                        <h6>Social Profiles</h6>
                        <hr>

                        <a href="https://www.facebook.com/<?php echo $user_facebook ?>">
                            <div class="profile_sub"><i class="fab fa-facebook"></i>&nbsp; &nbsp; Facebook</div>
                        </a>
                        <a href="https://www.twitter.com/<?php echo $user_twitter ?>">
                            <div class="profile_sub"><i class="fab fa-twitter"></i>&nbsp; &nbsp; Twitter</div>
                        </a>
                        <a href="https://www.linkedin.com/in/<?php echo $user_linkedin ?>">
                            <div class="profile_sub"><i class="fab fa-linkedin"></i>&nbsp; &nbsp; Linkedin</div>
                        </a>
                        <a href="https://<?php echo $user_website ?>">
                            <div class="profile_sub"><i class="fas fa-globe"></i>&nbsp; &nbsp; Website</div>
                        </a>

                    </div>
                    <div class="p-2"></div>

                </div>
                <div class="col-md-9 col-sm-12 col-12">

                    <!-- <div class="p-2"></div> -->
                    <div class="widget">
                        <div class="row">
                            <div class="col-6">
                                <h3>Posts</h3>
                            </div>
                            <div class="col-6">
                                <!-- <div class="text-right">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-cogs"></i> Manage Your Posts
                                    </button>

                                </div> -->

                            </div>
                        </div>
                    </div>

                    <div class="p-2"></div>
                    <!-- ||||||||||||||||||  POSTS  ||||||||||||||||||| -->

                    <?php


                    $topic_query = "SELECT *  FROM `posts` WHERE  `author_id` LIKE '$user_id' AND `post_status` LIKE 'approved' ORDER BY `id`  DESC";
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

                            $author_result = mysqli_query($con, "SELECT *  FROM `user` WHERE `id` = $post_author_id");
                            if (mysqli_num_rows($author_result) > 0) {

                                while ($row = mysqli_fetch_assoc($author_result)) {
                                    $post_author_first_name = $row["firstname"];
                                    $post_author_last_name = $row["lastname"];
                                }
                            }

                            // functions 

                            $topic_disc_length = strlen($post_disc);
                            if ($topic_disc_length > 60) {
                                $topic_disc_short = substr($post_disc, 0, 800) . "&nbsp;" . "<a href='post.php?id=" . $post_id . "'>Read More</a>";
                                //<a href="../topic?topic-id=<?php echo $topic_id> ">read more</a>
                            } else {
                                $topic_disc_short = $post_disc;
                            }

                    ?>

                            <div class="single_post ">
                                <div class="single_author">
                                    <div class="single_author_avater">
                                        <img class="single_author_avater_img" src="images/avater.png" height="40px" alt="">
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
                                    <a href="post.php?id=<?php echo $post_id ?>"> <img src="uploads/post__image/<?php echo $post_image ?>" width="100%" alt=""> </a>
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
                    <!-- ----------------- -->

                </div>
            </div>
        </div>
    </div>

</div>


<?php
include 'footer.php';
?>