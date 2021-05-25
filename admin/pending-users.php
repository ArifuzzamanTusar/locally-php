<?php
$page_id = 1002;
$page_tittle = "Audience";
include "admin-header.php";

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h3> All Pending Users</h3>
        </div>
        <div class="col-6">
            <div class="text-right">
                <a class="btn " href="audience.php">All Users</a>

            </div>

        </div>
    </div>

    <div class="users">

       
        <div class="p-2"></div>


        <?php
         $topic_query = " SELECT * FROM `user` WHERE `status` LIKE 'pending' ORDER BY id DESC";
         $result = mysqli_query($con, $topic_query);
         if (mysqli_num_rows($result) > 0) {

             while ($row = mysqli_fetch_assoc($result)) {



                 $user_id = $row["id"];
                 $user_name = $row["username"];
                 $user_email = $row["email"];
                 $user_city = $row["city"];
                 $user_nid = $row["nid"];
                 $user_status = $row["status"];




        ?>
            <!-- html -->
            <div class="row table_row p-2">
                <div class="col-sm-9 col-md-9">
                    <div class="row">
                        <div class="col-3">
                            <div class=""><img class="user_avater" src="../images/no-image.png" alt="" width="80%"></div>
                        </div>
                        <div class="col-9 ">
                            <div class="row">
                                <div class="">
                                    <!-- <ul> -->
                                        <li class="user_lists"><b> ID: </b></li>
                                        <li class="user_lists"><b> Username:  &nbsp;</b></li>
                                        <li class="user_lists"><b> email: </b></li>
                                        <li class="user_lists"><b> City: </b></li>
                                        <li class="user_lists"><b> NID: </b></li>
                                        <li class="user_lists"><b>Status:</b></li>
                                    <!-- </ul> -->
                                </div>
                                <div class="">
                                    <!-- <ul> -->
                                        <li class="user_lists"><?php echo $user_id?> </li>
                                        <li class="user_lists"><?php echo $user_name ?> </li>
                                        <li class="user_lists"><?php echo $user_email ?> </li>
                                        <li class="user_lists"><?php echo $user_city ?> </li>
                                        <li class="user_lists"><?php echo $user_nid?> </li>
                                        <li class="user_lists"><?php echo $user_status?> </li>
                                    <!-- </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <td class="c1 t-row"><a class="btn btn-primary" href="approve-process.php?id=<?php echo $user_id?>">Approve</a></td> <br>
                    <td class="c1 t-row"><a class="btn btn-danger" href="ban-process.php?id=<?php echo $user_id?>">Ban This</a></td>

                </div>
            </div>
            <div class="p-2"></div>

            <!-- html -->

        <?php } } ?>


    </div>
</div>












<?php include "admin-footer.php" ?>