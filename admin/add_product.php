<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Xin chào admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style/css/bootstrap.min.css" rel="stylesheet">
  <link href="style/css/k.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>

<body>

  <div class="container-fluid">
    <?php include("include/side_bar.php"); ?>
    <div class="col-md-9 content" style="margin-left:10px">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#c4e17f">
          <h1><span class="glyphicon glyphicon-tag"></span> Sản phẩm / Thêm sản phẩm </h1>
        </div><br>
        <div class="panel-body" style="background-color:#E6EEEE;">
          <div class="col-lg-7">
            <div class="well">
              <form action="add_product.php" method="post" name="form" enctype="multipart/form-data">
                <p>Tên sản phẩm</p>
                <input class="input-lg thumbnail form-control" type="text" name="product_name" id="product_name" autofocus style="width:100%" required>
                <p>Mô tả</p>
                <textarea class="thumbnail form-control" name="details" id="details" style="width:100%; height:100px" required></textarea>
                <p>Hình ảnh sản phẩm</p>
                <div style="background-color:#CCC">
                  <input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture">
                </div>
            </div>
            <div class="well">
              <h3>Giá</h3>
              <p>Giá</p>
              <div class="input-group">
                <div class="input-group-addon">VNĐ</div>
                <input type="text" class="form-control" name="price" id="price" placeholder="0.00" required>
              </div><br>


            </div>
          </div>
          <div class="col-lg-5">
            <div class="well">
              <h3>Loại sản phẩm</h3>         
              <p>Nhà sản xuất</p>
              <input type="number" name="brand" id="brand" class="form-control" >
              <br>
              <p>Other tags</p>
              <input type="text" name="tags" id="tags" class="form-control" placeholder="">
            </div>
          </div>

          <div align="center">
            <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Hủy</button>
            <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px""> Thêm sản phẩm</button>
    </div>
        </form>
 
	</div>
</div></div></div>
</body>
</html>