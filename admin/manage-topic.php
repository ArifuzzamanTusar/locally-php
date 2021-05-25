<?php
$page_id = 1004;
$page_tittle = "Manage Topics";
include "admin-header.php";

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h3> All Topics</h3>
        </div>
        <div class="col-6">
            <div class="text-right">
                <a class="btn " href="add-topic.php">Add new</a>

            </div>

        </div>
    </div>
    <div class="topics">
        <div class="row pt-4">
            
            

            <?php

            // fetching data 
            $topic_query = " SELECT * FROM `topic`  ORDER BY id DESC";
            $result = mysqli_query($con, $topic_query);
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {



                    $topic_id = $row["id"];
                    $topic_name = $row["name"];
                    $topic_slug = $row["slug"];
                    $topic_disc = $row["discription"];
                    $topic_image = $row["image"];

                    // functions 

                    $topic_disc_length= strlen($topic_disc);
                    if ($topic_disc_length>60) {
                        $topic_disc_short= substr( $topic_disc,0, 210)."&nbsp;&nbsp;&nbsp;"."<a href='../single-topic.php?topic-id=".$topic_id."'>read more</a>";
                        //<a href="../topic?topic-id=<?php echo $topic_id> ">read more</a>
                    }
                    else{
                        $topic_disc_short=$topic_disc;
                    }
                    
                    

                    
                    
          

            // ----------------------------------------------

            

            ?>
                <!-- ---Topic design starts -->
                <div class="col-md-4 col-sm-4  pb-5">
                    
                    <div class=" topic">
                        <img src="../uploads/topic__image/<?php echo $topic_image?>" width="100%" alt="">
                        <div class="p-2">
                            <div class="topic-tittle pt-2"><b>Topic Name:</b><?php echo $topic_name?></div>
                            <div class="topic-slug"><b>Topic Slug:</b><?php echo $topic_slug?></div>
                            <div class="topic-details"><b>Topic Discription:</b>  <?php echo $topic_disc_short ?>
                            </div>
                            <div class="">
                                <a class="btn btn-primary" href="edit-topic.php?topic-id=<?php echo $topic_id?>"> Edit</a>
                                <a class="btn btn-danger" href="edit-topic.php?topic-id=<?php echo $topic_id?>#delete"> Delete</a>

                                <a class="float-right pt-3" href="manage-topic.php">
                                    <i class="material-icons">content_paste</i>
                                    <span>20</span>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- topic design ends -->
            <?php
                  }
                }
            ?>
        </div>
    </div>
</div>



<?php include "admin-footer.php" ?>