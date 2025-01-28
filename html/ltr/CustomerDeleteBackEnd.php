<?php 
include 'Connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM `customer` WHERE id='$id'";

if(mysqli_query($connection , $sql))
{
    echo '<script type="text/javascript">'; 
    echo 'alert("delete Customer  Successfully!");'; 
    echo 'window.location.href = "CustomerList.php"';
    echo '</script>';
    } 
    else 
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Error Occured! Customer Record not delete!");'; 
    echo 'window.location.href = "CustomerList.php"';
    echo '</script>';
    }
?>