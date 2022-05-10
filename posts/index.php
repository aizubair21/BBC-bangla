<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsibe.css">

    <title>Post</title>
</head>
<body>
    <?php
        require_once('../private/connection.php');
        require_once('../share/navigation.php'); 
    ?>
<pre>

    <?php 
        $row = admin();
        foreach ($row as $key => $value) {
           echo $value["user_name"]." ";
        }

    ?>

</pre>


<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <?php 
                $post = post();
                foreach ($post as $key => $post) {?>
                    <img src="../upload/uploads/<?php echo $post['image']?>" alt="<?php $post['image']?>"><br>
            <?php }?>
        </div>
        <div class="col-2"></div>
    </div>
</div>
</body>
</html>