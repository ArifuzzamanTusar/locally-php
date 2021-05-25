<?php


include 'connection.php';
?>



<select name="" id="">
  <?php

  $query = "SELECT * FROM `districts` ORDER BY `districts`.`name` ASC";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {


      $dist_id = $row["dist_id"];
      $dist_name = $row["name"];
      $dist_bn_name = $row["bn_name"];


  ?>

      <option value="<?php echo $dist_name ?> "> <?php echo $dist_name ?></option>



  <?php }
  }
  ?>

</select>