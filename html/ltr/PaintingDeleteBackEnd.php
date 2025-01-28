<?php

include 'Connection.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM `paintings` WHERE id='$id'";

    if (mysqli_query($connection ,$sql))
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("delete painting  Successfully!");'; 
    echo 'window.location.href = "PaintingList.php"';
    echo '</script>';
    } 
    else 
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Error Occured! painting Record not delete!");'; 
    echo 'window.location.href = "PaintingList.php"';
    echo '</script>';
    }
?>