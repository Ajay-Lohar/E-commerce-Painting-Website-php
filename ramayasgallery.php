<?php include 'header.php';?>
    <div id="product-category" class="container">
      <ul class="breadcrumb">
        <li><a href="index.html">home</a></li>
        <li>
          <a href="#"
            >Painting</a
          >
        </li>
      </ul>
     
      
      <div class="row">
        <aside id="column-left" class="col-sm-3 hidden-xs" >
          <div class="category-list">
            <div class="box-category">
              <h3 class="toggled relative">Categories</h3>
              <ul class="list-unstyled parent" id="selectMe-desk">
                <li class="has-more-category">
                  <a
                    href="#"
                    class="list-group-item main-item"
                    >Nature painting
				  </a>
                </li>
                <li class="has-more-category">
                  <a
                    href="#"
                    class="list-group-item main-item"
                    >Gods Painting</a>
                </li>
                <li class="has-more-category">
                  <a
                    href="#"
                    class="list-group-item main-item"
                    >Canvas Painting
				   </a>
                </li>
                <li class="">
                  <a
                    href="#"
                    class="list-group-item"
                    >Other Painting<span></span
                  ></a>
                </li>
              </ul>
            </div>
          </div>

          <script>
          
            $(function () {
              $(".parent .fa.fa-plus").remove();
              $(".parent .toggled").append("<i class='fa fa-plus'></i>");
              $(".parent .toggled").click(function (e) {
                e.preventDefault();
                if (!$(this).parent().hasClass("active")) {
                  $("+ ul", $("a.list-group-item.main-item")).slideUp();
                  $("a.list-group-item.main-item").removeClass("active");
                }
                $(this).parent().toggleClass("active");
                $("+ ul", $(this).parent()).slideToggle("slow");
                return false;
              });
            });
          
          </script>

          <div class="panel panel-default filter">
            <div class="box-content">
              <div id="filter">
                <h3 class="panel-heading toggled">Refine Search</h3>
                <div class="filter_box">
                  <div class="list-group list-group-filter">
                    <div class="list-group-items">
                      <a class="list-group-item">price</a>
                      <div class="list-group-item">
                        <div id="filter-group2">
                          <div class="checkbox">
                            <label>
                              <input
                                type="checkbox"
                                name="filter[]"
                                value="5"
                              />
                              less than $150
                            </label>
                          </div>
						              <div class="checkbox">
                            <label>
                              <input
                                type="checkbox"
                                name="filter[]"
                                value="5"
                              />
                              $150 - $450
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input
                                type="checkbox"
                                name="filter[]"
                                value="4"
                              />
                              more than $450
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="list-group-items">
                      <a class="list-group-item">size</a>
                      <div class="list-group-item">
                        <div id="filter-group3">
                          <div class="checkbox">
                            <label>
                              <input
                                type="checkbox"
                                name="filter[]"
                                value="8"
                              />
                              large
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input
                                type="checkbox"
                                name="filter[]"
                                value="7"
                              />
                              medium
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input
                                type="checkbox"
                                name="filter[]"
                                value="6"
                              />
                              small
                            </label>
                          </div>
                        </div>
                      </div>
                    </div> -->
                  </div>
                  <div class="panel-footer text-right">
                    <button
                      type="button"
                      id="button-filter"
                      class="btn btn-primary"
                    >
                      Refine Search
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script>
          
            $("#button-filter").on("click", function () {
              filter = [];

              $("input[name^='filter']:checked").each(function (element) {
                filter.push(this.value);
              });

              location =
                "index94ae.html?route=product/category&amp;path=18&amp;filter=" +
                filter.join(",");
            });
            
          </script>

          <div class="swiper-viewport">
            <div id="banner0" class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#"
                    ><img
                      src="images/slider/banner3.jpg"
                      alt="Left Banner"
                      class="img-responsive"
                  /></a>
                </div>
              </div>
            </div>
          </div>
          <script>
           
            if ($("#banner0 .swiper-slide").length > 1) {
              $("#banner0").swiper({
                effect: "fade",
                autoplay: 2500,
                autoplayDisableOnInteraction: false,
              });
            }
           
          </script>
        </aside>

        <div id="content" class="col-sm-9">
          <h2 class="page_title">Painting</h2>
          <div class="row">
            <div class="refine-search col-sm-12">
              <!-- <h3 class="refine-text">Refine Search</h3> -->
              <div class="row" >
                <div class="col-sm-12">
                  <ul class="cat-name"  >
                    <li >
                      <a 
                        href="#"
                        >nature Painting</a
                      >
                    </li>
                    <li >
                      <a 
                        href="#"
                        >Gods Painting</a
                      >
                    </li>
                    <li >
                      <a 
                        href="#"
                        >canvas Painting</a
                      >
                    </li>
                    <li style=>
                      <a 
                        href="#"
                        >other Painting</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-12 cat-description">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, aliquam praesentium ut, voluptatem neque asperiores ipsum nisi eum tempore dolorum sapiente velit quaerat, incidunt iusto nulla autem dicta culpa aliquid?
              </p>
            </div>
          </div>
         
         

          <div class="cat_info">
            <div class="row">
              <div class="col-sm-2 col-xs-5 cat_list_gird">
                <div class="btn-group btn-group-sm">
                  <button
                    type="button"
                    id="grid-view"
                    class="btn btn-default"
                    data-toggle="tooltip"
                    title="Grid"
                  >
                    <i class="icon-grid"></i>
                  </button>
                  <!-- <button
                    type="button"
                    id="list-view"
                    class="btn btn-default"
                    data-toggle="tooltip"
                    title="List"
                  >
                    <i class="icon-list"></i>
                  </button> -->
                </div>
              </div>
              <!-- <div class="col-sm-3 col-xs-6 com-total">
                 <a
                  href="index6431.html?route=product/compare"
                  id="compare-total"
                  class="btn btn-link"
                  >Product Compare (0)</a
                > 
              </div> -->
              <div class="col-sm-7 col-xs-12 cat-pagination-right">
                <div class="cat-sort">
                  <div class="text-right show-text clearfix">
                    <label class="control-label text_sort" for="input-sort"
                      >Sort By:</label
                    >
                  </div>
                  <div class="text-right show-select clearfix">
                    <div class="select-filter-sort">
                      <select
                        id="input-sort"
                        class="form-control sort-order"
                        onchange="location = this.value;"
                      >
                        <option
                          value="https://opencart.mahardhi.com/MT04/artiem/index.php?route=product/category&amp;path=18&amp;sort=p.sort_order&amp;order=ASC"
                          selected="selected"
                        >
                          Default
                        </option>
                        <option
                          value="index7e38.html?route=product/category&amp;path=18&amp;sort=pd.name&amp;order=ASC"
                        >
                          Name (A - Z)
                        </option>
                        <option
                          value="indexbd7a.html?route=product/category&amp;path=18&amp;sort=pd.name&amp;order=DESC"
                        >
                          Name (Z - A)
                        </option>
                        <option
                          value="indexfe17.html?route=product/category&amp;path=18&amp;sort=p.price&amp;order=ASC"
                        >
                          Price (Low &gt; High)
                        </option>
                        <option
                          value="index909f.html?route=product/category&amp;path=18&amp;sort=p.price&amp;order=DESC"
                        >
                          Price (High &gt; Low)
                        </option>
                        <option
                          value="index887a.html?route=product/category&amp;path=18&amp;sort=rating&amp;order=DESC"
                        >
                          Rating (Highest)
                        </option>
                        <option
                          value="indexa01b.html?route=product/category&amp;path=18&amp;sort=rating&amp;order=ASC"
                        >
                          Rating (Lowest)
                        </option>
                        <option
                          value="indexe404.html?route=product/category&amp;path=18&amp;sort=p.model&amp;order=ASC"
                        >
                          Model (A - Z)
                        </option>
                        <option
                          value="index610b.html?route=product/category&amp;path=18&amp;sort=p.model&amp;order=DESC"
                        >
                          Model (Z - A)
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="cat-show">
                  <div class="text-right show-text clearfix">
                    <label class="control-label text_limit" for="input-limit"
                      >Show:</label
                    >
                  </div>
                  <div class="text-right show-select clearfix">
                    <div class="select-filter-show">
                      <select
                        id="input-limit"
                        class="form-control limits-text"
                        onchange="location = this.value;"
                      >
                        <option
                          value="https://opencart.mahardhi.com/MT04/artiem/index.php?route=product/category&amp;path=18&amp;limit=9"
                          selected="selected"
                        >
                          9
                        </option>
                        <option
                          value="index73a0.html?route=product/category&amp;path=18&amp;limit=18"
                        >
                          18
                        </option>
                        <option
                          value="indexb9aa.html?route=product/category&amp;path=18&amp;limit=27"
                        >
                          27
                        </option>
                        <option
                          value="index841b.html?route=product/category&amp;path=18&amp;limit=36"
                        >
                          36
                        </option>
                        <option
                          value="indexeb49.html?route=product/category&amp;path=18&amp;limit=45"
                        >
                          45
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
                    include 'html/ltr/PaintingListBackEnd.php';
                    while($row = mysqli_fetch_array($resultData))
                    {
                      echo ' <div class="row category-row">';
                  echo '  <div class="product-layout product-list col-xs-12">';
                  echo '   <div class="product-thumb">';
               
                  echo '<div class="image">';
                  
                    echo "<img class='w-25' src='html/ltr/Uploads/$row[id]/$row[PaintingImage]'  alt='".$row['PaintingName']."'  title=''  class='img-responsive'/>";
                    echo " <img src='html/ltr/Uploads/$row[id]/$row[PaintingImage]'  alt='".$row['PaintingName']."'    class='img-responsive hover-img' />";
                 
                echo '</div>';

                 echo'<div class="thumb-description clearfix">';
                 echo  '<div class="caption">';
                  
                 echo    '<h4 class="product-title">'.$row['PaintingName'].'</h4>';
                 echo  '<p class="price">'.$row['SellingPrice'].'</p>';
                 echo  ' <p class="description">'.$row['PaintingDiscription'].'</p>';

                 echo  '<button type="button" class="addcart" title="Add to Cart" onclick="cart.add("41")"> + Add to Cart  </button>';

                 echo  '<div class="button-group btn-list">';
                 echo  '<button type="button" class="addcart-list" title="Add to Cart" onclick="cart.add("41")" > Add to Cart</button>';
                echo   '</div>';
                   
                 echo  '</div>';
                
                 echo'</div>';

                 echo'</div>';
                 echo'</div>';

                 echo'</div>';
              }
              ?>
              
          <div class="pro_pagination clearfix">
            <div class="col-sm-6 text-left">Showing 1 to 9 of 18 (2 Pages)</div>
            <div class="col-sm-6 text-right">
              <ul class="pagination">
                <li class="active"><span>1</span></li>
                <li>
                  <a
                    href="#"
                    >2</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    >&gt;</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    >&gt;|</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include 'footer.php';?>