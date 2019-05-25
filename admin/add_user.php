<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Xin chào admin</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/style_admin.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
<div class="container-fluid">
<?php include("include/side_bar.php"); ?>

  <div class="col-sm-9 " align="center">	
  <div class="panel-heading" style="background-color:#c4e17f;">
	<h1>Thêm người dùng</h1></div><br>
	
<form action="add_user.php" name="form" method="post">
<div class="col-sm-6">
    <input name="first_name" class="input-lg" type="text"  id="first_name" style="font-size:18px; width:330px" placeholder="Họ" autofocus required><br><br>
</div>
<div class="col-sm-6">
<input name="last_name" class="input-lg" type="text"  id="last_name" style="font-size:18px; width:330px" placeholder="Tên" autofocus required><br><br>
    </div>
    <div class="col-sm-6">
    <input name="email" class="input-lg" type="text"  id="email" style="font-size:18px; width:330px" placeholder="Email" autofocus required><br><br>
    </div>
    <div class="col-sm-6">
<input name="user_password" class="input-lg" type="text"  id="user_password" style="font-size:18px; width:330px"  placeholder="Mật khẩu" required><br><br>
    </div>
     <div class="col-sm-6">
    <input name="mobile" class="input-lg" type="phone"  id="mobile" style="font-size:18px; width:330px" placeholder="Số điện thoại" autofocus required><br><br>
    </div>
     <div class="col-sm-6">
    <input name="address1" class="input-lg" type="text"  id="address1" style="font-size:18px; width:330px" placeholder="Địa chỉ" autofocus required><br><br>
    </div>
     <div class="col-sm-6">
    <input name="address2" class="input-lg" type="text"  id="address2" style="font-size:18px; width:330px" placeholder="Địa chỉ khác (nếu có)" autofocus required><br><br>
    </div>
<div class="col-sm-7" style="margin:20px;margin-left:90px;">
    <button type="submit" class="btn btn-success btn-block center" name="btn_save" id="btn_save" style="font-size:18px">Xác nhận</button></div>
</form>
</div></div>
</body>
</html>