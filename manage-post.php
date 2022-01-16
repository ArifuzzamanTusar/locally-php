<?php
$page_tittle = "Manage Posts";
$page_id = 4;
include "header.php";

?>
<div class="p-3"></div>
<div class="container">
    <div class="widget">
        <h4>Manage Posts</h4>
    </div>
</div>
<div class="p-3"></div>
<div class="container">

    <div class="row">
        <?php
        $topic_query = "SELECT *  FROM `posts` WHERE  `author_id` LIKE '$userid'  ORDER BY `id`  DESC";
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
                $post_stats = $row["post_status"];
                $post_tittle = $row["tittle"];
                // functions 

                $topic_disc_length = strlen($post_disc);
                if ($topic_disc_length > 60) {
                    $topic_disc_short = substr($post_disc, 0, 800);
                    //<a href="../topic?topic-id=<?php echo $topic_id> ">read more</a>
                } else {
                    $topic_disc_short = $post_disc;
                }
        ?>

                <!-- Crud Starts  -->

                <div class="col-md-4 col-sm-4  ">
                    <div class="widget">

                        <div class="single_post_category">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#imgID<?php echo $post_id ?>"><i class="fas fa-pencil-alt"></i> </button>
                        </div>

                        <a href="post.php?id= <?php echo $post_id ?>"><img class="mng_post_image" src="<?php echo $post_image ?>" width="100%" alt=""></a>

                        <div class="p-2">
                            <div class="topic-tittle pt-2"><b>Status:</b> <span class="<?php echo $post_stats ?>"><?php echo $post_stats ?></span></div>
                            <div class="topic-slug"><b>Post ID</b> <?php echo $post_topic_id ?></div>
                            <div class="topic-slug"><b>Date: </b><?php echo $post_time ?></div>
                            <div class="topic-details"><b> Post Content: </b> </div>
                            <div class="post_height"><?php echo $topic_disc_short ?></div>
                            <div class="">
                                <div class="p-2"></div>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editID<?php echo $post_id ?>">Edit </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delID<?php echo $post_id ?>">Delete </button>
                            </div>

                            <!-- ||||||||||||||||||||||||  MODALS |||||||||||||||||||||||| -->
                            <!-- Modal for Dnamic edit -->
                            <!-- ============================================================== -->
                            <div class="modal fade" id="editID<?php echo $post_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="updatepost.php" method="POST" enctype="multipart/form-data">
                                                <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

                                                <textarea class="form-control" name="post__discription" id="ck<?php echo $post_id ?>">
                                                <?php echo $post_disc ?>
                                                </textarea>

                                                <script>
                                                    CKEDITOR.replace('ck<?php echo $post_id ?>');
                                                </script>

                                                <!-- necesarry post meta  -->
                                                <input style="display: none;" type="text" name="post_id" value="<?php echo $post_id ?>">

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                    <button name="update_post" type="submit" class="btn btn-success">Update</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>




                            <!-- Modal for Change Featured Image -->
                            <!-- ============================================================== -->



                            <div class="modal fade" id="imgID<?php echo $post_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">EDIT Image</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="updatepostimage.php" method="POST" enctype="multipart/form-data">

                                                <img class="mng_post_image" src="<?php echo $post_image ?>" width="100%" alt="">

                                                <!-- ========================================================== -->
                                                <div class="p-2">Change Image</div>


                                                <div class="custom-file">
                                                    <input name="post-img" type="file" class="custom-file-input" id="customFileInput" aria-describedby="customFileInput">
                                                    <label class="custom-file-label" for="customFileInput">Select a file</label>
                                                </div>
                                                <script>
                                                    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
                                                        var name = document.getElementById("customFileInput").files[0].name;
                                                        var nextSibling = e.target.nextElementSibling
                                                        nextSibling.innerText = name
                                                    })
                                                </script>


                                                <!-- necesarry post meta  -->
                                                <input style="display: none;" type="text" name="post_id" value="<?php echo $post_id ?>">

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                    <button name="update_post_image" type="submit" class="btn btn-success">Update</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Modal for Edit -->
                            <!-- ============================================================== -->

                            <!-- ---------------------------------------- -->
                            <!-- ============================================================== -->

                            <!-- Modal for delete -->
                            <div class="modal fade" id="delID<?php echo $post_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Confirm Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- ---------------Lottie -------------------   -->

                                            <center>
                                                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                                <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_VmD8Sl.json" background="transparent" speed="1" style="width: 200px;" loop autoplay></lottie-player>
                                            </center>



                                            <!-- ---------------------------- -->
                                            <div class="text-warning">Are you sure to delete? </div>
                                            <div class="post_height"><?php echo $topic_disc_short ?>

                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <a name="" id="" class="btn btn-danger" href="delete_post.php?id=<?php echo $post_id ?>" role="button">Delete</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- ============================================================== -->
                            <!-- ------------------------------------------------- -->


                            <!-- ||||||||||||||||||||||||  MODALS |||||||||||||||||||||||| -->

                        </div>
                        <div class="p-3"></div>
                    </div>
                </div>
        <?php
            }
        }
        ?>






    </div>
</div>

<div class="p-3"></div>




<!-- |||||||||||||||||||||||||||||||||||||||||| -->








<?php include 'footer.php'; ?>