<?php include 'header.php' ?>
<div class="page-wrapper">
        <!-- -------------------------------------------------------------- -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- -------------------------------------------------------------- -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-5 align-self-center">
              <h4 class="page-title">Reset Password List</h4>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Password</li>
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
                    <h4 class="card-title mb-0">Reset Password List</h4>
                  </div>
                  <!-- <div class="col-4  text-end" >
                    <button class="btn btn-danger m-1" type="submit">Add company</button>
                  </div> -->
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
                <div class="card-body">
                                 <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="myTable">
                                <thead>
                                            <tr>
                                                 <th>Id</th>
                                                <th>User Name</th>
												<th>Role</th>
                                                <th>Date</th>
                                                 <th>Status</th>
 
                                           
                                            </tr>
                                        </thead>
                                        <tbody style="color:#000;font-size:14px;">
                                         
                                             
                                            
                                            <td>2</td>
                                            <td>admin@ramyaReddy.com</td>
                                            <td>admin</td>
                                            <td>2022-11-27 23:39:08</td>
                                            <td><a href=''>
                                            <button class="btn btn-danger" type="submit">Reset Password </button></a></td></tr><td>1</td><td>admin@ramyaReddy.com</td><td>admin</td><td>2022-11-27 23:38:55</td><td><a href=''> <button class="btn btn-danger" type="submit">Reset Password</button></a></td></tr>                                             
                                        </tbody>
                                    </table>
									
                                </div>
                            </div>
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
<?php include 'footer.php' ?>