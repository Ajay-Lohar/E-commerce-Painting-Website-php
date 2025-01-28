<?php 
include 'Connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM `contact` WHERE id='$id'";

if(mysqli_query($connection , $sql))
{
    echo '<script type="text/javascript">'; 
    echo 'alert("delete Contact  Successfully!");'; 
    echo 'window.location.href = "ContactList.php"';
    echo '</script>';
    } 
    else 
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Error Occured! Contact Record not delete!");'; 
    echo 'window.location.href = "ContactList.php"';
    echo '</script>';
    }
?>