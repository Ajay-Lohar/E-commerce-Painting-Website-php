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
              <h4 class="page-title">Painting Category Master</h4>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Painting Category List</li>
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
                    <h4 class="card-title mb-0">Painting Category List</h4>
                  </div>
                  <div class="col-4  text-end" >
                    <a href="PaintingCategoryMaster.php"><button class="btn btn-danger m-1"  >Add Category</button></a>
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
                      <th>Painting Category Name</th>
                      <th>Painting Image</th>
                      <th>Painting Discription</th>

                    </tr>
                  </thead>
                 
                  <tbody>
                        <?php 
                            include 'PaintingCatagoriesListBackEnd.php';
                            while($row=mysqli_fetch_array($resultData))
                            {
                            echo "<tr>";
                             echo '<td> 
                             <a href="PaintingCategoryDeleteBackEnd.php?id='.$row['id'].'">
                             <i class="fa fa-trash"></i></a>&nbsp;

                             <a href="PaintingCategoryEdit.php?id='.$row['id'].'">
                             <i class="fa fa-pencil"></i></a>
                             </td>';
                            // echo '<th scope="row">'.$row['id'].'</th>';
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['PaintingCategoryName']."</td>";
                            echo "<td>".$row['PaintingImage']."</td>";
                            echo "<td>".$row['PaintingDiscription']."</td>";

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
