<?php
$page_tittle = "Create Post";
$page_id = 3;
include "header.php";
?>


<div class="page_body">

    <div class="container">
        <!-- inserting  -->
        <?php
        // sessions $userid ,  $username


        if (isset($_POST['add_post'])) {



            $post_disc = $_REQUEST['post__discription'];
            // $post_title =  substr($post_disc, 0, 50);
            $post_title = strip_tags(substr($post_disc, 0, 200));
            $post_topic = $_REQUEST['post__topic'];
            // getting post topic id 

            if ($result = mysqli_query($con, "SELECT id  FROM `topic` WHERE `name` LIKE '$post_topic'")) {
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $post_topic_id = $row["id"];
                    }
                }
            }

            $post_area = $city;
            $post_author  = $username;
            $post_author_id = $userid;
            $post_status = "approved";


            // post__images

            #file name with a "random number" so that similar dont get replaced
            $post_image = rand(1000, 10000) . "-" . $_FILES["post-img"]["name"];

            #temporary file name to store file
            $tname = $_FILES["post-img"]["tmp_name"];

            #upload directory path
            $uploads_dir = 'uploads/post__image';

            #TO move the uploaded file to specific location
            move_uploaded_file($tname, $uploads_dir . '/' . $post_image);




            // ..................................
            //Uplaoading to database


            $sql = "INSERT INTO `posts` ( `tittle`, `disc`, `image`, `topic`, `topic_id`, `area`, `author_user`, `author_id`, `post_status`) 
             VALUES ('$post_title', '$post_disc', '$post_image', '$post_topic', '$post_topic_id', '$post_area','$post_author', '$post_author_id', '$post_status');";


            if (empty($post_disc)) {
                $post_error = "Sorry, We cant read your mind,, Please discribe your mind";
            } else {
                if (mysqli_query($con, $sql)) {
                    
                    header("location:manage-post.php");

                    $post_up_ok = "Post Sucessfully Added";
                    echo '<div class="alert-light text-success text-center py-3">' . $post_up_ok . '</div>';

                } else {
                    $post_up_failed = "Failed";
                    echo '<div class="alert-light text-danger text-center py-3">' . $post_up_failed . '</div>';
                }
            }
        }




        ?>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="p-3"></div>
            <div class="widget">
                <div class="row">
                    <div class="col-6">
                        <h4>Create New Post</h4>
                    </div>
                    <div class="col-6">
                        <button name="add_post" type="submit" class="btn btn-primary float-right">Publish</button>
                    </div>
                </div>

            </div>
            <div class="p-3"></div>

            <!-- =======ALL postS======== -->
            <?php
            if (isset($post_error)) {
            ?>
            <div class="bg-danger p-2">
             <div class="text-light"><?php echo $post_error?></div> 
            </div>
            <div class="p-3"></div>

            <?php
            }

            ?>

            <div class="row">

                <!-- ---post design starts -->
                <div class="col-12 pb-3">
                    <div class="widget">


                        <div class="form-group">
                            <h6>Hellow! <?php  echo $username ?> </h6>
                            <label for="">Please discribe Your Post</label>
                            <!-- ck editor -->
                            <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                            
                            <textarea class="form-control" name="post__discription" id="editor2"></textarea>
                            <!-- <textarea name="news_descrip" id="editor2" rows="10"> </textarea> -->
                            <script>
                                CKEDITOR.replace('editor2');
                            </script>
                        </div>

                        <label for="">Upload post Feature Images </label> <br>

                        <input type="file" name="post-img">
                        <pre> Choose jpg,jpeg,png 3:2 Ratio </pre>

                        <div class="form-group">
                            <label for="">Select Topic</label>
                            <select class="form-control" name="post__topic" id="">
                                <!-- |||||||||||||||||||||||||||||||| Getting Options From Database ||||||||||||||||||| -->
                                <?php
                                $topic_query = " SELECT * FROM `topic`  ORDER BY id DESC";
                                $result = mysqli_query($con, $topic_query);
                                if (mysqli_num_rows($result) > 0) {

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $topic_id = $row["id"];
                                        $topic_name = $row["name"];
                                ?>
                                        <option value="<?php echo $topic_name ?>"><?php echo $topic_name ?></option>
                                <?php
                                    }
                                }
                                ?>
                                <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

                            </select>
                        </div>
                        <div class="widget">
                            <h6>Forum Area</h6>
                            <input readonly class="form-control" type="text" value="<?php echo $city ?>">
                            <a class="text-primary" href="edit-profile.php"> change my area</a>
                        </div>


                    </div>

                </div>
                <!-- topic design ends -->

            </div>

        </form>


    </div>


</div>



<?php
include 'footer.php';
?>