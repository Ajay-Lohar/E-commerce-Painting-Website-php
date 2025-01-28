<?php 
    include 'Connection.php';
    
    $sql= "SELECT * FROM `company`";
    $resultData =mysqli_query($connection,$sql);

    ?>