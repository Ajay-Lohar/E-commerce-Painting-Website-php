<?php include 'header.php' ?>
<div class="page-wrapper">
        <!-- -------------------------------------------------------------- -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- -------------------------------------------------------------- -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-5 align-self-center">
              <h4 class="page-title">Company Master</h4>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Company Master Edit</li>
                  </ol>
                </nav>
              </div>
            </div>
            
          </div>
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Container fluid  -->
        <!-- -------------------------------------------------------------- -->
        <div class="container-fluid">
          <!-- -------------------------------------------------------------- -->
          <!-- Start Page Content -->
          <!-- -------------------------------------------------------------- -->
          <div class="row">
            <!-- -------------------------------------------------------------- -->
            <!-- Example -->
            <!-- -------------------------------------------------------------- -->
            <div class="col-12">
              <!-- ---------------------
                            start Basic Example
                        ---------------- -->
              
              <!-- ---------------------
                            end Basic Example
                        ---------------- -->
            </div>
            <!-- -------------------------------------------------------------- -->
            <!-- Example -->
            <!-- -------------------------------------------------------------- -->
            <div class="col-12">
              <!-- ---------------------
                            start Custom Design Example
                        ---------------- -->
                        <?php  
         include 'Connection.php';
              $id =$_GET['id'];
              $sql= "SELECT * FROM `company` WHERE id=$id ";

             $resultData= mysqli_query($connection,$sql);
             while ($row=mysqli_fetch_array($resultData))
             {
          $CompanyName         =$row['CompanyName'];
          $RegistrationNumber  =$row['RegistrationNumber'];
          $RegistrationType    =$row['RegistrationType'];
          $PhoneNumber         =$row['PhoneNumber'];
          $GSTNumber           =$row['GSTNumber'];
          $PANNumber           =$row['PANNumber'];
          $EstablishedYear     =$row['EstablishedYear'];
          $FirstName           =$row['FirstName'];
          $LastName            =$row['LastName'];
          $StreetAdmin         =$row['StreetAdmin'];
          $PINCodeAdmin        =$row['PINCodeAdmin'];
          $TalukaAdmin         =$row['TalukaAdmin'];
          $DistrictAdmin       =$row['DistrictAdmin'];
          $StateAdmin          =$row['StateAdmin'];
          $CountryAdmin        =$row['CountryAdmin'];
          $StreetBilling       =$row['StreetBilling'];
          $PINCodeBilling      =$row['PINCodeBilling'];
          $TalukaBilling       =$row['TalukaBilling'];
          $DistrictBilling     =$row['DistrictBilling'];
          $StateBilling        =$row['StateBilling'];
          $CountryBilling      =$row['CountryBilling'];
          $StreetShipping      =$row['StreetShipping'];
          $PINCodeShipping     =$row['PINCodeShipping'];
          $TalukaShipping      =$row['TalukaShipping'];
          $DistrictShipping    =$row['DistrictShipping'];
          $StateShipping       =$row['StateShipping'];
          $CountryShipping     =$row['CountryShipping'];
          $PrimaryEmail        =$row['PrimaryEmail'];
          $HREmail             =$row['HREmail'];
          $SalesEmail          =$row['SalesEmail'];
          $CompanyWebsiteurl   =$row['CompanyWebsiteurl'];
          $MobileNumber        =$row['MobileNumber'];
          $TelephoneNumber     =$row['TelephoneNumber'];
          $BankName            =$row['BankName'];
          $BranchName          =$row['BranchName'];
          $AccountName         =$row['AccountName'];
          $AccountNumber       =$row['AccountNumber'];
          $BankIFSCcode        =$row['BankIFSCcode'];
          $BankMICRcode        =$row['BankMICRcode'];
          $CompanyPancard      =$row['CompanyPancard'];
          $Banking             =$row['Banking'];
          $Registration        =$row['Registration'];
          $GST                 =$row['GST'];
             }

            ?>
        
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Company Master</h4>
                </div>
                <div class="card-body wizard-content">
                  <h6 class="card-subtitle mb-3"></h6>
                  <!-- class="tab-wizard wizard-circle" -->
                  <form action="CompanyUpdate.php" class="tab-wizard wizard-circle"  method="post" >
                    <!-- Step 1 -->
                    <h6>Company Details</h6>
                                    <section>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="CompanyName">Id : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control " id="id" name="id" value="<?php echo $id ?>" readonly> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="CompanyName"> Company Name : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control " id="CompanyName" name="CompanyName" value="<?php echo $CompanyName ?>"required  pattern="[a-zA-Z]"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="registrationNumber">Registration Number :</label>
                                                    <input type="text" class="form-control " id="RegistrationNumber" name="RegistrationNumber" value="<?php echo $RegistrationNumber ?>" required pattern="[a-zA-Z0-9]"> </div>
                                            </div>
                                        </div>

                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="registrationType"> Registration Type : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control " id="RegistrationType" name="RegistrationType" value="<?php echo $RegistrationType ?>">
                                                        <option value="Private Limited Company">Private Limited Company</option>
                                                        <option value="Public Limited Company">Public Limited Company</option>
                                                        <option value="Partnerships Company">Partnerships Company</option>
                                                        <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                                                        <option value="One Person Company">One Person Company</option>
                                                        <option value="Sole Proprietorship">Sole Proprietorship</option>
                                                        <option value="Section 8 Company">Section 8 Company</option>                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Phone Number :</label>
                                                    <input type="tel" class="form-control " id="PhoneNumber" name="PhoneNumber"    title="no should be start with 6-9 range " value="<?php echo $PhoneNumber ?>" required  pattern="[6-9]{1}[0-9]{9}"   title="no should be start with 6-9 range "> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gstNumber">GST Number :</label>
                                                    <input type="tel" class="form-control " id="GSTNumber" name="GSTNumber"   title="Invalid GST Number." maxlength="15" value="<?php echo $GSTNumber ?>" required maxlength="15"   > </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="panNumber">PAN Number :</label>
                                                    <input type="tel" class="form-control " id="PANNumber" name="PANNumber"  title="invalid PAN no" value="<?php echo $PANNumber ?>" required pattern="^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$"   maxlength="15"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="establishedYear">Established Year :</label>
                                                    <input type="date" class="form-control " id="EstablishedYear" name="EstablishedYear" value="<?php echo $EstablishedYear ?>"  required> </div>
                                            </div>
                                        </div>
                                        
                                    </section>
                    <!-- Step 2 -->
                    <h6>Admin Details</h6>
                                    <section>
                                        <h5>Admin </h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName"> First Name : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control " id="FirstName" name="FirstName"  value="<?php echo $FirstName ?>" required pattern="[a-zA-Z]" > </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastName"> Last Name : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control " id="LastName" name="LastName" value="<?php echo $LastName ?>" required pattern="[a-zA-Z]"  > </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="streetAdmin">Street : <span class="danger">*</span></label>
                                                    <input type="text" class="form-control " id="StreetAdmin" name="StreetAdmin" value="<?php echo $StreetAdmin ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pinCodeAdmin">PIN Code : <span class="danger">*</span></label>
                                                    <input type="tel" class="form-control " id="PINCodeAdmin" name="PINCodeAdmin"   value="<?php echo $PINCodeAdmin ?>"  required pattern="[0-9]" maxlength="6"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="talukaAdmin">Taluka :</label>
                                                    <input type="text" class="form-control " id="TalukaAdmin" name="TalukaAdmin"value="<?php echo $TalukaAdmin ?>" required pattern="[a-zA-Z]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="districtAdmin">District :</label>
                                                    <input type="text" class="form-control " id="DistrictAdmin" name="DistrictAdmin" value="<?php echo $DistrictAdmin ?>" required pattern="[a-zA-Z]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="stateAdmin">State :</label>
                                                    <input type="text" class="form-control " id="StateAdmin" name="StateAdmin" value="<?php echo $StateAdmin ?>" required pattern="[a-zA-Z]"> 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="countryAdmin">Country :</label>
                                                    <input type="text" class="form-control " id="CountryAdmin" name="CountryAdmin" value="<?php echo $CountryAdmin ?>" required pattern="[a-zA-Z]">
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="border: 1px solid darkblue; border-radius: 5px;">
                                        <h5>Billing Details</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="streetBilling">Street : <span class="danger">*</span></label>
                                                    <input type="text" class="form-control " id="StreetBilling" name="StreetBilling"  value="<?php echo $StreetBilling ?>" required pattern="[a-zA-Z]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pinCodeBilling">PIN Code : <span class="danger">*</span></label>
                                                    <input type="tel" class="form-control " id="PINCodeBilling" name="PINCodeBilling"  maxlength="6" value="<?php echo $PINCodeBilling ?>" required pattern="[0-9]" maxlength="6"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="talukaBilling">Taluka :</label>
                                                    <input type="text" class="form-control " id="TalukaBilling" name="TalukaBilling"  value="<?php echo $TalukaBilling ?>"required pattern="[a-zA-Z]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="districtBilling">District :</label>
                                                    <input type="text" class="form-control " id="DistrictBilling" name="DistrictBilling"  value="<?php echo $DistrictBilling ?>" required pattern="[a-zA-Z]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="stateBilling">State :</label>
                                                    <input type="text" class="form-control " id="StateBilling" name="StateBilling"  value="<?php echo $StateBilling ?>" required pattern="[a-zA-Z]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="countryBilling">Country :</label>
                                                    <input type="text" class="form-control " id="CountryBilling" name="CountryBilling" value="<?php echo $CountryBilling ?>" required pattern="[a-zA-Z]">
                                                </div>
                                            </div>
											<p id= "shiptobilling" class="form-row">
													Same as Billing&emsp; <input type="checkbox" onclick="SetBilling(this.checked);" />
												</p>
                                        </div>
                                        <hr style="border: 1px solid darkblue; border-radius: 5px;">
                                        <h5>Shipping Details</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="streetShipping">Street : <span class="danger">*</span></label>
                                                    <input type="text" class="form-control " id="StreetShipping" name="StreetShipping" value="<?php echo $StreetShipping ?>" required pattern="[a-zA-Z]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pinCodeShipping">PIN Code : <span class="danger">*</span></label>
                                                    <input type="tel" class="form-control " id="PINCodeShipping" name="PINCodeShipping"   maxlength="6"value="<?php echo $PINCodeShipping ?>" required pattern="[0-9]" maxlength="6"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="talukaShipping">Taluka :</label>
                                                    <input type="text" class="form-control " id="TalukaShipping" name="TalukaShipping" value="<?php echo $TalukaShipping ?> " required pattern="[a-zA-Z]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="districtShipping">District :</label>
                                                    <input type="text" class="form-control " id="DistrictShipping" name="DistrictShipping"  value="<?php echo $DistrictShipping ?>" required pattern="[a-zA-Z]">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="stateShipping">State :</label>
                                                    <input type="text" class="form-control " id="StateShipping" name="StateShipping" value="<?php echo $StateShipping ?>" required pattern="[a-zA-Z]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="countryShipping">Country :</label>
                                                    <input type="text" class="form-control " id="CountryShipping" name="CountryShipping" value="<?php echo $CountryShipping ?>"  required pattern="[a-zA-Z]">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                    
                    <!-- Step 3 -->
                    <h6>Contact</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="primaryEmail">Primary Email Address : <span class="danger">*</span> </label>
                                                    <input type="email" class="form-control " id="PrimaryEmail" name="PrimaryEmail" value="<?php echo $PrimaryEmail ?>" required> </div>
                                            
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="hrEmail">HR Email Address : <span class="danger">*</span> </label>
                                                    <input type="email" class="form-control " id="HREmail" name="HREmail" value="<?php echo $HREmail ?> " required> </div>
                                            
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="salesEmail">Sales Email Address : <span class="danger">*</span> </label>
                                                    <input type="email" class="form-control " id="SalesEmail" name="SalesEmail" value="<?php echo $SalesEmail ?> " required> </div>
                                            
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="companyWebsiteurl">Company Website URL :</label>
                                                    <input type="url" class="form-control " id="CompanyWebsiteurl" name="CompanyWebsiteurl"  value="<?php echo $CompanyWebsiteurl ?>" required> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="mobileNumber">Mobile Number :</label>
                                                    <input type="tel" class="form-control " id="MobileNumber" name="MobileNumber"  minlength="10" maxlength="10" pattern="[6789][0-9]{9}" title="no should be start with 6-9 range" value="<?php echo $MobileNumber ?>"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="telephoneNumber">Telephone Number :</label>
                                                    <input type="tel" class="form-control" id="TelephoneNumber" name="TelephoneNumber" value="<?php echo $TelephoneNumber ?>" required> </div>
                                            </div>
                                        </div>
                                    </section>
                    <!-- Step 4 -->
                    <h6>Banking Details</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bankName"> Bank Name : <span class="danger">*</span> </label>
                                    <input type="text" class="form-control " id="BankName" name="BankName" value="<?php echo $BankName ?>" required> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="branchName"> Branch Name : <span class="danger">*</span> </label>
                                    <input type="text" class="form-control " id="BranchName" name="BranchName" value="<?php echo $BranchName ?>" required> </div>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="accountName"> Account Name : <span class="danger">*</span> </label>
                                    <input type="text" class="form-control " id="AccountName" name="AccountName" value="<?php echo $AccountName ?>" required> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="accountNumber">Account Number :</label>
                                    <input type="tel" class="form-control" id="AccountNumber" name="AccountNumber" value="<?php echo $AccountNumber ?>" required> </div>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bankIFSCcode"> Bank IFSC Code : <span class="danger">*</span> </label>
                                    <input type="text" class="form-control " id="BankIFSCcode" name="BankIFSCcode" value="<?php echo $BankIFSCcode ?>" required> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bankMICRcode">Bank MICR Code :</label>
                                    <input type="tel" class="form-control" id="BankMICRcode" name="BankMICRcode" value="<?php echo $BankMICRcode ?>" required> </div>
                            </div>
                        </div>
                    </section>
                    <h6>Documents</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="companyPancard">Company Pancard :</label>
                                                    <input type="file" class="form-control " id="CompanyPancard" name="CompanyPancard" value="<?php echo $CompanyPancard ?>" required>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="banking">Banking :</label>
                                                    <input type="file" class="form-control " id="Banking" name="Banking" value="<?php echo $Banking ?>" required>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="registration">Registration</label>
                                                    <input type="file" class="form-control " id="Registration" name="Registration" value="<?php echo $Registration ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gst">GST :</label>
                                                    <input type="file" class="form-control " id="GST" name="GST" value="<?php echo $GST ?>" required>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        <button type="submit"  >Submit</button>
                              </section>
                        
                                    
                  </form>
                </div>
              </div>
              <!-- ---------------------
                            end Custom Design Example
                        ---------------- -->
            </div>
            <!-- -------------------------------------------------------------- -->
            
            <!-- -------------------------------------------------------------- -->
          
            <!-- -------------------------------------------------------------- -->
            <!-- Example -->
            <!-- -------------------------------------------------------------- -->
           
            </div>
            <!-- -------------------------------------------------------------- -->
            <!-- Example -->
            
                      
            </div>
            <!-- -------------------------------------------------------------- -->
            <!-- Example -->
            <!-- -------------------------------------------------------------- -->
          </div>
          <!-- -------------------------------------------------------------- -->
          <!-- End PAge Content -->
          <!-- -------------------------------------------------------------- -->
          <!-- -------------------------------------------------------------- -->
          <!-- Right sidebar -->
          <!-- -------------------------------------------------------------- -->
          <!-- .right-sidebar -->
          <!-- -------------------------------------------------------------- -->
          <!-- End Right sidebar -->
          <!-- -------------------------------------------------------------- -->
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Container fluid  -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- footer -->
        
            <?php include 'footer.php' ?>