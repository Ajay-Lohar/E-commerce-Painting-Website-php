<?php include 'header.php' ?>
      <!-- Page wrapper  -->
      <!-- -------------------------------------------------------------- -->
      <div class="page-wrapper">

        <!-- Container fluid  -->
        <!-- -------------------------------------------------------------- -->
        <div class="container-fluid">
          <!-- -------------------------------------------------------------- -->
          <!-- Start Page Content -->
          <?php
                    include 'Connection.php';

                   $id =$_GET['id'];
                   $sql ="SELECT * FROM `category` WHERE id='$id'";
                   $resultData =mysqli_query($connection, $sql);

                   while($row = mysqli_fetch_array($resultData))
                   {
                    $PaintingCategoryName = $row['PaintingCategoryName'];
                    $PaintingDiscription = $row['PaintingDiscription'];
                   }
               ?>

          <div class="row">
        <div class="col-lg-12">
          <!-- ---------------------start Add Paintings ---------------- -->
          <div class="card">
            <div class="card-header bg-info">
              <h4 class="mb-0 text-white">Painting form</h4>
            </div>
            <form action="PaintingCategoryUpdate.php" method="post">
              <div>
                <div class="card-body">
                  <h4 class="card-title">Add Paintings Category</h4>
                    <div class="row ">

                    <div class="col-md-10">
                      <div class="mb-3 has-danger">
                        <label class="control-label">id</label>
                        <input  type="text" id="id" name="id" class="form-control" value="<?php echo $id;?> " readonly/>
                      </div>
                      </div>

                      <div class="col-md-10">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Category Name</label>
                        <input  type="text" id="PaintingCategoryName" name="PaintingCategoryName" class="form-control" value="<?php echo $PaintingCategoryName;?>"/>
                      </div>
                      </div>

                     <div class="col-md-10">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Discription</label>
                        <!-- <input  type="text" id="PaintingDiscription" name="PaintingDiscription" class="form-control form-control-danger" placeholder="" /> -->
                        <textarea name="PaintingDiscription" id="PaintingDiscription" name="PaintingDiscription"  cols="20" rows="5" class="form-control form-control-danger"  value="<?php echo $PaintingDiscription;?>" ></textarea>
                      </div>
                     </div>

                    </div>
                </div>
                
                <div class="form-actions">
                  <div class="card-body border-top">
                    <button type="submit" class="btn btn-success rounded-pill px-4">
                      <div class="d-flex align-items-center">
                        <i data-feather="save" class="feather-sm me-1 fill-icon"></i> Save
                      </div>
                    </button>
                    <button
                      type="button"
                      class="btn btn-danger rounded-pill px-4 ms-2 text-white"
                    >
                      Cancel
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!-- ---------------------
                        end Person Info
                    ---------------- -->
        </div>
      </div>

          <!-- End PAge Content -->
          <!-- -------------------------------------------------------------- -->
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Container fluid  -->
        <?php include 'footer.php' ?>