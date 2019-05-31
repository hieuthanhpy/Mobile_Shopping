<div class="main main-body">
  <div class="container mainn-body" style="width:100%;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/banner1.webp" alt="" style="width:100%;">
        </div>
        <div class="item">
          <img src="img/banner2.webp" style="width:100%;">
        </div>
        <div class="item">
          <img src="img/banner3.webp" alt="" style="width:100%;">
        </div>
        <div class="item">
          <img src="img/banner4.webp" alt="" style="width:100%;">
        </div>
        <div class="item">
          <img src="img/banner1.webp" alt="" style="width:100%;">
        </div>
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- SECTION -->
  <div class="section mainn mainn-body">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <a href="product.php?p=78">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/shop1.jpg" alt="">
              </div>
              <div class="shop-body">
                <h3>SS Galaxy S10</h3>
          <a href="product_details.php?p=13" class="cta-btn">Khám phá <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div>
          </a>
        </div>
        <!-- /shop -->
        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <a href="">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/shop2.png" alt="">
              </div>
              <div class="shop-body">
                <h3>Huawei P30 Pro</h3>
          <a href="product_details.php?p=75" class="cta-btn">Khám phá <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div>
          </a>
        </div>
        <!-- /shop -->
        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <a href="">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/shop3.jpg" alt="">
              </div>
              <div class="shop-body">
                <h3>iPhone X 256GB</h3>
          <a href="" class="cta-btn">Khám phá <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div>
          </a>
        </div>
        <!-- /shop -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->
  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- section title -->
        <div class="col-md-12">
          <div class="section-title">
            <h3 class="title">Sản phẩm nổi bật</h3>
          </div>
        </div>
        <!-- /section title -->
        <!-- Products tab & slick -->
        <div class="col-md-12 mainn mainn-body">
          <div class="row">
            <div class="products-tabs">
              <!-- tab -->
              <div id="tab1" class="tab-pane active">
                <div class="products-slick" data-nav="#slick-nav-1">
                  <!--Viet code hien thi san pham-->

                  <?php
                    include 'connectDB.php';
                    $product_query = "SELECT * FROM products, brands WHERE products.brand_id=brands.brand_id ORDER BY RAND()";
                    $run_query=mysqli_query($con, $product_query);
                    if(mysqli_num_rows($run_query) > 0) {
                      while($row = mysqli_fetch_array($run_query)){
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
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->
  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- section title -->
        <div class="col-md-12">
          <div class="section-title">
            <h3 class="title">sản phẩm bán chạy</h3>
          </div>
        </div>
        <!-- /section title -->
        <!-- Products tab & slick -->
        <div class="col-md-12 mainn mainn-body">
          <div class="row">
            <div class="products-tabs">
              <!-- tab -->
              <div id="tab2" class="tab-pane fade in active">
                <div class="products-slick" data-nav="#slick-nav-2">
                <?php
                    include 'connectDB.php';
                    $product_query = "SELECT * FROM products, brands WHERE products.brand_id=brands.brand_id AND product_guest = 1";
                    $run_query=mysqli_query($con, $product_query);
                    if(mysqli_num_rows($run_query) > 0) {
                      while($row = mysqli_fetch_array($run_query)){
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

                  <!-- /product -->
                </div>
                <div id="slick-nav-2" class="products-slick-nav"></div>
              </div>
              <!-- /tab -->
            </div>
          </div>
        </div>
        <!-- /Products tab & slick -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->
  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-4 col-xs-6">
          <div class="section-title">
            <h4 class="title">Top giá Rẻ</h4>
            <div class="section-nav">
              <div id="slick-nav-3" class="products-slick-nav"></div>
            </div>
          </div>
          <div class="products-widget-slick" data-nav="#slick-nav-3">
              <!-- product widget -->
              <?php
                    include 'connectDB.php';
                    $product_query = "SELECT * FROM products, brands WHERE products.brand_id=brands.brand_id AND product_price < 6000000 GROUP By RAND()";
                    $run_query=mysqli_query($con, $product_query);
                    if(mysqli_num_rows($run_query) > 0) {
                      while($row = mysqli_fetch_array($run_query)){
                        $pro_id = $row['product_id'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];
                        $pro_brand = $row['brand_title'];
                        echo "  
                        <div class='product-widget'>
                          <div class='product-img'>
                            <img src='product_images/$pro_image' alt=''>
                          </div>
                        <div class='product-body'>
                          <p class='product-producer'>$pro_brand</p>
                          <h3 class='product-name'><a href='#'>$pro_title</a></h3>
                          <h4 class='product-price'>$pro_price VND</h4>
                        </div>
                      </div>
                        ";
                      };
                    };
                    ?>                       
            <div id="get_product_home2"></div>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <div class="section-title">
            <h4 class="title">Top giá tầm trung</h4>
            <div class="section-nav">
              <div id="slick-nav-3" class="products-slick-nav"></div>
            </div>
          </div>
          <div class="products-widget-slick" data-nav="#slick-nav-3">
              <!-- product widget -->
              <?php
                    include 'connectDB.php';
                    $product_query = "SELECT * FROM products, brands WHERE products.brand_id=brands.brand_id AND product_price BETWEEN 6000000 AND 11000000";
                    $run_query=mysqli_query($con, $product_query);
                    if(mysqli_num_rows($run_query) > 0) {
                      while($row = mysqli_fetch_array($run_query)){
                        $pro_id = $row['product_id'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];
                        $pro_brand = $row['brand_title'];
                        echo "  
                        <div class='product-widget'>
                          <div class='product-img'>
                            <img src='product_images/$pro_image' alt=''>
                          </div>
                        <div class='product-body'>
                          <p class='product-producer'>$pro_brand</p>
                          <h3 class='product-name'><a href='#'>$pro_title</a></h3>
                          <h4 class='product-price'>$pro_price VND</h4>
                        </div>
                      </div>
                        ";
                      };
                    };
                    ?>                       
            <div id="get_product_home2"></div>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <div class="section-title">
            <h4 class="title">Top giá cao</h4>
            <div class="section-nav">
              <div id="slick-nav-3" class="products-slick-nav"></div>
            </div>
          </div>
          <div class="products-widget-slick" data-nav="#slick-nav-3">
              <!-- product widget -->
              <?php
                    include 'connectDB.php';
                    $product_query = "SELECT * FROM products, brands WHERE products.brand_id=brands.brand_id AND product_price > 12000000";
                    $run_query=mysqli_query($con, $product_query);
                    if(mysqli_num_rows($run_query) > 0) {
                      while($row = mysqli_fetch_array($run_query)){
                        $pro_id = $row['product_id'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];
                        $pro_brand = $row['brand_title'];
                        echo "  
                        <div class='product-widget'>
                          <div class='product-img'>
                            <img src='product_images/$pro_image' alt=''>
                          </div>
                        <div class='product-body'>
                          <p class='product-producer'>$pro_brand</p>
                          <h3 class='product-name'><a href='#'>$pro_title</a></h3>
                          <h4 class='product-price'>$pro_price VND</h4>
                        </div>
                      </div>
                        ";
                      };
                    };
                    ?>                       
            <div id="get_product_home2"></div>
          </div>
        </div>
        
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->
</div>