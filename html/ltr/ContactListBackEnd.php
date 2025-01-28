<?php 
include 'Connection.php';
$sql = "SELECT * FROM `contact`";

$resultData = mysqli_query($connection , $sql);

?>