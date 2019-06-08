<?php
include 'header.php';
?>
<script id="jsbin-javascript">
	(function(global) {
		if (typeof(global) === "undefined") {
			throw new Error("window is undefined");
		}
		var _hash = "!";
		var noBackPlease = function() {
			global.location.href += "#";
			// making sure we have the fruit available for juice....
			// 50 milliseconds for just once do not cost much (^__^)
			global.setTimeout(function() {
				global.location.href += "!";
			}, 50);
		};
		// Earlier we had setInerval here....
		global.onhashchange = function() {
			if (global.location.hash !== _hash) {
				global.location.hash = _hash;
			}
		};
		global.onload = function() {
			noBackPlease();
			// disables backspace on page except on input fields and textarea..
			document.body.onkeydown = function(e) {
				var elm = e.target.nodeName.toLowerCase();
				if (e.which === 8 && (elm !== 'input' && elm !== 'textarea')) {
					e.preventDefault();
				}
				// stopping event bubbling up the DOM tree..
				e.stopPropagation();
			};
		};
	})(window);
</script>
<div class="main main-raised">

	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ASIDE -->
				<div id="aside" class="col-md-3">


					<!-- aside Widget -->
					<div id="get_brand">
					</div>
					<!-- /aside Widget -->

					<!--aside Widget-->
					<div class="section-title">
            <h4 class="title">Top thịnh hành</h4>
            <div class="section-nav">
              <div id="slick-nav-3" class="products-slick-nav"></div>
            </div>
					</div>
					<div class="products-widget-slick-product-list" data-nav="#slick-nav-3">
              <!-- product widget -->
              <?php
                    include 'connectDB.php';
                    $product_query = "SELECT * FROM products, brands WHERE products.brand_id=brands.brand_id AND product_price > 6000000 AND product_price < 14000000 GROUP By RAND()";
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
				<!-- /ASIDE -->

				<!-- STORE -->
				<div id="store" class="col-md-9">

					<!-- store products -->
					<div class="row" >
						<div class="col-md-12 col-xs-12" id="product_msg">
						</div>
						<!-- product -->
						<div class="col-md-12 mainn mainn-body">
							<div class="row">
								<div class="products-tabs">
									<div id="get_product"></div>

								</div>
							</div>
						</div>
					</div>
					<!--Here we get product jquery Ajax Request-->
				</div>

				<!-- /product -->
			</div>
			<!-- /store products -->

			<!--store bottom filter-->
			<div class="store-filter clearfix">
				<ul class="store-pagination" id="pageno">
					<li><a class="active" href="#aside">1</a></li>

					<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
			<!--/store bottom filter-->
		</div>
		<!-- /STORE -->
	</div>
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
	<!-- /row -->
</div>
<!-- /container -->
</div>

</div>
<?php
include "newsletter.php";
include "footer.php";
?>