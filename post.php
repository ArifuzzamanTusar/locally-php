<?php
$page_tittle = "Locally | Home";
$page_id = 1;
$bg = "discuss.jpg";
include "header.php";

?>
<!-- getting post data  -->
<?php
if (isset($_GET["id"])) {
    $post_id = $_GET["id"];
}
?>

<div class="container">
    <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
    <?php

    $topic_query = "SELECT *  FROM `posts` WHERE  `id` = $post_id";
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

                // $topic_disc_length = strlen($post_disc);
                // if ($topic_disc_length > 60) {
                //     $topic_disc_short = substr($post_disc, 0, 800) . "&nbsp;" . "<a href='post.php?id=" . $post_id . "'>Read More</a>";
                //     //<a href="../topic?topic-id=<?php echo $topic_id> ">read more</a>
                // } else {
                //     $topic_disc_short = $post_disc;
                // }
                // 
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
                    <p><?php echo $post_disc ?>
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
                                <a class="likers_modal_btn" data-toggle="modal" data-target="#showlikers" name="" id="" role="button">

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
                                </a>


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
                    <!-- Modal for Showing all liekrs -->
                    <!-- ||||||||||||||||||||||| ALL LIKERS |||||||||||||||||||||||||| -->
                    <div class="modal fade" id="showlikers" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">People who Appreciated this</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body liker">
                                    <?php
                                    $like_result = mysqli_query($con, "SELECT userid  FROM `appreciation` WHERE `postid` = $post_id");
                                    if (mysqli_num_rows($author_result) > 0) {

                                        while ($row = mysqli_fetch_assoc($like_result)) {
                                            $liked_user_id = $row["userid"];

                                    ?>

                                            <div>
                                                <?php
                                                $like_fullname_result = mysqli_query($con, "SELECT *  FROM `user` WHERE `id` = $liked_user_id");
                                                if (mysqli_num_rows($author_result) > 0) {

                                                    while ($row = mysqli_fetch_assoc($like_fullname_result)) {
                                                        //    $liked_user_id= $row["userid"];

                                                        $liker_name = $row["firstname"] . " " . $row["lastname"];
                                                        $liker_avater = $row["avater_image"];
                                                ?>

                                                        <a href="user.php">
                                                            <div class=" ">
                                                                <div class="row">
                                                                    <div class="pl-3">
                                                                        <img class="single_author_avater_img" src="uploads/user__avater/<?php echo $liker_avater ?>" height="30px" alt="">
                                                                    </div>
                                                                    <div class="pl-3">
                                                                        <div class="like_user_name"><?php echo $liker_name ?></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <hr>

                                                <?php

                                                    }
                                                }

                                                ?>


                                            </div>
                                    <?php



                                        }
                                    }

                                    ?>




                                </div>
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
                        <!-- <div class="col-4 text-center">
                            <button class="btn fuck">
                                <i class="fas fa-heart-broken"></i> Depreciate</button>

                        </div> -->
                        <div class="col-6 text-right">
                            <button class="btn">
                                <a href="post.php?id=<?php echo $post_id ?> #comment"> <i class="fas fa-comments"></i> Comment</button> </a>

                        </div>
                    </div>
                </div>

                <!-- Comment Feed  -->
                <!-- ||||||||||||||||||||||||||||||||||| -->

                <!-- comment featching  -->



                <div class="single_post_comments" id="comment">
                    <hr>

                    <!-- ======================  CRUD STARTS ==================== -->
                    <div class="comments">


                        <?php
                        $topic_query = "SELECT *  FROM `comments` WHERE `post_ID` LIKE '$post_id' ORDER BY comment_date ASC";
                        $comment_result = mysqli_query($con, $topic_query);
                        if (mysqli_num_rows($comment_result) > 0) {

                            while ($row = mysqli_fetch_assoc($comment_result)) {
                                //`comment_author_id`, `comment_user`, `comment_author_email`,  `comment_content`,  `post_user_id`, `post_ID`
                                $comment_author_id = $row["comment_author_id"];
                                $comment_author_username = $row["comment_user"];
                                $comment_author_email = $row["comment_author_email"];
                                $post_author_id = $row["post_user_id"];
                                $post_id = $row["post_ID"];
                                $comment_content = $row["comment_content"];
                                // getting user full name & image 
                                $fetch_commenter_data = mysqli_query($con, "SELECT *  FROM `user` WHERE `id` = $comment_author_id");
                                if (mysqli_num_rows($fetch_commenter_data) > 0) {

                                    while ($row = mysqli_fetch_assoc($fetch_commenter_data)) {
                                        $comment_author_fullname = $row["firstname"] . "&nbsp;" . $row["lastname"];
                                        $comment_author_avater = $row["avater_image"];
                                        if (strlen($comment_author_avater) < 5) {
                                            $comment_author_avater = "avater.png";
                                        }
                                    }
                                }



                        ?>

                                <div class="comment_crud">
                                    <div class="comment_feed">
                                        <div class="comment_avater">
                                            <img class="single_author_avater_img" src="uploads/user__avater/<?php echo $comment_author_avater ?>" height="30px" alt="">
                                        </div>
                                        <div class="comment_author_name">
                                            <span><a href="user.php?user_id=<?php echo $comment_author_id ?>"> <?php echo $comment_author_fullname ?></a></span>
                                            <i class="comment_username">@ <?php echo $comment_author_username ?></i>
                                        </div>


                                    </div>
                                    <div class="comment">
                                        <p><?php echo $comment_content ?>.</p>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </div>



                    <!-- =============================CRUD ENDS======================= -->
                    <div class="comment_form">

                        <form action="addComment.php" method="post">
                            <style>
                                .hide {
                                    display: none;
                                }
                            </style>
                            <div class="hide">
                                <input type="text" name="ca_id" value="<?php echo $userid ?>">
                                <input type="text" name="ca_user" value="<?php echo $username ?>">
                                <input type="text" name="ca_auth_email" value="<?php echo $fname . "&nbsp;" . $lname ?>">

                                <input type="text" name="ca_author" value="<?php echo $email ?>">
                                <input type="text" name="po_uid" value="<?php echo $post_author_id ?>">
                                <input type="text" name="po_id" value="<?php echo $post_id ?>">
                            </div>
                            <div class="form-group p-3">
                                <label for="">Add your comment</label>
                                <textarea name="content" class="form-control" name="" id="" rows="3"></textarea>
                                <div class="p-3 text-right">
                                    <button name="add_comment" type="submit" class="btn btn-primary">Add Comment</button>

                                </div>

                            </div>


                        </form>
                    </div>

                </div>

                <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||\ -->


            </div>


    <?php
        }
    }



    ?>


    <!-- |||||||||||||||||||||||||||||||||||||||||||||||\\  ENDS ||||||||||||||||||||||||||||||||||||||||\ -->
</div>






<?php
include 'footer.php';
?>