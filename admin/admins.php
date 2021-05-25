<?php
$page_id = 1008;
$page_tittle = "Admins";
include "admin-header.php";

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h3> All Active Admins</h3>
        </div>
        <div class="col-6">
            <div class="text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Add an Admin
                </button>
                <a class="btn " href="admins-pending.php">Pending Admins</a>


            </div>

        </div>
    </div>






    <div class="admins">

        <?php
        $topic_query = " SELECT * FROM `admin_user` WHERE `status` LIKE '1' ORDER BY SL  DESC";
        $result = mysqli_query($con, $topic_query);
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {


                $admin_sl = $row["SL"];
                $admin_id = $row["user_id"];
                $admin_name = $row["username"];
                $admin_email = $row["email"];
                $admin_status = $row["status"];
                $first_name = $row["first_name"];
                $last_name = $row["last_name"];



        ?>
                <!-- html -->
                <div class="row table_row p-2">
                    <div class="col-sm-9 col-md-9">
                        <div class="row">
                            <div class="col-3">

                                <div class=""><img height="50px" width="50px" class="user_avater" src="../uploads/users-dp/chester-bennington.jpg" alt=""></div>


                            </div>
                            <div class="col-9 ">
                                <div class="row">
                                    <div class="">
                                        <!-- <ul> -->

                                        <li class="user_lists"><b> admin username: &nbsp; </b></li>

                                        <li class="user_lists"><b> Email: </b></li>
                                        <!-- </ul> -->
                                    </div>
                                    <div class="">
                                        <!-- <ul> -->

                                        <li class="user_lists"><?php echo $admin_name ?></li>

                                        <li class="user_lists"><?php echo $admin_email ?></li>

                                        <!-- </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">

                        <?php
                        if ($admin_name != $ad_username) {

                        ?>
                            <td class="c1 t-row"><a class="btn btn-primary" href="admin-unapprove.php?id=<?php echo $admin_sl ?>">Unapprove</a></td>

                        <?php
                        }
                        else{
                            echo "Its you!";
                        }

                        ?>


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


<!-- ADD ADMIN MODAL  ||||||||||||||||||||||||||||||||||||| -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Assign a new Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">

                    <!-- add admin process  -->



                    <!-- |||||||||||||||||||||||||||||||||||||| -->
                    <form action="admin-add-process.php" method="POST">


                        <label for="">Email</label>
                        <input name="new_email" type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="" required>

                        <label for="">Username</label>
                        <input name="new_user" type="text" class="form-control" name="" id="" aria-describedby="emailHelpId1" placeholder="" required>

                        <label for="">Password</label>
                        <input name="new_pass" type="password" class="form-control" name="" id="" aria-describedby="emailHelpId2" placeholder="" required>




                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="add_admin" type="submit" class="btn btn-primary">Assign admin</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include "admin-footer.php" ?>