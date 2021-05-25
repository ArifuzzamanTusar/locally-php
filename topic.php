<?php
$page_tittle = "Topics";
$page_id = 2;
include "header.php";
?>

<div class="page_body">

    <div class="container">
        <div class="p-3"></div>
        <div class="widget">
            <h4>All Topics</h4>
        </div>
        <div class="p-3"></div>

        <!-- =======ALL TOPICS======== -->

        <div class="row">
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

                    $topic_disc_length = strlen($topic_disc);
                    if ($topic_disc_length > 60) {
                        $topic_disc_short = substr($topic_disc, 0, 180) . "&nbsp;" . "<a href='../single-topic.php?topic-id=" . $topic_id . "'>.......</a>";
                        //<a href="../topic?topic-id=<?php echo $topic_id> ">read more</a>
                    } else {
                        $topic_disc_short = $topic_disc;
                    }
                    // ----------------------------------------------

            ?>
                    <!-- ---Topic design starts -->
                    <div class="col-md-4 col-sm-4  pb-5">
                        <a href="single-topic.php?topic-id=<?php echo $topic_id ?>">
                            <div class="widget widget-hover">
                                <img src="uploads/topic__image/<?php echo $topic_image?>" width="100%" alt="">
                                <div class="p-2">
                                    <div class="h2"><?php echo $topic_name?></div>
                                    <style>
                                        .topic-details{
                                            color: red !important;
                                        }
                                    </style>

                                    <div class="topic-details"> <?php echo $topic_disc_short ?>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- topic design ends -->
            <?php
                }
            }
            ?>
        </div>



    </div>


</div>



<?php
include 'footer.php';
?>