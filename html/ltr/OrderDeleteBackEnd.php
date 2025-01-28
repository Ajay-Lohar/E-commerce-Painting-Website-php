<?php 
include 'Connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM `order` WHERE id='$id'";

if(mysqli_query($connection , $sql))
{
    echo '<script type="text/javascript">'; 
    echo 'alert("delete Orders  Successfully!");'; 
    echo 'window.location.href = "OrderList.php"';
    echo '</script>';
    } 
    else 
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Error Occured! Orders Record not delete!");'; 
    echo 'window.location.href = "OrderList.php"';
    echo '</script>';
    }
?>