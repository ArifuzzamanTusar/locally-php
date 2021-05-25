<?php
$page_id = 1004;
$page_tittle = "Add a new Topic";
include "admin-header.php";

?>

<div class="container-fluid">
    <form action="" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="col-6">
                <h3> Add new</h3>
            </div>
            <div class="col-6">
                <div class="text-right">
                    <button name="add_topic" type="submit" class="btn btn-primary">Publish</button>


                </div>

            </div>
        </div>

        <!-- form field starts -->
        <div class="pt-3"></div>

        <?php
        if (isset($topic_up_ok)) {
            echo '<div class="alert-light text-success text-center py-3">' . $topic_up_ok . '</div>';
        }
        if (isset($topic_up_failed)) {
            echo '<div class="alert-light text-danger text-center py-3">' . $topic_up_failed . '</div>';
        }

        ?>
        <div class="row">
            <div class="col-6">


                <div class="form-group">
                    <label for="">Topic Tittle</label>
                    <input type="text" class="form-control" name="topic__title" id="" aria-describedby="emailHelpId" placeholder="" required>

                </div>
            </div>
            <div class="col-6">


                <div class="form-group">
                    <label for="">Topic Slug</label>
                    <input type="text" class="form-control" name="topic__slug" id="" aria-describedby="emailHelpId" placeholder="" required>

                </div>
            </div>
        </div>

        <div class="pt-2"></div>
        <div class="row">
            <div class="col-12">

                <div class="form-group">
                    <label for="">Topic Discription</label>
                    <div class="p-3"></div>
                    <!-- ck editor -->
                    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                    <textarea class="form-control" name="topic__discription" id="editor2"></textarea>
                    <!-- <textarea name="news_descrip" id="editor2" rows="10"> </textarea> -->
                    <script>
                        CKEDITOR.replace('editor2');
                    </script>

                </div>
            </div>
        </div>

        <div class="pt-2">

            <label for="">Upload Topic Featured Image</label>
            <input type="file" class="form-control" id="myFile" name="topic-img">
            <!-- <input type="file" class="form-control-file" name="topic-img-1" id="" placeholder="" aria-describedby="fileHelpId"> -->
            <small id="emailHelpId" class="form-text text-muted">Please Choose a 3:4 image</small>
        </div>

    </form>

    <!-- validation -->



    <!-- Insert Process -->
    <?php
    if (isset($_POST['add_topic'])) {


        $topic_title = $_REQUEST['topic__title'];
        $topic_slug = $_REQUEST['topic__slug'];
        $topic_disc = $_REQUEST['topic__discription'];


        // topic__images

        #file name with a "random number" so that similar dont get replaced
        $topic_image = rand(1000, 10000) . "-" . $_FILES["topic-img"]["name"];

        #temporary file name to store file
        $tname = $_FILES["topic-img"]["tmp_name"];

        #upload directory path
        $uploads_dir = '../uploads/topic__image';

        #TO move the uploaded file to specific location
        move_uploaded_file($tname, $uploads_dir . '/' . $topic_image);



        // ..................................
        //Uplaoading to database


        $sql = "INSERT INTO `topic` (`name`, `slug`, `discription`, `image`) 
                                VALUES ('$topic_title', '$topic_slug', '$topic_disc', '$topic_image');";

        if (mysqli_query($con, $sql)) {

            $topic_up_ok = "Topic Sucessfully Added";
            echo '<div class="alert-light text-success text-center py-3">' . $topic_up_ok . '</div>';
        } else {
            $topic_up_failed = "Failed";
            echo '<div class="alert-light text-danger text-center py-3">' . $topic_up_failed . '</div>';
        }
    }

    ?>




</div>











<?php include "admin-footer.php" ?>