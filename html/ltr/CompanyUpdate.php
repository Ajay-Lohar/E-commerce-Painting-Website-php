<?php 
include 'Connection.php';
$id=$_POST['id'];
$CompanyName =$_POST['CompanyName'];
$RegistrationNumber=$_POST['RegistrationNumber'];
$RegistrationType  =$_POST['RegistrationType'];
$PhoneNumber               =$_POST['PhoneNumber'];
$GSTNumber            =$_POST['GSTNumber'];
$PANNumber              =$_POST['PANNumber'];
$EstablishedYear           =$_POST['EstablishedYear'];
$FirstName             =$_POST['FirstName'];
$LastName         =$_POST['LastName'];
$StreetAdmin             =$_POST['StreetAdmin'];
$PINCodeAdmin        =$_POST['PINCodeAdmin'];
$TalukaAdmin        =$_POST['TalukaAdmin'];
$DistrictAdmin        =$_POST['DistrictAdmin'];
$StateAdmin        =$_POST['StateAdmin'];
$CountryAdmin        =$_POST['CountryAdmin'];
$StreetBilling        =$_POST['StreetBilling'];
$PINCodeBilling        =$_POST['PINCodeBilling'];
$TalukaBilling        =$_POST['TalukaBilling'];
$DistrictBilling        =$_POST['DistrictBilling'];
$StateBilling        =$_POST['StateBilling'];
$CountryBilling        =$_POST['CountryBilling'];
$StreetShipping        =$_POST['StreetShipping'];
$PINCodeShipping        =$_POST['PINCodeShipping'];
$TalukaShipping        =$_POST['TalukaShipping'];
$DistrictShipping        =$_POST['DistrictShipping'];
$StateShipping        =$_POST['StateShipping'];
$CountryShipping        =$_POST['CountryShipping'];
$PrimaryEmail        =$_POST['PrimaryEmail'];
$HREmail        =$_POST['HREmail'];
$SalesEmail        =$_POST['SalesEmail'];
$CompanyWebsiteurl        =$_POST['CompanyWebsiteurl'];
$MobileNumber        =$_POST['MobileNumber'];
$TelephoneNumber        =$_POST['TelephoneNumber'];
$BankName        =$_POST['BankName'];
$BranchName        =$_POST['BranchName'];
$AccountName        =$_POST['AccountName'];
$AccountNumber        =$_POST['AccountNumber'];
$BankIFSCcode        =$_POST['BankIFSCcode'];
$BankMICRcode        =$_POST['BankMICRcode'];
$CompanyPancard        =$_POST['CompanyPancard'];
$Banking        =$_POST['Banking'];
$Registration        =$_POST['Registration'];
$GST        =$_POST['GST'];

  $sql=" UPDATE `company` SET
  CompanyName ='$CompanyName',
RegistrationNumber='$RegistrationNumber',
RegistrationType  ='$RegistrationType',
PhoneNumber               ='$PhoneNumber',
GSTNumber            ='$GSTNumber',
PANNumber              ='$PANNumber',
EstablishedYear           ='$EstablishedYear',
FirstName             ='$FirstName',
LastName         ='$LastName',
StreetAdmin             ='$StreetAdmin',
PINCodeAdmin        ='$PINCodeAdmin',
TalukaAdmin        ='$TalukaAdmin',
DistrictAdmin        ='$DistrictAdmin',
StateAdmin        ='$StateAdmin',
CountryAdmin        ='$CountryAdmin',
StreetBilling        ='$StreetBilling',
PINCodeBilling        ='$PINCodeBilling',
TalukaBilling        ='$TalukaBilling',
DistrictBilling        ='$DistrictBilling',
StateBilling        ='$StateBilling',
CountryBilling        ='$CountryBilling',
StreetShipping        ='$StreetShipping',
PINCodeShipping        ='$PINCodeShipping',
TalukaShipping        ='$TalukaShipping',
DistrictShipping        ='$DistrictShipping',
StateShipping        ='$StateShipping',
CountryShipping        ='$CountryShipping',
PrimaryEmail        ='$PrimaryEmail',
HREmail        ='$HREmail',
SalesEmail        ='$SalesEmail',
CompanyWebsiteurl        ='$CompanyWebsiteurl',
MobileNumber        ='$MobileNumber',
TelephoneNumber        ='$TelephoneNumber',
BankName        ='$BankName',
BranchName        ='$BranchName',
AccountName        ='$AccountName',
AccountNumber        ='$AccountNumber',
BankIFSCcode        ='$BankIFSCcode',
BankMICRcode        ='$BankMICRcode',
CompanyPancard        ='$CompanyPancard',
Banking               ='$Banking',
Registration        ='$Registration',
GST        = '$GST'
   WHERE id= $id";

if ($connection ->query($sql) === true)
{
   echo '<script type="text/javascript">'; 
   echo 'alert("Company Update Successfully!");'; 
   echo 'window.location.href = "./CompanyList.php"';
   echo '</script>';
} 
   else 
{
  echo '<script type="text/javascript">'; 
  echo 'alert("Company  Update Unsuccessfully!");'; 
  echo 'window.location.href = "./CompanyMaster.php"';
  echo '</script>';
}
  
  
  
  


?>
