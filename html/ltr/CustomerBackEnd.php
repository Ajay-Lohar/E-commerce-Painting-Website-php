<?php 
include 'Connection.php';

$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Email = $_POST['Email'];
$Telephone = $_POST['Telephone'];
$Password = $_POST['Password'];
$ConfirmPassword = $_POST['ConfirmPassword'];


$CustomerArray = array(
    'Firstname'=>"'".$Firstname."'",
    'Lastname'=>"'".$Lastname."'",
    'Email'=>"'".$Email."'",
    'Telephone'=>"'".$Telephone."'",
    'Password'=>"'".$Password."'",
    'ConfirmPassword'=>"'".$ConfirmPassword."'",

);

$Columns = implode(',',array_keys($CustomerArray));
$Values = implode(',',array_values($CustomerArray));

$sql = "INSERT INTO `customer`($Columns) VALUES ($Values)";

if($connection->query($sql)==true){
    echo '<script type="text/javascript">'; 
    echo 'alert("Customer add Successfully!");'; 
    echo 'window.location.href = "../../register.php"';
    echo '</script>';
    } 
    else 
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Error Occured! Customer not Saved!");'; 
    echo 'window.location.href = "../../register.php"';
    echo '</script>';
}

?>