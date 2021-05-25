<?php
$pending_user = $_REQUEST['user'];
?>

<!doctype html>
<html lang="en">

<head>
    <title>Welcome, <?php echo $pending_user ?> </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <center>

            <div class="p-5">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets1.lottiefiles.com/private_files/lf30_glnkkfua.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>

                <h1> Hellow <?php echo $pending_user ?></h1>
                <h4 class="text-danger">Your account has been Banned!</h4>
                <h6>Please contact to resoulation center!</h6>

                <div class="p-4">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                        RESOLUTION
                    </button>
                    <a name="" id="" class="btn btn-primary" href="index.php" role="button">BACK TO HOME</a>
                    <a name="" id="" class="btn btn-danger" href="logout.php?logout" role="button">Log Out</a>
                </div>
                <a href="about/terms-and-condition.html">Terms & Condition</a>
                <span> | </span>
                <a href="about">About Locally</a>

            </div>
        </center>
    </div>
    <!-- modal  |||||||||||||||||| -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ban Reason</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <p>Hey, <?php echo $pending_user ?>, we noticed that you have disobeyed locally's Terms & condition. so we decided to banned your accont</p>
                        <strong>Banned Reason:</strong> <span class="text-danger">No Reason</span>
                        <p>Please read <a href="about/terms-and-condition.html">Terms & Condition</a> and contact us</p>


                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a type="button" href="contact.php?uname=<?php echo $pending_user?>" class="btn btn-primary">Contact</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>