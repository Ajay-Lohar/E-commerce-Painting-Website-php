<?php   
include 'Connection.php' ;
 $id = $_GET['id'];

 $sql = "DELETE FROM `company` WHERE id='$id' ";
 if (mysqli_query($connection,$sql))
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Company Delete Successfully!");'; 
		echo 'window.location.href = "./CompanyList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Company Not deleted!");'; 
		echo 'window.location.href = "./CompanyList.php"';
		echo '</script>';
		}

?>