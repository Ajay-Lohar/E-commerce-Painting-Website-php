<?php include 'Connection.php'; 
 $CompanyName         =$_POST['CompanyName'];
 $RegistrationNumber  =$_POST['RegistrationNumber'];
 $RegistrationType    =$_POST['RegistrationType'];
 $PhoneNumber         =$_POST['PhoneNumber'];
 $GSTNumber           =$_POST['GSTNumber'];
 $PANNumber           =$_POST['PANNumber'];
 $EstablishedYear     =$_POST['EstablishedYear'];
 $FirstName           =$_POST['FirstName'];
 $LastName            =$_POST['LastName'];
 $StreetAdmin         =$_POST['StreetAdmin'];
 $PINCodeAdmin        =$_POST['PINCodeAdmin'];
 $TalukaAdmin         =$_POST['TalukaAdmin'];
 $DistrictAdmin       =$_POST['DistrictAdmin'];
 $StateAdmin          =$_POST['StateAdmin'];
 $CountryAdmin        =$_POST['CountryAdmin'];
 $StreetBilling       =$_POST['StreetBilling'];
 $PINCodeBilling      =$_POST['PINCodeBilling'];
 $TalukaBilling       =$_POST['TalukaBilling'];
 $DistrictBilling     =$_POST['DistrictBilling'];
 $StateBilling        =$_POST['StateBilling'];
 $CountryBilling      =$_POST['CountryBilling'];
 $StreetShipping      =$_POST['StreetShipping'];
 $PINCodeShipping     =$_POST['PINCodeShipping'];
 $TalukaShipping      =$_POST['TalukaShipping'];
 $DistrictShipping    =$_POST['DistrictShipping'];
 $StateShipping       =$_POST['StateShipping'];
 $CountryShipping     =$_POST['CountryShipping'];
 $PrimaryEmail        =$_POST['PrimaryEmail'];
 $HREmail             =$_POST['HREmail'];
 $SalesEmail          =$_POST['SalesEmail'];
 $CompanyWebsiteurl   =$_POST['CompanyWebsiteurl'];
 $MobileNumber        =$_POST['MobileNumber'];
 $TelephoneNumber     =$_POST['TelephoneNumber'];
 $BankName            =$_POST['BankName'];
 $BranchName          =$_POST['BranchName'];
 $AccountName         =$_POST['AccountName'];
 $AccountNumber       =$_POST['AccountNumber'];
 $BankIFSCcode        =$_POST['BankIFSCcode'];
 $BankMICRcode        =$_POST['BankMICRcode'];
 $CompanyPancard      =$_FILES['CompanyPancard'];
 $Banking             =$_FILES['Banking'];
 $Registration        =$_FILES['Registration'];
 $GST                 =$_FILES['GST'];

 $ext1=strtolower(pathinfo($CompanyPancard["name"],PATHINFO_EXTENSION));
 $ext2=strtolower(pathinfo($Banking["name"],PATHINFO_EXTENSION));
 $ext3=strtolower(pathinfo($Registration["name"],PATHINFO_EXTENSION));
 $ext4=strtolower(pathinfo($GST["name"],PATHINFO_EXTENSION));
 $RenameFile1=$CompanyName."pancard".".".$ext1;
 $RenameFile2=$CompanyName."banking".".".$ext2;
 $RenameFile3=$CompanyName."registration".".".$ext3;
 $RenameFile4=$CompanyName."gst".".".$ext4;
 


$CompanyArray= array(
                        'CompanyName' => "'".$CompanyName."'",
                        'RegistrationNumber' => "'".$RegistrationNumber."'",
                        'RegistrationType' => "'".$RegistrationType."'",
                        'PhoneNumber' => "'".$PhoneNumber."'",
                        'GSTNumber' => "'".$GSTNumber."'",
                        'PANNumber' => "'".$PANNumber."'",
                        'EstablishedYear' => "'".$EstablishedYear."'",
                        'FirstName' => "'".$FirstName."'",
                        'LastName' => "'".$LastName."'",
                        'StreetAdmin' => "'".$StreetAdmin."'",
                        'PINCodeAdmin' => "'".$PINCodeAdmin."'",
                        'TalukaAdmin' => "'".$TalukaAdmin."'",
                        'DistrictAdmin' => "'".$DistrictAdmin."'",
                        'StateAdmin' => "'".$StateAdmin."'",
                        'CountryAdmin' => "'".$CountryAdmin."'",
                        'StreetBilling' => "'".$StreetBilling."'",
                        'PINCodeBilling' => "'".$PINCodeBilling."'",
                        'TalukaBilling' => "'".$TalukaBilling."'",
                        'DistrictBilling' => "'".$DistrictBilling."'",
                        'StateBilling' => "'".$StateBilling."'",
                        'CountryBilling' => "'".$CountryBilling."'",
                        'StreetShipping' => "'".$StreetShipping."'",
                        'PINCodeShipping' => "'".$PINCodeShipping."'",
                        'TalukaShipping' => "'".$TalukaShipping."'",
                        'DistrictShipping' => "'".$DistrictShipping."'",
                        'StateShipping' => "'".$StateShipping."'",
                        'CountryShipping' => "'".$CountryShipping."'",
                        'PrimaryEmail' => "'".$PrimaryEmail."'",
                        'HREmail' => "'".$HREmail."'",
                        'SalesEmail' => "'".$SalesEmail."'",
                        'CompanyWebsiteurl' => "'".$CompanyWebsiteurl."'",
                        'MobileNumber' => "'".$MobileNumber."'",
                        'TelephoneNumber' => "'".$TelephoneNumber."'",
                        'BankName' => "'".$BankName."'",
                        'BranchName' => "'".$BranchName."'",
                        'AccountName' => "'".$AccountName."'",
                        'AccountNumber' => "'".$AccountNumber."'",
                        'BankIFSCcode' => "'".$BankIFSCcode."'",
                        'BankMICRcode' => "'".$BankMICRcode."'",
                        'CompanyPancard' => "'".$RenameFile1."'",
                        'Banking' => "'".$RenameFile2."'",
                        'Registration' => "'".$RenameFile3."'",
                        'GST' => "'".$RenameFile4."'",





);
// print_r($EmployeeArray);

$columns= implode (',',array_keys($CompanyArray));
$values= implode (',',array_values($CompanyArray));

$sql="INSERT INTO  `company`($columns)VALUES($values)";
if ($connection->query($sql) === TRUE)
		{
            echo $last_id=$connection->insert_id;
		$target_dir="Uploads/".$last_id;
		if(!file_exists($target_dir))
          {
			mkdir($target_dir);
			$target_file1=$target_dir."/".$RenameFile1;
			$target_file2=$target_dir."/".$RenameFile2;
			$target_file3=$target_dir."/".$RenameFile3;
			$target_file4=$target_dir."/".$RenameFile4;
			move_uploaded_file($CompanyPancard["tmp_name"],$target_file1);
			move_uploaded_file($Banking["tmp_name"],$target_file2);
			move_uploaded_file($Registration["tmp_name"],$target_file3);
			move_uploaded_file($GST["tmp_name"],$target_file4);
		  }
    	echo '<script type="text/javascript">'; 
		echo 'alert("Company Add Successfully!");'; 
		echo 'window.location.href = "./CompanyList.php"';
		echo '</script>';
		} 
		else 
		{
    	echo '<script type="text/javascript">'; 
    	echo 'alert("Company  Add Unuccessfully!");'; 
		echo 'window.location.href = ".CompanyMaster.php"';
		echo '</script>';
		}

?>