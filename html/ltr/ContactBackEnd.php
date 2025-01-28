<?php 
include 'Connection.php';

$YourName = $_POST['YourName'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];
$Messege = $_POST['Messege'];


$ContactArray = array(
    'YourName'=>"'".$YourName."'",
    'Email'=>"'".$Email."'",
    'PhoneNumber'=>"'".$PhoneNumber."'",
    'Messege'=>"'".$Messege."'",

);

$Columns = implode(',',array_keys($ContactArray));
$Values = implode(',',array_values($ContactArray));

$sql = "INSERT INTO `contact`($Columns) VALUES ($Values)";

if($connection->query($sql)==true){
    echo '<script type="text/javascript">'; 
    echo 'alert("Contact add Successfully!");'; 
    echo 'window.location.href = "../../Contact1.php"';
    echo '</script>';
    } 
    else 
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Error Occured! Contact not Saved!");'; 
    echo 'window.location.href = "../../Contact1.php"';
    echo '</script>';
}

?>