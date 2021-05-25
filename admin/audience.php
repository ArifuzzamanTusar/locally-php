<?php
$page_id = 1002;
$page_tittle = "Audience";
include "admin-header.php";

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h3> All Audience</h3>
        </div>
        <div class="col-6">
            <div class="text-right">
                <a class="btn " href="pending-users.php">Check Pending users</a>

            </div>

        </div>
    </div>

    <div class="users">

        <?php
        $topic_query = " SELECT * FROM `user` WHERE `status` LIKE 'approved' ORDER BY id DESC";
        $result = mysqli_query($con, $topic_query);
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {



                $user_id = $row["id"];
                $user_name = $row["username"];
                $user_email = $row["email"];
                $user_city = $row["city"];
                $user_nid = $row["nid"];
                $user_status = $row["status"];
                $first_name = $row["firstname"];
                $last_name = $row["lastname"];
                $user_image = $row["avater_image"];



        ?>
                <!-- html -->
                <div class="row table_row p-2">
                    <div class="col-sm-9 col-md-9">
                        <div class="row">
                            <div class="col-3">
                                <?php
                                if (strlen($user_image) > 6) {
                                ?>
                                    <div class=""><img class="user_avater" src="../uploads/user__avater/<?php echo $user_image ?>" alt=""></div>
                                <?php
                                } else {
                                ?>
                                    <div class=""><img class="user_avater" src="../uploads/users-dp/chester-bennington.jpg" alt=""></div>
                                <?php


                                }
                                ?>

                            </div>
                            <div class="col-9 ">
                                <div class="row">
                                    <div class="">
                                        <!-- <ul> -->
                                        <li class="user_lists"><b> Uid: </b></li>
                                        <li class="user_lists"><b> Username: </b></li>
                                        <li class="user_lists"><b> Full Name: </b></li>
                                        <li class="user_lists"><b> City: </b></li>
                                        <li class="user_lists"><b>Designation: &nbsp;</b></li>
                                        <!-- </ul> -->
                                    </div>
                                    <div class="">
                                        <!-- <ul> -->
                                        <li class="user_lists"><?php echo $user_id ?></li>
                                        <li class="user_lists"><?php echo $user_name ?></li>
                                        <li class="user_lists"><?php echo $first_name . "&nbsp;" . $last_name ?></li>
                                        <li class="user_lists"><?php echo $user_city ?></li>
                                        <li class="user_lists">Student</li>
                                        <!-- </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <td class="c1 t-row"><a class="btn btn-primary" href="pending-process.php?id=<?php echo $user_id ?>">Unapprove</a></td>

                    </div>
                </div>
                <div class="p-2"></div>

                <!-- html -->


        <?php
            }
        }

        ?>



    </div>
</div>





<?php include "admin-footer.php" ?>