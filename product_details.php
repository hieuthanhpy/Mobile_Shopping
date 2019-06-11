<?php
include "header.php";
?>

<!-- SECTION -->
<div class="section main main-body">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <!-- Product main img -->
      <?php
      include 'connectDB.php';
      $product_id=$_GET['p'];
      $sql="SELECT * FROM products WHERE product_id = $product_id";
      if(!$con){
        die("Connection failed: ".mysqli_connect_error());
      }
      $result=mysqli_query($con,$sql);
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
          $product_image = $row['product_image'];
          $product_title = $row['product_title'];
          $product_price = $row['product_price'];
          $product_description = $row['product_desc'];
          $product_technical= $row['product_TechSpecifications'];
          echo "
          <div class='col-md-5'>
        <div id='product-main-img'>
          <div class='product-preview'>
            <img src='product_images/$product_image' alt=''>
          </div>
        </div>
      </div>

      <div class='col-md-7'>
        <div class='product-details'>
          <h2 class='product-name'> $product_title </h2>
          <div>
            <div class='product-rating'>
              <i class='fa fa-star'></i>
              <i class='fa fa-star'></i>
              <i class='fa fa-star'></i>
              <i class='fa fa-star'></i>
              <i class='fa fa-star-o'></i>
            </div>
          </div>
          <div>
            <h3 class='product-price'>$product_price </h3>
            <span class='product-available'>Còn hàng</span>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p class='promotion'><strong>Khuyến mãi: </strong>Hỗ trợ trả góp 0% dành cho các chủ thẻ tín dụng VPBank, MSB, Sacombank, VIB và Shinhan Bank</p>
          <div class='add-to-cart'>
            <div class='btn-group' style='margin-left: 25px; margin-top: 15px'>
              <button class='add-to-cart-btn'  id='product'><i class='fa fa-shopping-cart'></i> Thêm vào giỏ hàng</button>
            </div>
          </div>

          <ul class='product-links'>
            <li style='font-size:14px;'><strong>Chia sẻ:</strong></li>
            <li><a href='#'><i class='fa fa-facebook'></i></a></li>
            <li><a href='#'><i class='fa fa-twitter'></i></a></li>
            <li><a href='#'><i class='fa fa-google-plus'></i></a></li>
            <li><a href='#'><i class='fa fa-envelope'></i></a></li>
          </ul>

        </div>
      </div>

      <!-- Product tab -->
      <div class='col-md-12'>
        <div id='product-tab'>
          <!-- product tab nav -->
          <ul class='tab-nav'>
            <li class='active'><a data-toggle='tab' href='#tab1'>Mô tả sản phẩm</a></li>
          </ul>
          <!-- /product tab nav -->

          <!-- product tab content -->
          <div class='tab-content'>
            <!-- tab1  -->
            <div id='tab1' class='tab-pane fade in active'>
              <div class='row'>
                <div class='col-md-8' style='padding-right:20px; float:left'>
                $product_description
                  /*viet code detail trong nay*/
                </div>
                <div class='col-md-4' style='float:right;'>
                  <h3 style='color: #D10024;'>Thông số kỹ thuật</h3>
                  $product_technical
                </div>
              </div>
            </div>
            <!-- /tab1  -->

          </div>
          <!-- /product tab content  -->
        </div>
      </div>
          ";
        };
      };
?>

    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /SECTION -->

</div>
<!-- /row -->

</div>
<!-- /container -->
</div>
<!-- /Section -->

<!-- NEWSLETTER -->

<!-- /NEWSLETTER -->

<!-- FOOTER -->

<?php
include "newsletter.php";
include "footer.php";

?>