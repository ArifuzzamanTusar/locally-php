<?php
$page_id = 1007;
$page_tittle = "Reports";
include "admin-header.php";

?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css">








<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h3> All Reports</h3>
        </div>
        <div class="col-6">
            <div class="text-right">
                <a class="btn " href="add-topic.php">Add new</a>

            </div>

        </div>
    </div>
    <!-- |||||||||||||||||||||||||||||||\\ -->




    <div style="overflow: auto;" class="">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>User</th>
                    <th>Criteria</th>
                    <th>Subect</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $report_query = " SELECT * FROM `reports` ORDER BY `reports`.`id` DESC ";
                $result = mysqli_query($con, $report_query);
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $report_id = $row["id"];
                        $report_userid = $row["userid"];
                        $report_username = $row["username"];
                        $report_email = $row["email"];
                        $report_subject = $row["subject"];
                        $report_criteria = $row["criteria"];
                        $report_message = $row["message"];
                        $report_date = $row["date"];
                        $report_time = $row["time"];





                ?>
                        <tr>

                            <td><?php echo $report_id ?></td>
                            <td><?php echo $report_username ?></td>
                            <td><?php echo $report_criteria ?></td>
                            <td><?php echo $report_subject ?></td>
                            <td><?php echo $report_date ?></td>
                            <td style="text-align: center;"> <a data-toggle="modal" href="#mgsid<?php echo $report_id ?>" class="btn btn-primary">view</a></td>
                        </tr>
                        <div class="modal fade" id="mgsid<?php echo $report_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Report Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">

                                            <div class=""><strong>Date:</strong> <?php echo $report_date ?></div>
                                            <div class=""><strong>Time:</strong> <?php echo $report_time ?></div>
                                            <div class=""><strong>From:</strong> <?php echo $report_email ?></div>
                                            <div class=""><strong>User Name:</strong> <?php echo $report_username ?></div>
                                            <div class=""><strong>Criteria:</strong> <?php echo $report_criteria ?></div>
                                            <div class=""><strong>Subject:</strong> <?php echo $report_subject ?></div>
                                            <div class=""><strong>Message:</strong> <?php echo $report_message ?></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="mailto:<?php echo $report_email?>" type="button" class="btn btn-primary text-light">Send Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>


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