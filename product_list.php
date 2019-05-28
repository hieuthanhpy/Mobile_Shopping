<?php
include 'header.php';
?>
<div class="main main-raised">
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- BRAND LIST-->
        <div class="col-md-3">
          <div class="aside">
          <h3 class="aside-title">Điện Thoại</h3>
          <ul>
            <?php
            include "connectDB.php";
            $query="SELECT brand_title, COUNT(*) as 'count' FROM brands, products WHERE products.brand_id=brands.brand_id GROUP BY brand_title";
            $run_query=mysqli_query($con,$query);
            if(mysqli_num_rows($run_query) > 0){
              while($row=mysqli_fetch_array($run_query)){
                $brand_title=$row['brand_title'];
                $count =$row['count'];
                echo "
                <li class='brand-item'><a href='#'>$brand_title <span class='label label-success'>($count)</span></a></li>
                ";
              };
            };
            ?>
          </ul>
          </div>
        </div>
        <!--/BRAND LIST-->
        <!-- PRODUCT LIST -->
        <div class="col-md-9">
          <!-- store top filter -->
          <div class="store-filter clearfix">
            <div class="store-sort">
              <label>
                Sort By:
                <select class="input-select">
                  <option value="0">Popular</option>
                  <option value="1">Position</option>
                </select>
              </label>
              <label>
                Show:
                <select class="input-select">
                  <option value="0">20</option>
                  <option value="1">50</option>
                </select>
              </label>
            </div>
            <ul class="store-grid">
              <li class="active"><i class="fa fa-th"></i></li>
              <li><a href="#"><i class="fa fa-th-list"></i></a></li>
            </ul>
          </div>
          <!-- /store top filter -->
          <!-- Products tab & slick -->
          <div class="col-md-12 mainn mainn-body">
            <div class="row">
              <div class="products-tabs">
                <!-- tab -->
                <div id="tab1" class="tab-pane active">
                  <div class="products-slick-pro-page" data-nav="#slick-nav-1">
                    <!--Viet code hien thi san pham-->

                    <?php
                    include 'connectDB.php';
                    $product_query = "SELECT * FROM products, brands WHERE products.brand_id=brands.brand_id";
                    $run_query = mysqli_query($con, $product_query);
                    if (mysqli_num_rows($run_query) > 0) {
                      while ($row = mysqli_fetch_array($run_query)) {
                        $pro_id = $row['product_id'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        echo "                    
                    
                        <div class='product' >
                        <a href='product_details.php?p=$pro_id'>
                          <div class='product-img'>
                            <img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
                              <div class='product-label'>
                                <span class='new'>MỚI</span>
                            </div>
                          </div>
                        </a>
                    <div class='product-body'>
                      <!-- <p class='product-producer'></p> -->
                      <h3 class='product-name header-cart-item-name'><a href='product_datails.php?p=$pro_id'>$pro_title</a></h3>
                      <h4 class='product-price header-cart-item-info'>$pro_price VND</h4>
                      <div class='product-rating'>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star'></i>
                      </div>
                    </div>
                    <div class='add-to-cart'>
                      <button pid='$pro_id' id='product' class='add-to-cart-btn' href='#'><i class='fa fa-shopping-cart'></i> Thêm vào giỏ hàng</button>
                    </div>
                  </div>
                 
                        ";
                      };
                    };

                    ?>

                  </div>
                  <div id="slick-nav-1" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
              </div>
            </div>
          </div>
          <!-- Products tab & slick -->
          <!-- /store top filter -->
          <!-- store products -->
          <div class="row" id="product-row">
            <div class="col-md-12 col-xs-12" id="product_msg">
            </div>
            <!-- product -->
            <div id="get_product">
              <!--Here we get product jquery Ajax Request-->
            </div>
            <!-- /product -->
          </div>
          <!-- /store products -->
        </div>
        <!-- /PRODUCT LIST -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
</div>
<?php
include "newsletter.php";
include "footer.php";
?>