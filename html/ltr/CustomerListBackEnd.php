<?php 
include 'Connection.php';
$sql = "SELECT * FROM `customer`";

$resultData = mysqli_query($connection , $sql);

?>