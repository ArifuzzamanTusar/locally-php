<?php
$page_id = 1008;
$page_tittle = "Pending Admins";
include "admin-header.php";

?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css">








<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h3> All Pending admins</h3>
        </div>
        <div class="col-6">
            <div class="text-right">
                <!-- <a class="btn " href="add-topic.php">Add new</a> -->

            </div>

        </div>
    </div>
    <!-- |||||||||||||||||||||||||||||||\\ -->




    <div style="overflow: auto;" class="">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $report_query = "SELECT * FROM `admin_user` WHERE `status` LIKE '0'";
                $result = mysqli_query($con, $report_query);
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $adreq_id = $row["SL"];
                        $adreq_username = $row["username"];
                        $adreq_email = $row["email"];






                ?>
                        <tr>

                            <td><?php echo $adreq_id ?></td>
                            <td><?php echo $adreq_username ?></td>
                            <td><?php echo $adreq_email ?></td>
                            <td style="text-align: center;"> <a data-toggle="modal" href="#mgsid<?php echo $adreq_id ?>" class="btn btn-primary">Approve</a></td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="mgsid<?php echo $adreq_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Are you sure to Approve "<?php echo $adreq_username?>"</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <center>
                                        
                                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_dVJMow.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
                                        
                                        </center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="admin-approve.php?id=<?php echo $adreq_id ?>" type="button" class="btn btn-primary text-light">APPROVE</a>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- ================================ -->



                <?php
                    }
                }
                ?>


            </tbody>

        </table>
    </div>



</div>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


<?php include "admin-footer.php" ?>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>