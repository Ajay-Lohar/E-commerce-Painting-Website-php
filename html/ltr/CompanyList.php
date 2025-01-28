<?php include 'header.php' ?>
      <!-- -------------------------------------------------------------- -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- -------------------------------------------------------------- -->
      <!-- -------------------------------------------------------------- -->
      <!-- Page wrapper  -->
      <!-- -------------------------------------------------------------- -->
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
                    <li class="breadcrumb-item active" aria-current="page">Company List</li>
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
            <div class="col-12">
              <div class="card">
                <div
                  class="
                    d-flex
                    border-bottom
                    title-part-padding
                    align-items-center
                  "
                >

                  <div class="col-8">
                    <h4 class="card-title mb-0">Company List</h4>
                  </div>
                  <div class="col-4  text-end" >
                    <a href="CompanyMaster.php"><button class="btn btn-danger m-1"  >Add company</button></a>
                  </div>
                  </div>
               

                <div class="card-body">
                
                </div>
                <div class="d-flex align-items-center">
                  <!-- <div class="row"> -->
                    <button class="btn btn-danger m-1" type="submit">Click here to Downloadd Excel  Report</button>
                    <button class="btn btn-danger" type="submit">Click here to Downloadd/ Print Report</button>
                  
                    
                  <!-- </div> -->
                  <div class="ms-auto">
                    <input placeholder="Search " id="Search" type="text" class="form-control">
                  </div>
                </div>
                <table class="table mb-0 ">
                  <thead>
                    <tr>
                      <th>Action</th>
                      <th>id</th>
                      <th>Company Name</th>
                      <th>Registration No</th>
                      <th>Registration Type</th>
                      <th>Phone No</th>
                      <th>GST Number</th>
                      <th>Pan No</th>
                      <th>Established Year</th>
                      <th>Fist Name</th>
                      <th>Last Name</th>
                      <th>Street Admin </th>
                      <th>PinCode Admin</th>
                      <th>Taluka Admin</th>
                      <th>District Admin</th>
                      <th>State Admin</th>
                      <th>Contry Admin</th>
                      <th>Street Biling</th>
                      <th>Pincode Biling</th>
                      <th>Taluka Billing</th>
                      <th>District Billing</th>
                      <th>State Billing</th>
                      <th>Country Billing</th>
                      <th>Street Shiping </th>
                      <th>PinCode Shiping</th>
                      <th>Taluka Shiping</th>
                      <th>District Shiping</th>
                      <th>State Shiping</th>
                      <th>Country Shiping</th>
                      <th>Primery Email</th>
                      <th>Hr Email</th>
                      <th>Sales Email</th>
                      <th>Mobile No</th>
                      <th>Telephone No</th>
                      <th>Bank Name</th>
                      <th>Branch Name</th>
                      <th>Bank IFSC Code</th>
                      <th>Account Number</th>
                      <th>Bank MICR Code</th>
                      <th>Company Pan Card</th>
                      <th>Banking </th>
                      <th>Registration</th>
                      <th>GST</th>

                    </tr>
                  </thead>
                 
                  <tbody>
                        <?php 
                                        include 'CompanyListBackEnd.php';
                                        while($row=mysqli_fetch_array($resultData))
                                        {
                                        echo "<tr>";
                                         echo '<td> 
                                         <a href="CompanyDeleteBackEnd.php?id='.$row['id'].'">
                                         <i class="fa fa-trash"></i></a>&nbsp;

                                         <a href="CompanyEdit.php?id='.$row['id'].'">
                                         <i class="fa fa-pencil"></i></a>
                                         </td>';
                                        // echo '<th scope="row">'.$row['id'].'</th>';
                                        echo "<td>".$row['id']."</td>";
                                        echo "<td>".$row['CompanyName']."</td>";
                                        echo "<td>".$row['RegistrationNumber']."</td>";
                                        echo "<td>".$row['RegistrationType']."</td>";
                                        echo "<td>".$row['PhoneNumber']."</td>";
                                        echo "<td>".$row['GSTNumber']."</td>";
                                        echo "<td>".$row['PANNumber']."</td>";
                                        echo "<td>".$row['EstablishedYear']."</td>";
                                        echo "<td>".$row['FirstName']."</td>";
                                        echo "<td>".$row['LastName']."</td>";
                                        echo "<td>".$row['StreetAdmin']."</td>";
                                        echo "<td>".$row['PINCodeAdmin']."</td>";
                                        echo "<td>".$row['TalukaAdmin']."</td>";
                                        echo "<td>".$row['DistrictAdmin']."</td>";
                                        echo "<td>".$row['StateAdmin']."</td>";
                                        echo "<td>".$row['CountryAdmin']."</td>";
                                        echo "<td>".$row['StreetBilling']."</td>";
                                        echo "<td>".$row['PINCodeBilling']."</td>";
                                        echo "<td>".$row['TalukaBilling']."</td>";
                                        echo "<td>".$row['DistrictBilling']."</td>";
                                        echo "<td>".$row['StateBilling']."</td>";
                                        echo "<td>".$row['CountryBilling']."</td>";
                                        echo "<td>".$row['StreetShipping']."</td>";
                                        echo "<td>".$row['PINCodeShipping']."</td>";
                                        echo "<td>".$row['TalukaShipping']."</td>";
                                        echo "<td>".$row['DistrictShipping']."</td>";
                                        echo "<td>".$row['StateShipping']."</td>";
                                        echo "<td>".$row['CountryShipping']."</td>";
                                        echo "<td>".$row['HREmail']."</td>";
                                        echo "<td>".$row['SalesEmail']."</td>";
                                        echo "<td>".$row['CompanyWebsiteurl']."</td>";
                                        echo "<td>".$row['TelephoneNumber']."</td>";
                                        echo "<td>".$row['BankName']."</td>";
                                        echo "<td>".$row['BranchName']."</td>";
                                        echo "<td>".$row['AccountName']."</td>";
                                        echo "<td>".$row['AccountNumber']."</td>";
                                        echo "<td>".$row['BankIFSCcode']."</td>";
                                        echo "<td>".$row['BankMICRcode']."</td>";
                                        echo "<td>".$row['CompanyPancard']."</td>";
                                        echo "<td>".$row['Banking']."</td>";
                                        echo "<td>".$row['Registration']."</td>";
                                        echo "<td>".$row['GST']."</td>";
                                        
                                        
                                
                                        echo "</tr>";
                                        }
                                        ?>
                                      </tbody>
                </table>
              </div>
            </div>
           
            
            
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
        <!-- -------------------------------------------------------------- -->
        <?php include 'footer.php' ?>
