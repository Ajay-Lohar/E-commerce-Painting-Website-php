<?php 
include 'Connection.php';

$PayerFirstName = $_POST['PayerFirstName'];
$PayerLastName = $_POST['PayerLastName'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];
$Country = $_POST['Country'];
$PinCode = $_POST['PinCode'];
$CardName = $_POST['CardName'];
$CardNumber = $_POST['CardNumber'];
$ExpDate = $_POST['ExpDate'];
$CVV = $_POST['PinCode'];

$OrderArray = array(
    'PayerFirstName'=>"'".$PayerFirstName."'",
    'PayerLastName'=>"'".$PayerLastName."'",
    'Email'=>"'".$Email."'",
    'PhoneNumber'=>"'".$PhoneNumber."'",
    'Address'=>"'".$Address."'",
    'City'=>"'".$City."'",
    'State'=>"'".$State."'",
    'Country'=>"'".$Country."'",
    'PinCode'=>"'".$PinCode."'",
    'CardName'=>"'".$CardName."'",
    'CardNumber'=>"'".$CardNumber."'",
    'ExpDate'=>"'".$ExpDate."'",
    'CVV'=>"'".$PinCode."'",

);

$Columns = implode(',',array_keys($OrderArray));
$Values = implode(',',array_values($OrderArray));

$sql = "INSERT INTO `order`($Columns) VALUES ($Values)";

if($connection->query($sql)==true){
    echo '<script type="text/javascript">'; 
    echo 'alert("Details add Successfully!");'; 
    echo 'window.location.href = "../../order2.php"';
    echo '</script>';
    } 
    else 
    {
    echo '<script type="text/javascript">'; 
    echo 'alert("Error Occured! Details not Saved!");'; 
    echo 'window.location.href = "../../order2.php"';
    echo '</script>';
}

?>