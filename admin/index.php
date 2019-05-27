<?php
$email=$_POST['email'];
$pass=$_POST['password'];
$error="";
$success="";
$msg="";
$sql = "select * from admin_info where username='$email";
$conn=mysqli_connect('localhost', 'root', '', 'dienthoaididong');
if(!$conn){
	$error="connect failure!";
}
mysqli_select_db($conn,"test");
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row){
	if($row["password"]==$pass){
		$success="Welcome ".$username;
		$error="";
		$msg="Log out";
	}
	else{
		$success="Invalid Password!";
		$error="";
		$msg= "Try again!";
	}
}else{
	$success="Invalid Username!";
	$error="";
	$msg= "Try again!";
}

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
				</div>
			</div>
		</div>
	</div>
</body>

</html>