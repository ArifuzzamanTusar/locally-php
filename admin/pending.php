<?php 
$f_name= $_GET['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending</title>
</head>
<body>

    <center>
        <div class=" pt-5">


            <p>Hey <?php echo $f_name ?> !</p>
            <br>
            <h1>You Are a Pending User</h1>
            <br>
            <a href="logout.php?logout">Log Out</a>

        </div>
    
    </center>
    
</body>
</html>