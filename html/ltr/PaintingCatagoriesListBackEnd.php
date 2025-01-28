<?php 
    include 'Connection.php';

    $sql="SELECT * FROM `category` ";
    // echo $sql;
    $resultData = mysqli_query($connection , $sql);
    // print_r($resultData);
?>
