<?php include 'header.php';?>
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
              <h4 class="page-title">Contact Master</h4>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                    <h4 class="card-title mb-0">Contact List</h4>
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
                        <th>ID</th>             
                        <th>Your Name</th>
                        <th>E-Mail</th>
                        <th>Phone Number</th>
                        <th>Messege</th>
                        
                        
                        
                         
                    
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                include 'ContactListBackEnd.php';
                                            while($row = mysqli_fetch_array($resultData))
                                            {
                                               
                                                echo"<tr>";
                                                echo'<td>
                                                        <a href="ContactDeleteBackEnd.php?id='.$row['id'].'"><i class="fa fa-trash" aria-hidden="true"></i></i>
                                                        </a>
                                                    </td>';
                                                echo"<td>".$row['id']."</td>";
                                                echo"<td>".$row['YourName']."</td>";
                                                echo"<td>".$row['Email']."</td>";
                                                echo"<td>".$row['PhoneNumber']."</td>";
                                                echo"<td>".$row['Messege']."</td>";
                                             
                                            
                                                
                        
                                            echo"</tr>";
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
        

<!-- Mirrored from demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/mini-sidebar/table-sizing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 12:58:24 GMT -->

<?php include 'footer.php' ?>