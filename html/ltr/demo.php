<?php include'header.php'; ?>

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Paining Table</h4>
                    </div>
                   
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                    <thead>
                                    <!-- start row -->
                                    <tr>
                                      <th>Actions</th>
                                      <th>id</th>
                                      <th>Painting Name</th>
                                      <th>Painting Categories</th>
                                      <th>Painting Image</th>
                                      <th>Painting Size</th>
                                      <th>MRP Price</th>
                                      <th>Selling Price</th>
                                      <th>Painting Discription</th>
                                      <th>Features1</th>
                                      <th>Features2</th>
                                      <th>Features3</th>
                                      <th>Features4</th>
                                    </tr>
                                    <!-- end row -->
                                  </thead>
                                   <tbody>
                                          <!-- start row -->
                                   <?php
                                            include 'PaintingListBackEnd.php';
                                            while($row = mysqli_fetch_array($resultData))
                                            {
                                                //  print_r($row);
                                                echo"<tr>";
                                                echo'<td>
                                                        <a href="PaintingEdit.php?id='.$row['id'].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        <a href="PaintingDeleteBackEnd.php?id='.$row['id'].'"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </td>';
                                                echo"<td>".$row['id']."</td>";
                                                echo"<td>".$row['PaintingName']."</td>";
                                                echo"<td>".$row['PaintingCategories']."</td>";
                                                echo"<td>".$row['PaintingImage']."</td>";
                                                echo"<td>".$row['PaintingSize']."</td>";
                                                echo"<td>".$row['MRPPrice']."</td>";
                                                echo"<td>".$row['SellingPrice']."</td>";
                                                echo"<td>".$row['PaintingDiscription']."</td>";
                                                echo"<td>".$row['Features1']."</td>";
                                                echo"<td>".$row['Features2']."</td>";
                                                echo"<td>".$row['Features3']."</td>";
                                                echo"<td>".$row['Features4']."</td>";
                                                
                                                
                                            echo"</tr>";
                                            }
                                            ?>
                                                   <!-- end row -->
                                           </tbody>
                                    </table>
                                </div>
                            </div>
                     </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
<?php include 'footer.php'; ?>