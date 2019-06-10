<?php
session_start();
?>
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

	<div class="container-fluid main-container">

		<?php include("include/side_bar.php"); ?>

		<div class="col-md-9 content" style="margin-left:10px">
			<div class="panel panel-default">
				<div class="panel-heading" style="background-color:#c4e17f">
					<h1>Welcome </h1>
				</div><br>
				<div class="panel-body">
					<h3>
						<?php
						if(isset($_POST['success'])){
							$success=$_POST["success"];
							echo "
							<h1 style='color:#0c0'>Sản phẩm được thêm vào cơ sở dữ liệu <span class='glyphicon glyphicon-ok'></h1></span>
							";
						}
						?>
					</h3>
				</div>
			</div>
		</div>
	</div>
</body>

</html>