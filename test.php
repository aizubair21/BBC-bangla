<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.1.0-dist//css/bootstrap.min.css">
    <script src="bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsibe.css">

    <title>test - bbc-bangls test projects</title>

</head>
<body>
    <?php //include('share/navigation.php')
            include('private/connection.php');
    ?>

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="test.php" method="post" enctype="multipart/form-data">
                            <input type="text" name="name" id="name" value="zubair" class="form-control form-input">
                            <input type="file" name="image" id="image" class="form-control form-input">
                            <input class="btn btn-info pt-10" type="submit" value="Ok">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>

<?php
    
?>