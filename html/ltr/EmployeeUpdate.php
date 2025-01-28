<?php 
include 'Connection.php';
$id                =$_POST['id'];
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

  $sql=" UPDATE `employee` SET
                        FirstName       = '$FirstName',
                        LastName          ='$LastName',
                        EmailAddress      ='$EmailAddress',
                        PhoneNumber       ='$PhoneNumber',
                        Gender            ='$Gender',
                        DOB               ='$DOB',
                        Age               ='$Age',
                        PinCode           ='$PinCode',
                        Street            ='$Street',
                        City              ='$City',
                        State             ='$State',
                        Country           ='$Country',
                        EmployeeCode      ='$EmployeeCode',
                        EmploymentType    ='$EmploymentType',
                        CurrentWorkStatus ='$CurrentWorkStatus',
                        ReportingTo       ='$ReportingTo',
                        Form16Number      ='$Form16Number',
                        JoiningDate       ='$JoiningDate',
                        Department        ='$Department',
                        PayGrade          ='$PayGrade',
                        Designation       ='$Designation',
                        PayroleStatecode  ='$PayroleStatecode',
                        PanCard           ='$RenameFile1',
                        BankPassbook      ='$RenameFile2'

                        WHERE id= $id";

if ($connection ->query($sql) === true)
{
   echo '<script type="text/javascript">'; 
   echo 'alert("Employee Update Successfully!");'; 
   echo 'window.location.href = "./EmployeeList.php"';
   echo '</script>';
} 
   else 
{
  echo '<script type="text/javascript">'; 
  echo 'alert("Employee  Update Unsuccessfully!");'; 
  echo 'window.location.href = "./EmployeeMaster.php"';
  echo '</script>';
}
  
  
  