<?php
$connection = mysqli_connect('localhost', 'root', '');
mysqli_set_charset($connection,"utf8");

if (!$connection){
    die("Database Connection Failed".mysqli_error($connection));
}
// else{
//     echo "connection success";
// }
$select_db = mysqli_select_db($connection, 'colortrails_db');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
// else{
//     echo " databace connection success";
// }
?>