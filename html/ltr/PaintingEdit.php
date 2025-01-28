<?php include 'header.php' ?>
      <!-- Page wrapper  -->
      <!-- -------------------------------------------------------------- -->
      <div class="page-wrapper">

        <!-- Container fluid  -->
        <!-- -------------------------------------------------------------- -->
        <div class="container-fluid">
          <!-- Start Page Content -->

          <?php
                    include 'Connection.php';

                   $id =$_GET['id'];
                   $sql ="SELECT * FROM `paintings` WHERE id='$id'";
                   $resultData =mysqli_query($connection, $sql);

                   while($row = mysqli_fetch_array($resultData))
                   {
                    $PaintingName = $row['PaintingName'];
                    $PaintingCategories = $row['PaintingCategories'];
                    $PaintingSize = $row['PaintingSize'];
                    $MRPPrice = $row['MRPPrice'];
                    $SellingPrice = $row['SellingPrice'];
                    $PaintingDiscription = $row['PaintingDiscription'];
                    $Features1 = $row['Features1'];
                    $Features2 = $row['Features2'];
                    $Features3 = $row['Features3'];
                    $Features4 = $row['Features4'];
                   
                   }
               ?>

          <div class="row">
        <div class="col-lg-12">
          <!-- ---------------------start Add Paintings ---------------- -->
          <div class="card">
            <div class="card-header bg-info">
              <h4 class="mb-0 text-white">Painting form</h4>
            </div>
            <form action="PaintingUpdate.php" method="post">
              <div>
                <div class="card-body">
                  <h4 class="card-title">Add Paintings </h4>
                  <div class="row ">
                  <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">id</label>
                        <input  type="text" id="id" name="id" class="form-control" value="<?php echo $id;?>" readonly/>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Name</label>
                        <input  type="text" id="PaintingName" name="PaintingName" class="form-control" value="<?php echo $PaintingName;?>"/>
                      </div>
                      </div>

                      <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Select Painting Categories</label>
                        <select class="form-control form-select"name="PaintingCategories" id="PaintingCategories" value="<?php echo $PaintingCategories;?>" >
                          <option value="">Select Painting Categories </option>
                          <option value="NaturePaintings">Nature Paintings</option>
                          <option value="CanvasPainting">Canvas Painting</option>
                          <option value="GodsPainting">Gods Painting</option>
                          <option value="OtherPaintings">Other Paintings</option>
                        </select>
                      </div>
                     </div>
                    </div> 
                         <!--/span-->
                     <div class="row">
                    
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Size</label>
                        <input  type="text" id="PaintingSize" name="PaintingSize" class="form-control form-control-danger"value="<?php echo $PaintingSize;?>"/>
                      </div>
                     </div>
                     </div>
                     <!--/span-->

                     <!--/span-->
                     <div class="row">
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting MRP Price</label>
                        <input  type="text" id="MRPPrice" name="MRPPrice" class="form-control form-control-danger" value="<?php echo $MRPPrice;?>" />
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Selling Price</label>
                        <input  type="text" id="SellingPrice" name="SellingPrice" class="form-control form-control-danger" value="<?php echo $SellingPrice;?>" />
                      </div>
                     </div>
                     </div>
                     <!--/span-->
                     <div class="row">
                     <div class="col-md-12">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Discription</label>
                        <!-- <input  type="text" id="PaintingDiscription" name="PaintingDiscription" class="form-control form-control-danger" placeholder="" /> -->
                        <textarea id="PaintingDiscription" name="PaintingDiscription"  cols="20" rows="5" class="form-control form-control-danger" value="<?php echo $PaintingDiscription;?>"></textarea>
                      </div>
                     </div>
                     </div>
                     <!--/span-->
                     <div class="row">
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Features1</label>
                        <input  type="text" id="Features1" name="Features1" class="form-control form-control-danger" value="<?php echo $Features1;?>" />
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Features2</label>
                        <input  type="text" id="Features2" name="Features2" class="form-control form-control-danger" value="<?php echo $Features2;?>" />
                      </div>
                     </div>
                     </div>
                     <!--/span-->
                     <!--/span-->
                     <div class="row">
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Features3</label>
                        <input  type="text" id="Features3" name="Features3" class="form-control form-control-danger" value="<?php echo $Features3;?>"/>
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Features 4</label>
                        <input  type="text" id="Features4" name="Features4" class="form-control form-control-danger"value="<?php echo $Features4;?>" />
                      </div>
                     </div>
                     </div>
                     <!--/span-->
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
          <!-- ---------------------end Person Info---------------- -->
        </div>
      </div>

          <!-- End PAge Content -->
          <!-- -------------------------------------------------------------- -->
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Container fluid  -->
        <?php include 'footer.php' ?>