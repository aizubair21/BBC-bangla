<?php

use function PHPSTORM_META\type;

session_start();
    require('../private/connection.php');
    require('../share/navigation.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Posts</title>
    <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsibe.css">
</head>
<body>
    <style>
        body {
            overflow-x: hidden;
        }
        .container {
            background-color: rgba(0,0,0, .1);
            
        }
        label {
            font-weight: 800;
        }
        /* .form-input {
        } */
        .section {
            padding: 5px;
            margin: 5px 0px;;
        }
    </style>
    <div class="container" style="padding:10px">
        <div class="w-100 p-5">
            <?php
                if (isset($_SESSION['status'])) {
                    echo $_SESSION['status'];
                }
            ?>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="bg-primary text-white p-5" style="font-size: 25px; font-weight:800; text-align:center">
                        Add New Post
                    </div>
                    <div class="card-body">
                        <form action="../function/add_post.php" method="POST" enctype="multipart/form-data">

                            <div class="section">
                                <label for="title" class="form-label">Post Title :</label>
                                <input type="text" name="title" id="title" placeholder="Your Post Title...." class="form-input form-control" required>
                            </div>

                            <div class="section">
                                <label  class="form-label" for="Category">Category :</label>
                                <select name="category" id="catefory" class="form-control" required multiple>
                                    <option value="0" >Select Your Ctegory</option>
                                    <?php
                                      $name = [];
                                      $id = [];
                                      foreach (category() as $key => $value) {
                                         array_push($name, $value['name']) ;
                                         array_push($id, $value['id']);
                                      }

                                      foreach ($name as $key => $value) {
                                          echo "<option value='$id[$key]'>"; echo $value; echo "</option>";
                                      }
                                    ?>
                                </select>
                            </div>


                            <div class="section">
                                <label for="description" class="form-label">Description :</label>
                                <textarea class="table-input form-control" name="description" id="description" cols="30" rows="10" placeholder="Post Descripton......." style="text-indent: 5px; padding:2px;" required></textarea>
                            </div>

                            <div class="input-group ">
                                <div class="section">
                                    <label class="form-label" for="post_image">Post Image :</label>
                                    <input type="file" name="image" id="post_image" class="form-input form-control" required>
                                </div>
                                <div class="section" >
                                    <label class="form-label" for="image_caption">Imapge Caption :</label>
                                    <input type="text" name="caption" id="image_caption" class="form-control form-input" placeholder="This is lorem image">
                                </div>

                                <div>
                                    <label for="video" class="form-label"> Post Video :</label>
                                    <input type="file" name="video" id="video" class="form-control form-input" placeholder="Video Related Post...">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between aign-items-baseline pt-10">
                                <div><a class="btn btn-danger" href="index.php">Cancel</a></div>
                                <input type="submit" class="btn btn-primary pe-3" value="Add Post" style="float:right">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script>
        function change(value){
            console.log(value);
        }
    </script>
    <?php
         session_unset();
    ?>
</body>
</html>