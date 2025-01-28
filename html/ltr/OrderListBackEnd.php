<?php 
include 'Connection.php';
$sql = "SELECT * FROM `order`";

$resultData = mysqli_query($connection , $sql);

?>