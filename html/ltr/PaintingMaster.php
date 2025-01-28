<?php include 'header.php'; ?>
      <!-- Page wrapper  -->
      <!-- -------------------------------------------------------------- -->
      <div class="page-wrapper">

        <!-- Container fluid  -->
        <!-- -------------------------------------------------------------- -->
        <div class="container-fluid">
          <!-- -------------------------------------------------------------- -->
          <!-- Start Page Content -->

          <div class="row">
        <div class="col-lg-12">
          <!-- ---------------------start Add Paintings ---------------- -->
          <div class="card">
            <div class="card-header bg-info">
              <h4 class="mb-0 text-white">Painting form</h4>
            </div>
            <form action="PaintingMasterBackEnd.php" method="post" enctype="multipart/form-data">
              <div>
                <div class="card-body">
                  <h4 class="card-title">Add Paintings </h4>
                  <div class="row ">
                    <div class="row">
                      <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Name</label>
                        <input  type="text" id="PaintingName" name="PaintingName" class="form-control" placeholder="John doe"/>
                      </div>
                      </div>

                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Select Painting Categories</label>
                        <input  type="text" id="PaintingCategories" name="PaintingCategories" class="form-control"/>

                        <!-- <select class="form-control form-select"name="PaintingCategories" id="PaintingCategories" data-placeholder="Choose a Category" tabindex="1">
                          <option id="PaintingCategoryName"></option> -->
                      </div>
                     </div>
                    </div> 
                         <!--/span-->
                     <div class="row">
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Image</label>
                        <input  type="file" id="PaintingImage" name="PaintingImage" class="form-control form-control-danger" placeholder="" />
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Size</label>
                        <input  type="text" id="PaintingSize" name="PaintingSize" class="form-control form-control-danger" placeholder="" />
                      </div>
                     </div>
                     </div>
                     <!--/span-->

                     <!--/span-->
                     <div class="row">
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting MRP Price</label>
                        <input  type="text" id="MRPPrice" name="MRPPrice" class="form-control form-control-danger" placeholder="" />
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Selling Price</label>
                        <input  type="text" id="SellingPrice" name="SellingPrice" class="form-control form-control-danger" placeholder="" />
                      </div>
                     </div>
                     </div>
                     <!--/span-->
                     <div class="row">
                     <div class="col-md-12">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Discription</label>
                        <!-- <input  type="text" id="PaintingDiscription" name="PaintingDiscription" class="form-control form-control-danger" placeholder="" /> -->
                        <textarea id="PaintingDiscription" name="PaintingDiscription"  cols="20" rows="5" class="form-control form-control-danger" ></textarea>
                      </div>
                     </div>
                     </div>
                     <!--/span-->
                     <div class="row">
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Features1</label>
                        <input  type="text" id="Features1" name="Features1" class="form-control form-control-danger" placeholder="" />
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Features2</label>
                        <input  type="text" id="Features2" name="Features2" class="form-control form-control-danger" placeholder="" />
                      </div>
                     </div>
                     </div>
                     <!--/span-->
                     <!--/span-->
                     <div class="row">
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Features3</label>
                        <input  type="text" id="Features3" name="Features3" class="form-control form-control-danger" placeholder="" />
                      </div>
                     </div>
                     <div class="col-md-6">
                      <div class="mb-3 has-danger">
                        <label class="control-label">Painting Features 4</label>
                        <input  type="text" id="Features4" name="Features4" class="form-control form-control-danger" placeholder="" />
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