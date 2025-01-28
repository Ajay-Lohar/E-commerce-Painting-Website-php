<?php

include 'Connection.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM `category` WHERE id='$id'";

    if (mysqli_query($connection ,$sql))
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("delete painting category Successfully!");'; 
    echo 'window.location.href = "PaintingCatagoriesList.php"';
    echo '</script>';
    } 
    else 
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Error Occured! painting category Record not delete!");'; 
    echo 'window.location.href = "PaintingCatagoriesList.php"';
    echo '</script>';
    }
?>