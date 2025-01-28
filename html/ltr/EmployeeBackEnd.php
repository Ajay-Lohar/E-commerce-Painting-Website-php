<?php include 'Connection.php'; 
 $FirstName         =$_POST['FirstName'];
 $LastName          =$_POST['LastName'];
 $EmailAddress      =$_POST['EmailAddress'];
 $PhoneNumber       =$_POST['PhoneNumber'];
 $Gender            =$_POST['Gender'];
 $DOB               =$_POST['DOB'];
 $Age               =$_POST['Age'];
 $PinCode           =$_POST['PinCode'];
 $Street            =$_POST['Street'];
 $City              =$_POST['City'];
 $State             =$_POST['State'];
 $Country           =$_POST['Country'];
 $EmployeeCode      =$_POST['EmployeeCode'];
 $EmploymentType    =$_POST['EmploymentType'];
 $CurrentWorkStatus =$_POST['CurrentWorkStatus'];
 $ReportingTo       =$_POST['ReportingTo'];
 $Form16Number      =$_POST['Form16Number'];
 $JoiningDate       =$_POST['JoiningDate'];
 $Department        =$_POST['Department'];
 $PayGrade          =$_POST['PayGrade'];
 $Designation       =$_POST['Designation'];
 $PayroleStatecode  =$_POST['PayroleStatecode'];
 $PanCard           =$_FILES['PanCard'];
 $BankPassbook      =$_FILES['BankPassbook'];
 

 $ext1=strtolower(pathinfo($PanCard["name"],PATHINFO_EXTENSION));
 $ext2=strtolower(pathinfo($BankPassbook["name"],PATHINFO_EXTENSION));

 $RenameFile1=$FirstName."pancard".".".$ext1;
 $RenameFile2=$FirstName."bankpassbook".".".$ext2;
 
 


$EmployeeArray= array(
                        
                        'FirstName' => "'".$FirstName."'",
                        'LastName' => "'".$LastName."'",
                        'EmailAddress'=>"'".$EmailAddress."'",
                        'PhoneNumber       '=>"'".$PhoneNumber."'",
                        'Gender            '=>"'".$Gender."'",
                        'DOB               '=>"'".$DOB."'",
                        'Age               '=>"'".$Age."'",
                        'PinCode           '=>"'".$PinCode."'",
                        'Street            '=>"'".$Street."'",
                        'City              '=>"'".$City."'",
                        'State             '=>"'".$State."'",
                        'Country           '=>"'".$Country."'",
                        'EmployeeCode      '=>"'".$EmployeeCode."'",
                        'EmploymentType    '=>"'".$EmploymentType."'",
                        'CurrentWorkStatus '=>"'".$CurrentWorkStatus."'",
                        'ReportingTo       '=>"'".$ReportingTo."'",
                        'Form16Number      '=>"'".$Form16Number."'",
                        'JoiningDate       '=>"'".$JoiningDate."'",
                        'Department        '=>"'".$Department."'",
                        'PayGrade          '=>"'".$PayGrade."'",
                        'Designation       '=>"'".$Designation."'",
                        'PayroleStatecode  '=>"'".$PayroleStatecode."'",
                        'PanCard           '=> "'".$RenameFile1."'",
                        'BankPassbook      '=> "'".$RenameFile2."'",
                       
                        





);
// print_r($EmployeeArray);

$columns= implode (',',array_keys($EmployeeArray));
$values= implode (',',array_values($EmployeeArray));

$sql="INSERT INTO  `employee`($columns)VALUES($values)";
if ($connection->query($sql) === TRUE)
		{
            echo $last_id=$connection->insert_id;
		$target_dir="Uploads/".$last_id;
		if(!file_exists($target_dir))
          {
			mkdir($target_dir);
			$target_file1=$target_dir."/".$RenameFile1;
			$target_file2=$target_dir."/".$RenameFile2;
			
			move_uploaded_file($PanCard["tmp_name"],$target_file1);
			move_uploaded_file($BankPassbook["tmp_name"],$target_file2);
		
		  }
    	echo '<script type="text/javascript">'; 
		echo 'alert("Employee Add Successfully!");'; 
		echo 'window.location.href = "./EmployeeList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Employee  Add Unuccessfully!");'; 
		echo 'window.location.href = ".EmployeeMaster.php"';
		echo '</script>';
		}

?>