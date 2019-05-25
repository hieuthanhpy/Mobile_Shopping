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

      <div class="col-md-5">
        <div id="product-main-img">
          <div class="product-preview">
            <img src="./product_images/iphone-8-plus.jpg" alt="">
          </div>
        </div>
      </div>

      <!-- FlexSlider -->
      <div class="col-md-7">
        <div class="product-details">
          <h2 class="product-name"> Tên Sản phẩm </h2>
          <div>
            <div class="product-rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
          </div>
          <div>
            <h3 class="product-price">Giá sản phẩm </h3>
            <span class="product-available">Còn hàng</span>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p class="promotion"><strong>Khuyến mãi: </strong>Hỗ trợ trả góp 0% dành cho các chủ thẻ tín dụng VPBank, MSB, Sacombank, VIB và Shinhan Bank</p>
          <div class="add-to-cart">
            <div class="btn-group" style="margin-left: 25px; margin-top: 15px">
              <button class="add-to-cart-btn" pid="' . $row['product_id'] . '" id="product"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
            </div>
          </div>

          <ul class="product-links">
            <li style="font-size:14px;"><strong>Chia sẻ:</strong></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
          </ul>

        </div>
      </div>


      <!-- /Product main img -->

      <!-- Product thumb imgs -->



      <!-- /Product thumb imgs -->

      <!-- Product details -->

      <!-- /Product details -->

      <!-- Product tab -->
      <div class="col-md-12">
        <div id="product-tab">
          <!-- product tab nav -->
          <ul class="tab-nav">
            <li class="active"><a data-toggle="tab" href="#tab1">Mô tả sản phẩm</a></li>
          </ul>
          <!-- /product tab nav -->

          <!-- product tab content -->
          <div class="tab-content">
            <!-- tab1  -->
            <div id="tab1" class="tab-pane fade in active">
              <div class="row">
                <div class="col-md-8" style="padding-right:20px; float:left">
                  <h4>Thiết kế quen thuộc</h4>
                  <p>Bộ đôi iPhone mới không có nhiều thay đổi về mặt thiết kế so với người anh em iPhone 6s và 6s Plus. Máy vẫn mang trong mình thiết kế nguyên khối với các góc cạnh được bo cong mềm mại mang lại cảm giác cầm nắm khá thoải mái.<br><br>
                    Dải nhựa bắt sóng chạy ngang mặt lưng khá "vô duyên" trên thế hệ điện thoại cũ đã bị loại bỏ và thay vào đó là phần bắt sóng được chạy dọc thân máy thẩm mỹ hơn.<br><br>
                    Jack cắm tai nghe trên bộ đôi mới cũng đã bị Apple loại bỏ và thay vào đó là người dùng sẽ chỉ sử dụng cổng lightning cho cả việc sạc máy cũng như nghe nhạc. Ngoài ra thì điểm khác biệt dễ nhận ra nhất trên iPhone 7 Plus so với những chiếc iPhone trước là cụm camera kép được làm khá to và lồi hẳn lên ở mặt lưng</p>
                  <img src="https://cdn.tgdd.vn/Products/Images/42/78124/iphone-7-plus--7.jpg" "/>
                  <h4>Màu Jet black mới</h4>
                  <p>Với bộ đôi điện thoại iPhone mới thì Apple đã bổ sung thêm màu mới cho các thiết bị của mình là màu Jet Back hay còn gọi là đen bóng. Ở phiên bản màu mới này thì dải nhựa bắt sóng đã được làm gần như trùng màu với màu máy giúp thiết bị liền mạch và cuốn hút hơn.<br><br>Ngoài ra thì iPhone 7 Plus cũng sở hữu các màu khác như màu bạc, đen nhám, vàng và hồng.</p>
                  <img src=" https://cdn.tgdd.vn/Products/Images/42/78124/iphone-7-plus8.jpg" />
                  <h4>Camera kép ấn tượng</h4>
                  <p>iPhone 7 Plus thể hiện sự đột phá của Apple về camera với bộ đôi camera kép có cùng độ phân giải 12 MP lần đầu tiên xuất hiện trên các chiếc iPhone. Theo đó thì iPhone 7 Plus sẽ có một camera chính góc rộng và một camera tele phụ giúp máy có thể zoom quang học lên 2 lần mà vẫn giữ nguyên chất lượng ảnh.
                    <br><br>
                    Ngoài ra Apple cũng trang bị cho máy khẩu độ lên tới f1.8 giúp iPhone 7 Plus thu nhận ánh sáng tốt hơn. Camera trước được nâng lên độ phân giải 7 MP giúp người dùng có những bức ảnh tự sướng chất lượng.
                  </p>
                  <img src="https://cdn.tgdd.vn/Products/Images/42/78124/iphone-7-plus--4.jpg" />
                  <h4>Phím Home cảm ứng lực</h4>
                  <p>Với bộ đôi iPhone 7 và iPhone 7 Plus thì Apple cũng đã loại bỏ phím Home vật lý truyền thống trên các dòng iPhone và thay vào đó là phím Home cảm ứng lực mới mang lại trải nghiệm mới mẻ và tiện dụng hơn cho người dùng.
                  <img src="https://cdn.tgdd.vn/Products/Images/42/78124/iphone-7-plus5.jpg" />
                  <h4>Hiệu năng mạnh mẽ</h4>
                  <p>Với con chip Apple A10 4 lõi xử lý trong đó có 2 lõi hoạt động với xung nhịp cao và 2 lõi hoạt động với xung nhịp thấp thì iPhone 7 plus sẽ mang lại cho người dùng thời gian sử dụng pin ấn tượng hơn đồng thời tốc độ xử lý cũng nhanh hơn so với thế hệ trước.
                  <br><br>
                  Máy được trang bị 3 GB RAM kết hợp với hệ điều hành iOS mới mang lại cho người dùng trải nghiệm mượt mà, ít khi xảy ra hiện tượng giật lag.<p>
                  <img src="https://cdn.tgdd.vn/Products/Images/42/78124/iphone-7-plus--6.jpg" />
                  <p>Với những nâng cấp khá hữu ích cho người dùng cũng như hiệu năng hàng đầu mà máy mang lại thì iPhone 7 Plus sẽ là smartphone đáng sở hữu nhất trong nửa cuối năm 2016.<p>
                </div>
                <div class="col-md-4" style="float:right;">
                  <h3 style="color: #D10024;">Thông số kỹ thuật</h3>
                  <p><b>Màn hình: </b>LED-backlit IPS LCD, 5.5", Retina HD</p>
                  <p><b>Hệ điều hành: </b>iOS 12</p>
                  <p><b>Camera sau: </b> Chính 12 MP & Phụ 12 MP</p>
                  <p><b>Camera trước: </b> 7 MP</p>
                  <p><b>CPU: </b> Apple A10 Fusion 4 nhân 64-bit</p>
                  <p><b>RAM: </b> 3 GB</p>
                  <p><b>Bộ nhớ trong: </b> 32 GB</p>
                  <p><b>Thẻ SIM: </b> 1 Nano SIM, Hỗ trợ 4G</p>
                  <p><b>Dung lượng pin: </b> 2900 mAh</p>
                </div>
              </div>
            </div>
            <!-- /tab1  -->

          </div>
          <!-- /product tab content  -->
        </div>
      </div>
      <!-- /product tab -->
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