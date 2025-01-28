<?php include 'header.php' ?>
<div class="page-wrapper">
        <!-- -------------------------------------------------------------- -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- -------------------------------------------------------------- -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-5 align-self-center">
              <h4 class="page-title">Employee Master</h4>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Employee Master</li>
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
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Employee Master</h4>
                </div>
                <div class="card-body wizard-content">
                  <h6 class="card-subtitle mb-3"></h6>
                  <!-- class="tab-wizard wizard-circle" -->
                  <form action="EmployeeBackEnd.php" class="tab-wizard wizard-circle"  method="post" enctype="multipart/form-data">
                    <!-- Step 1 -->
                    <h6>Personal Info</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName"> First Name : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control " id="FirstName" name="FirstName" required> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastName"> Last Name : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control " id="LastName" name="LastName"  required> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="emailAddress"> Email Address : <span class="danger">*</span> </label>
                                                    <input type="email" class="form-control " id="EmailAddress" name="EmailAddress"  required> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phoneNumber">Phone Number :</label>
                                                    <input type="tel" class="form-control" id="PhoneNumber" name="PhoneNumber"  required> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Gender :</label><br>
                                                    <select name="Gender" id="Gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                   
                                                    </select>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="doB">Date of Birth :</label>
                                                    <input type="date" class="form-control" id="DOB" name="DOB"  required> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="age"> Age : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control " id="Age" name="Age"  required> </div>
                                            </div>
                                           <!--  <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wphoneNumber2">Phone Number :</label>
                                                    <input type="tel" class="form-control" id="wphoneNumber2"> </div>
                                            </div> -->
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Address Info</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pinCode">Pin code :</label>
                                                    <input type="text" class="form-control " id="PinCode" name="PinCode"  required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="street">Street :</label>
                                                    <input type="text" class="form-control " id="Street" name="Street"  required> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="city">City :</label>
                                                    <input type="text" class="form-control " id="City" name="City"  required> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="state">State :</label>
                                                    <input type="text" class="form-control " id="State" name="State"  required> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="country">Country :</label>
                                                    <input type="text" class="form-control " id="Country" name="Country"  required> </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 3 -->
                                       <h6>Employment Details</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="employeeCode">Employee Code :</label>
                                                    <input type="text" class="form-control " id="EmployeeCode" name="EmployeeCode"> </div>
                                                <div class="form-group">
                                                    <label for="employmentType">Employment Type :</label>
                                                    <select class="custom-select form-control " id="EmploymentType" data-placeholder="EmploymentType" name="EmploymentType">
                                                        <option value="Perment">Perment</option>
                                                        <option value="Temporary">Temporary</option>
                                                         <option value="Dinner Party">Hard</option> 
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="currentWorkStatus">Current Work Status :</label>
                                                    <!-- <select class="custom-select form-control " id="wLocation1" name="wlocation">
                                                        <option value="">Select City</option>
                                                        <option value="India">India</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Dubai">Dubai</option>
                                                    </select> -->
                                                     <input type="text" class="form-control " id="CurrentWorkStatus" name="CurrentWorkStatus"  required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="reportingTo">Reporting To :</label>
                                                    <input type="text" class="form-control " id="ReportingTo" name="ReportingTo" > </div>

                                                    <div class="form-group">
                                                    <label for="form16Number">Form 16 number :</label>
                                                    <input type="text" class="form-control " id="Form16Number" name="Form16Number"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                 <div class="form-group">
                                                    <label for="joiningdate">Joining Date :</label>
                                                    <input type="date" class="form-control " id="JoiningDate" name="JoiningDate"  >
                                                </div> 
                                                <div class="form-group">
                                                    <label for="department">Deprtment :</label>
                                                    <input type="text" class="form-control " id="Department" name="Department">
                                                </div>
                                                 <div class="form-group">
                                                    <label for="payGrade">Paygrade :</label>
                                                    <input type="text" class="form-control " id="PayGrade" name="PayGrade">
                                                </div>
                                                 <div class="form-group">
                                                    <label for="designation">Designation :</label>
                                                    <input type="text" class="form-control " id="Designation" name="Designation">
                                                </div>
                                                 <div class="form-group">
                                                    <label for="payroleStatecode">Payrole StateCode :</label>
                                                    <input type="text" class="form-control " id="PayroleStatecode" name="PayroleStatecode">
                                                </div>
                                            </div>
                                        </div>
                                    </section> 
                                    <!-- Step 4 -->
                                     <h6>Documents</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="panCard">Pancard :</label>
                                                    <input type="file" class="form-control " id="PanCard" name="PanCard"  required>
                                                </div> 
                                                <!-- <div class="form-group">
                                                    <label for="participants1">Confidance</label>
                                                    <input type="text" class="form-control " id="participants1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Result</label>
                                                    <select class="custom-select form-control " id="participants1" name="location">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div> -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ankPassbook">Bank Passbook</label>
                                                    <input type="file" class="form-control " id="BankPassbook" name="BankPassbook"  required>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label>Rate Interviwer :</label>
                                                    <div class="c-inputs-stacked">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadio11" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio11">1 star</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadio12" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio12">2 star</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadio13" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio13">3 star</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadio14" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio14">4 star</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadio15" name="customRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio15">5 star</label>
                                                        </div>
                                                    </div>
                                                </div> -->
                                           <!--  </div>-->
                                        </div>
                                        <button type="submit">Submit</button>
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