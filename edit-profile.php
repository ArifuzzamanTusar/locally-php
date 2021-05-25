<?php
$page_tittle = "Create Post";
$page_id = 4;
include "header.php";
?>


<div class="page_body">

    <div class="container">


        <!-- ||||||||||| FORM STARTS ||||||||||||| -->
        <form action="edit-profile-process.php" method="post" enctype="multipart/form-data">
            <div class="p-3"></div>
            <div class="widget">
                <div class="row">
                    <div class="col-6">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="col-6">
                        
                        <button name="update_profile" type="submit" class="btn btn-primary float-right">Update</button>
                    </div>
                </div>

            </div>
            <div class="p-3"></div>



            <div class="row">

                <!-- ---Edit profile design starts -->
                <div class="col-12 pb-3">
                    <div class="widget">


                        <h4 class="widget">Intro</h4>
                        <div class="p-3"></div>
                        <style>
                            .display-none{
                                display: none;
                            }
                        </style>

                       

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <label for="">Profile Picture </label> <br>
                                <?php
                                if (isset($profile_picture)) {
                                ?>
                                    <img height="60px" src="uploads/user__avater/<?php echo $profile_picture ?>" alt="">
                                <?php
                                }
                               
                                ?>
                                
                                <input class="display-none" style="border: none;" type="text" name="db_avater_image" value="<?php echo $profile_picture ?>"> <br>
                                
                                
                                <input type="file" name="avater_image" value="avater_image">
                                <small id="l_name_HelpId" class="form-text text-muted">Must be valid image & 1:1</small>

                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="">Cover Picture </label> <br>
                                <?php
                                if (isset($profile_picture)) {

                                ?>
                                    <img height="60px" src="uploads/user__cover/<?php echo $cover_picture?>" alt="">
                                <?php
                                }
                              
                                ?>
                                
                                <input class="display-none" style="border: none;"  type="text" name="db_cover_image" value="<?php echo $cover_picture ?>"> <br>
                                

                                <input type="file" name="cover_image" value="cover_image">
                                <small id="l_name_HelpId" class="form-text text-muted">Must be valid image & 16:9</small>

                            </div>
                        </div>



                        <div class="form-group">

                            <label for="">Full Name</label>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" name="firstname" placeholder="" value="<?php echo $fname ?>" aria-describedby="l_name_HelpId">
                                    <small id="f_name_HelpId" class="form-text text-muted">First Name</small>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" name="lastname" placeholder="" value="<?php echo $lname ?>" aria-describedby="l_name_HelpId">
                                    <small id="l_name_HelpId" class="form-text text-muted">Last Name</small>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <label for="">Email Address</label>
                                <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $email ?>">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="">Phone Number</label>
                                <input type="phone" class="form-control" name="phone" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $phone ?>">
                            </div>

                        </div>


                        <div class="form-group">
                            <label for="">Bio</label>
                            <textarea name="bio" class="form-control" id="" rows="3"> <?php echo $bio ?> </textarea>
                        </div>
                        <div class="p-3">

                        </div>

                        <!-- ||||||||||\ IDENTIT |||||||||||| -->
                        <h4 class="widget ">Identity</h4>
                        <div class="p-3"></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <label for="">Position</label>
                                <input class="form-control" type="text" name="position" placeholder="" value="<?php echo $position ?>" aria-describedby="l_name_HelpId">

                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="">Company/institute Name</label>
                                <input class="form-control" type="text" name="company" placeholder="" value="<?php echo $company ?>" aria-describedby="l_name_HelpId">


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <label for="">Birth Date</label>
                                <input class="form-control" type="date" name="birthday" placeholder="" value="11/11/1999" aria-describedby="l_name_HelpId">

                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="">NID Number</label>
                                <input class="form-control" type="number" name="nid" placeholder="" value="<?php echo $nid ?>" aria-describedby="l_name_HelpId">


                            </div>
                        </div>

                        <div class="p-1"></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <select class="form-control" name="gender" id="">
                                        <option value=" <?php echo $gender?>" selected><?php if (strlen($gender)>2) {
                                             echo $gender;
                                        }
                                        else{
                                            echo "No gender Selected";
                                        } ?>
                                        </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Both">Both</option>

                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="">Area</label>
                                    <select class="form-control" name="city" id="">
                                        <!-- Default City  -->
                                        <option value="<?php echo $city ?>" selected ><?php echo $city ?></option>

                                        <!-- |||||||||  City List from Database |||||||||| -->
                                        <?php

                                        $query = "SELECT * FROM `districts` ORDER BY `districts`.`name` ASC";
                                        $result = mysqli_query($con, $query);
                                        if (mysqli_num_rows($result) > 0) {

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                // $dist_id = $row["dist_id"];
                                                $dist_name = $row["name"];
                                                $dist_bn_name = $row["bn_name"];
                                        ?>

                                                <option value="<?php echo $dist_name?>"> <?php echo $dist_name ?></option>



                                        <?php }
                                        }
                                        ?>
                                        <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

                                    </select>
                                </div>

                            </div>

                        </div>


                        <div class="p-3"></div>
                        <h4 class="widget">Social</h4>
                        <div class="p-3"></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $facebook ?>">
                                    <small id="emailHelpId" class="form-text text-muted">Facebook Username</small>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $twitter ?>">
                                    <small id="emailHelpId" class="form-text text-muted">Twitter Username</small>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="">Website</label>
                                    <input type="text" class="form-control" name="website" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $website ?>">
                                    <small id="emailHelpId" class="form-text text-muted">url (example: www.yourdomain.com)</small>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="">Linkedin</label>
                                    <input type="text" class="form-control" name="linkedin" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $linkedin ?>">
                                    <small id="emailHelpId" class="form-text text-muted">Linkedin username</small>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
                <!-- topic design ends -->

            </div>

        </form>


    </div>


</div>



<?php
include 'footer.php';
?>