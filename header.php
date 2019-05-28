<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sokly Asia Mobile</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/accountbtn.css" />
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
    <![endif]-->
    <style>
      #navigation {
      background: #FF4E50;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #F9D423, #FF4E50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      #header {
      background: #780206;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #061161, #780206); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      #top-header {
      background: #870000;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #190A05, #870000);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #190A05, #870000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      #footer {
      background: #7474BF;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      color: #1E1F29;
      }
      #bottom-footer {
      background: #7474BF;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      .footer-links li a {
      color: #1E1F29;
      }
      .mainn-raised {
      margin: -7px 0px 0px;
      border-radius: 6px;
      box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
      }
      .glyphicon{
      display: inline-block;
      font: normal normal normal 14px/1 FontAwesome;
      font-size: inherit;
      text-rendering: auto;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      }
      .glyphicon-chevron-left:before{
      content:"\f053"
      }
      .glyphicon-chevron-right:before{
      content:"\f054"
      }
    </style>
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <!-- TOP HEADER -->
      <div id="top-header">
        <div class="container">
          <ul class="header-links pull-left">
            <li><a href="#"><i class="fa fa-phone"></i> (012) 345-6789</a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> example@gmail.com</a></li>
            <li><a href="#"><i class="fa fa-map-marker"></i>Tp. Hồ Chí Minh</a></li>
          </ul>
          <ul class="header-links pull-right">
            <li>
              <div class="dropdownn">
                <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
                <div class="dropdownn-content">
                  <a href="login_form.php" data-toggle="modal" data-target="login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                  <a href="" data-toggle="modal" data-target="register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- /TOP HEADER -->
      <!-- MAIN HEADER -->
      <div id="header">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <!-- LOGO -->
            <div class="col-md-3">
              <div class="header-logo">
                <a href="#" class="logo">
                  <img src="./img/logo.png" alt="logo" />
                  <!-- <font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">Sokly Asia Mobile</font> -->
                </a>
              </div>
            </div>
            <!-- /LOGO -->
            <!-- SEARCH BAR -->
            <div class="col-md-6">
              <div class="header-search">
                <form>
                  <input class="input" id="search" type="text" placeholder="Bạn cần tìm gì?">
                  <button type="submit" id="search_btn" class="search-btn">Tìm kiếm</button>
                </form>
              </div>
            </div>
            <!-- /SEARCH BAR -->
            <!-- ACCOUNT -->
            <div class="col-md-3 clearfix">
              <div class="header-ctn">
                <!-- Cart -->
                <div class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Giỏ hàng</span>
                    <div class="badge qty">0</div>
                  </a>
                  <div class="cart-dropdown"  >
                    <div class="cart-list" id="cart_product">
                    </div>
                    <div class="cart-btns">
                      <a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  edit cart</a>
                    </div>
                  </div>
                </div>
                <!-- /Cart -->
                <!-- Menu Toogle -->
                <div class="menu-toggle">
                  <a href="#">
                  <i class="fa fa-bars"></i>
                  <span>Menu</span>
                  </a>
                </div>
                <!-- /Menu Toogle -->
              </div>
            </div>
            <!-- /ACCOUNT -->
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->
    <nav id='navigation'>
      <!-- container -->
      <div class="container" id="get_category_home">
        <ul class="main-nav nav navbar-nav">
          <li class="active"><a href="index.php">Trang chủ</a></li>
          <?php
          include 'connectDB.php';
          $menu_query = "SELECT brand_title FROM brands";
          $run_query=mysqli_query($con,$menu_query);
          if(mysqli_num_rows($run_query) > 0){
            while($row=mysqli_fetch_array($run_query)){
              $brand_title=$row['brand_title'];
              echo "
              <li class='#'><a href='#'>$brand_title</a></li>
              ";
            };
          };
          ?>
          
        </ul>
      </div>
      <!-- /container -->
    </nav>