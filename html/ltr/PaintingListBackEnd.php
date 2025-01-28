<?php 
    include 'Connection.php';

    $sql="SELECT * FROM `paintings` ";
    // echo $sql;
    $resultData = mysqli_query($connection , $sql);
    // print_r($resultData);
?>
