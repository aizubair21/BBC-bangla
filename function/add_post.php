<pre>
  <?php
    print_r($_POST);
  ?>
</pre>


<!-- <img src="../upload/uploads/<?php echo($_FILES['image']['name'])?> " alt="image not found"> -->
<?php

session_unset();
session_start();
$title = $_POST['title'];
$description = $_POST['description'];
$image_caption = $_POST['caption'];
$image = $_FILES['image']['name'];
$category = $_POST['category'];
require_once('../private/connection.php');

$data = "INSERT INTO posts(title,description,image_caption,image,category) VALUES('$title', '$description', '$image_caption', '$image', $category)";

if (mysqli_query($conn, $data)) {
  $_SESSION["status"] = "Post Added !";
  //echo 'post added !';
  //echo "<br>";
} else {
  $_SESSION["status"] = mysqli_errno($conn);
  //echo mysqli_error($conn);
  //echo "<br>";
};

//image save to server//
if (($_FILES["image"]["type"] == "image/gif") || ($_FILES["image"]["type"] == "image/jpeg") || ($_FILES["image"]["type"] == "image/png") || ($_FILES["image"]["type"] == "image/pjpeg")) {
  if ($_FILES["image"]["error"] > 0) {
    echo "Return code: " . $_FILES["image"]["error"];
  }else {
     //echo $_FILES["image"]["name"] ."<br>";
    // echo $_FILES["image"]["size"] ."<br>";
    // echo $_FILES["image"]["type"] ."<br>"; 

    if (move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/uploads/". basename($_FILES['image']['name']))){
      //echo "file uploded";
    } else {
      echo $_FILES['image']['error'];
    }
    header("location: ../admin/add_new.php");
    
  }
}else {
  echo "This type of extention not supported. <br> You can use Jpg, Png, Jpeg, Gig formate to test.";
  
}

