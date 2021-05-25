<?php
$page_id = 1004;
$page_tittle = "Edit Topics";
include "admin-header.php";

?>
<!-- get post id  -->
<?php
if (isset($_GET['topic-id'])) {
    # code...

    $topic_id = $_GET['topic-id'];
} else {

?>
    <div class="bg-danger p-3 text-light">
        No Topic Selected
    </div>

<?php
}

?>

<!-- getting data for value  -->
<?php
$select_query = " SELECT * FROM `topic` WHERE `id` = $topic_id ";
$result = mysqli_query($con, $select_query);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {



        $db_topic_id = $row["id"];
        $db_topic_name = $row["name"];
        $db_topic_slug = $row["slug"];
        $db_topic_disc = $row["discription"];
        $db_topic_image = $row["image"];
    }
}

?>


<div class="container-fluid">
    <form action="" method="post" enctype="multipart/form-data">


        <div class="row">
            <div class="col-6">
                <h3> Editing topic : ID-<?php echo $topic_id ?></h3>
            </div>
            <div class="col-6">
                <div class="text-right">
                    <button name="add_topic" type="submit" class="btn btn-primary">Update Now</button>


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
                    <input type="text" class="form-control" name="topic__title" id="" aria-describedby="emailHelpId" placeholder="" required value="<?php echo $db_topic_name ?>">

                </div>
            </div>
            <div class="col-6">


                <div class="form-group">
                    <label for="">Topic Slug</label>
                    <input type="text" class="form-control" name="topic__slug" id="" aria-describedby="emailHelpId" placeholder="" required value="<?php echo $db_topic_slug ?>">

                </div>
            </div>
        </div>

        <div class="pt-2"></div>
        <div class="row">
            <div class="col-12">

                <div class="form-group">
                    <label for="">Topic Discription</label>
                    <div class="p-3"></div>
                    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                    <textarea class="form-control" name="topic__discription" id="editor2"> <?php echo $db_topic_disc ?></textarea>
                    <!-- <textarea name="news_descrip" id="editor2" rows="10"> </textarea> -->
                    <script>
                        CKEDITOR.replace('editor2');
                    </script>

                </div>
            </div>
        </div>
        <div class="p-t"></div>
        <div class="image">
            <label for=""> Image</label> <br>
            <p>image name: <?php echo $db_topic_image ?></p>
            <img width="20%" src="../uploads/topic__image/<?php echo $db_topic_image ?>" alt="">
        </div>

        <div class="pt-2">

            <label for="">Upload Topic Featured Image</label>
            <input type="file" class="form-control" id="myFile" name="topic-img">
            <!-- <input type="file" class="form-control-file" name="topic-img-1" id="" placeholder="" aria-describedby="fileHelpId"> -->
            <small id="emailHelpId" class="form-text text-muted">Please Choose a 3:4 image</small>
        </div>

    </form>

    <div class="delete" id="delete">
        <form action="#delete" method="post">
            <input name="delete" style="display: none;" type="text" value="<?php echo $topic_id ?>">
            <button name="delete_topic" type="submit" class="btn btn-danger p-3">Delete This topic</button>
        </form>
        <?php

        if (isset($_POST['delete_topic'])) {
            $delete_topic = $_REQUEST['delete'];
            $sql = "DELETE FROM `topic` WHERE `topic`.`id` = $delete_topic";

            if (mysqli_query($con, $sql)) {

                $topic_up_ok = "Topic Sucessfully Deleted";
                echo '<div class="alert-light text-success text-center py-3">' . $topic_up_ok . '</div>';
                echo mysqli_error($con);
               
            } else {
                $topic_up_failed = "Failed";
                echo '<div class="alert-light text-danger text-center py-3">' . $topic_up_failed . '</div>';
                echo mysqli_error($con);
            }
        }
        ?>
    </div>

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
        if (strlen($topic_image) < 6) {
            $topic_image = $db_topic_image;
        }

        // ..................................
        //Updating to database


        $sql = "UPDATE `topic` SET `name` = '$topic_title', `slug` = '$topic_slug', `discription` = '$topic_disc', `image` = '$topic_image' WHERE `topic`.`id` = $topic_id;";

        if (mysqli_query($con, $sql)) {

            $topic_up_ok = "Topic Sucessfully Added";
            echo '<div class="alert-light text-success text-center py-3">' . $topic_up_ok . '</div>';
            echo mysqli_error($con);
            echo $sql;
        } else {
            $topic_up_failed = "Failed";
            echo '<div class="alert-light text-danger text-center py-3">' . $topic_up_failed . '</div>';
            echo mysqli_error($con);
        }
    }

    ?>




</div>



<?php include "admin-footer.php" ?>