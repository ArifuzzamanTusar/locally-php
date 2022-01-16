<?php include 'connection.php'; ?>

<?php if (isset($_GET['topic-id'])) {
    $topic_id = $_GET['topic-id'];



    // ------------------------------------
    // ||||||||||||||||||  GETTING TOPIC DATA ||||||||||||||||||||\

    $topic_query = " SELECT * FROM `topic` WHERE `id` = $topic_id";
    $result = mysqli_query($con, $topic_query);
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {



            $topic_id = $row["id"];
            $topic_name = $row["name"];
            $topic_slug = $row["slug"];
            $topic_disc = $row["discription"];
            $topic_image = $row["image"];

            // functions 

            $topic_disc_length = strlen($topic_disc);
            if ($topic_disc_length > 60) {
                $topic_disc_short = substr($topic_disc, 0, 180) . "&nbsp;" . "<a href='../single-topic.php?topic-id=" . $topic_id . "'>.......</a>";
                //<a href="../topic?topic-id=<?php echo $topic_id> ">read more</a>
            } else {
                $topic_disc_short = $topic_disc;
            }
        }
    }
}
?>
<!-- ================================================================================= -->
<?php

$page_id = 2;
$page_tittle = "Topic | " . $topic_name;
include "header.php";
?>

<!-- ||||||||||||||||||||||||||   DESIGN STARTS  ||||||||||||||||||||||||||||\ -->



<div class="container">
    <div class="p-3"></div>
    <div class="widget">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="widget">
                    <div class="">
                        <img width="100%" src="uploads/topic__image/<?php echo $topic_image ?>" alt="">

                    </div>
                </div>

            </div>
            <div class="col-md-6 col-sm-6">
                <div class="">
                    <div class="p-3"></div>
                    <h3> <strong> <?php echo $topic_name ?></strong> </h3>

                    <div class="topic_disc">
                        <?php echo  $topic_disc ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<!-- posts  -->

<div class="container">

    <div class="" style="padding: 20px;">
        <div class="row">
            <?php

            $topic_query = "SELECT *  FROM `posts` WHERE `topic_id` LIKE '$topic_id' AND `area` LIKE 'Rajshahi' AND `post_status` LIKE 'approved' ORDER BY `id`  DESC";
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
                        $topic_disc_short = substr($post_disc, 0, 800) . "&nbsp;" . "<a href='post.php?id=" . $post_id  . "'>Read More</a>";
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

        </div>
    </div>
</div>







<?php include 'footer.php'; ?>