<?php
//database connection//
$host_name = "localhost";
$user_name = "root";
$password = "";
$bd_name = "bbc_bangla";
$conn = mysqli_connect($host_name,$user_name,$password,$bd_name);

function connecion () {
    $host_name = "localhost";
    $user_name = "root";
    $password = "";
    $bd_name = "bbc_bangla";

    return $conn = mysqli_connect($host_name,$user_name,$password,$bd_name);

}

//get category
function category () {

    $table_querry = 'SELECT * FROM category';
    return row(connecion(),$table_querry);
}

//get posts
function post () {

    $table_querry = 'SELECT * FROM posts';
    $row = row(connecion(),$table_querry);
    return $row;
}

//admin
function admin () {

    $table_querry = 'SELECT * FROM admin';
    $row = row(connecion(),$table_querry);
    return $row;
}

function row ($db_connection_string, $query_string) {
    $row = [];
    $name = [];

    $result = mysqli_query($db_connection_string, $query_string);
    if (mysqli_num_rows($result) > 0) {

         // output data of each row
        while($t_row = mysqli_fetch_assoc($result)) {
           array_push($row, $t_row);
        }
        return $row;

    } else {
        return  "0 results";
    }
}
