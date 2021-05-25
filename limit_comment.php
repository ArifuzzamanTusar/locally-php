<div class="comments">


                        <?php
                        $topic_query = "SELECT *  FROM `comments` WHERE `post_ID` LIKE '$post_id' ORDER BY comment_date DESC LIMIT 2";
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