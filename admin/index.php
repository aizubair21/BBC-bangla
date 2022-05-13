<?php  
session_start();
require('../share/navigation.php');
    require('../private/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsibe.css">
</head>
<body>
    <div class="container" style="margin-top:20px">
    <div>
    <?php 
        if (isset($_SESSION['status'])) {
                echo $_SESSION['status'];
            }
            ?>
    </div>
        <div class="row justify-content-between align-items-baseline">
           
            <div class="col-md-8">
                <div class="alert alert-info">this is admin panel</div>

            </div>

            <div class="col-md-4">
                <a class="btn btn-primary" href="add_new_post.php">New Post</a>
            </div>
        </div>
    </div>
    <?php
         session_unset();
    ?>
</body>
</html>