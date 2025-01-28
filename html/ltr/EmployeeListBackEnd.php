<?php 
    include 'Connection.php';
    
    $sql= "SELECT * FROM `employee`";
    $resultData =mysqli_query($connection,$sql);

    ?>