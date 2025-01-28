<?php   
include 'Connection.php' ;
 $id = $_GET['id'];

 $sql = "DELETE FROM `employee` WHERE id='$id' ";
 if (mysqli_query($connection,$sql))
		{
    	echo '<script type="text/javascript">'; 
		echo 'alert("Employee Delete Successfully!");'; 
		echo 'window.location.href = "./EmployeeList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Employee  Not deleted!");'; 
		echo 'window.location.href = "./EmployeeList.php"';
		echo '</script>';
		}

?>