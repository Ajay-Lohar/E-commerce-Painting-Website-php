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
              <h4 class="page-title">Employee  Master</h4>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Employee List</li>
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
                    <h4 class="card-title mb-0">Employee List</h4>
                  </div>
                  <div class="col-4  text-end" >
                   <a href="EmployeeMaster.php"> <button class="btn btn-danger m-1" >Add Employee</button></a>
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
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email Address</th>
                      <th>Phone No</th>
                      <th>Gender</th>
                      <th>Date Of Birth</th>
                      <th>Age</th>
                      <th>PinCode</th>
                      <th>Street</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Country</th>
                      <th>Employee Code</th>
                      <th>Employment Type</th>
                      <th>Current Work Status</th>
                      <th>Reporting To</th>
                      <th>Form 16 Number</th>
                      <th>Joining Date</th>
                      <th>Department</th>
                      <th>PayGrade</th>
                      <th>Designation</th>
                      <th>Payrole State code</th>
                      <th>PanCard</th>
                      <th>Bank Passbook</th>
                      

                    </tr>
                  </thead>
                 
                  <tbody>
                        <?php 
                                        include 'EmployeeListBackEnd.php';
                                        while($row=mysqli_fetch_array($resultData))
                                        {
                                        echo "<tr>";
                                         echo '<td> 
                                         <a href="EmployeeDeleteBackEnd.php?id='.$row['id'].'">
                                         <i class="fa fa-trash"></i></a>&nbsp;

                                         <a href="EmployeeEdit.php?id='.$row['id'].'">
                                         <i class="fa fa-pencil"></i></a>
                                         </td>';
                                        // echo '<th scope="row">'.$row['id'].'</th>';
                                        echo "<td>".$row['id']."</td>";
                                        echo "<td>".$row['FirstName']."</td>";
                                        echo "<td>".$row['LastName']."</td>";
                                        echo "<td>".$row['EmailAddress']."</td>";
                                        echo "<td>".$row['PhoneNumber']."</td>";
                                        echo "<td>".$row['Gender']."</td>";
                                        echo "<td>".$row['DOB']."</td>";
                                        echo "<td>".$row['Age']."</td>";
                                        echo "<td>".$row['PinCode']."</td>";
                                        echo "<td>".$row['Street']."</td>";
                                        echo "<td>".$row['City']."</td>";
                                        echo "<td>".$row['State']."</td>";
                                        echo "<td>".$row['Country']."</td>";
                                        echo "<td>".$row['EmployeeCode']."</td>";
                                        echo "<td>".$row['EmploymentType']."</td>";
                                        echo "<td>".$row['CurrentWorkStatus']."</td>";
                                        echo "<td>".$row['ReportingTo']."</td>";
                                        echo "<td>".$row['Form16Number']."</td>";
                                        echo "<td>".$row['JoiningDate']."</td>";
                                        echo "<td>".$row['Department']."</td>";
                                        echo "<td>".$row['PayGrade']."</td>";
                                        echo "<td>".$row['Designation']."</td>";
                                        echo "<td>".$row['PayroleStatecode']."</td>";
                                        echo "<td>".$row['PanCard']."</td>";
                                        echo "<td>".$row['BankPassbook']."</td>";
                                        
                                        
                                        
                                
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