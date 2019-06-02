<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";
if(isset($_POST["addToCart"]))
{
	$p_id = $_POST["proId"];
	if(isset($_SESSION["uid"]))
	{
		$user_id = $_SESSION["uid"];
		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0)
		{
		
		} else 
		{
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) VALUES ('$p_id','$ip_add','$user_id','1')";
			if(mysqli_query($con,$sql))
			{
		
			}
		}
		}else
		{
			$sql = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
			$query = mysqli_query($con,$sql);
			if (mysqli_num_rows($query) > 0) 
			{
				
			}
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
			if (mysqli_query($con,$sql)) 
			{
				
				exit();
			}
			
		}

	}

//Count User cart item
if (isset($_POST["count_item"])) 
{
	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["uid"])) 
	{
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[uid]";
	}
	else
	{
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";
	}
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	echo $row["count_item"];
	exit();
}
//Count User cart item

//Get Cart Item From Database to Dropdown menu
if (isset($_POST["Common"])) 
{

	if (isset($_SESSION["uid"])) 
	{
		//When user is logged in this query will execute
		$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
	}
	else
	{
		//When user is not logged in this query will execute
		$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0";
	}
	$query = mysqli_query($con,$sql);
	if (isset($_POST["getCartItem"])) 
	{
		//display cart item in dropdown menu
		if (mysqli_num_rows($query) > 0) 
		{
			$n=0;
			$total_price=0;
			while ($row=mysqli_fetch_array($query)) 
			{       
				$n++;
				$product_id = $row["product_id"];
				$product_title = $row["product_title"];
				$product_price = $row["product_price"];
				$product_image = $row["product_image"];
				$cart_item_id = $row["id"];
				$qty = $row["qty"];
				$total_price=$total_price+$product_price;
				echo '
					<div class="product-widget">
						<div class="product-img">
							<img src="product_images/'.$product_image.'" alt="">
						</div>
					<div class="product-body">
						<h3 class="product-name"><a href="#">'.$product_title.'</a></h3>
						<h4 class="product-price"><span class="qty">'.$n.'</span>$'.$product_price.'</h4>
					</div>
					</div>';
				
			}
            
      echo '<div class="cart-summary">
				<small class="qty">'.$n.' Item(s) selected</small>
				<h5>$'.$total_price.'</h5>
			</div>';

			exit();
		}
	}
	
    
    
		// if (isset($_POST["checkOutDetails"])) 
		// {
		// 	if (mysqli_num_rows($query) > 0) 
		// 	{
		// 		//display user cart item with "Ready to checkout" button if user is not login
		// 		echo '<div class="main ">
		// 		<div class="table-responsive">
		// 		<form method="post" action="login_form.php">
		// 			<table id="cart" class="table table-hover table-condensed" id="">
		// 				<thead>
		// 					<tr>
		// 						<th style="width:50%">Product</th>
		// 						<th style="width:10%">Price</th>
		// 						<th style="width:8%">Quantity</th>
		// 						<th style="width:7%" class="text-center">Subtotal</th>
		// 						<th style="width:10%"></th>
		// 					</tr>
		// 				</thead>
		// 				<tbody>
		// 									';
		// 			$n=0;
		// 			while ($row=mysqli_fetch_array($query)) 
		// 			{
		// 				$n++;
		// 				$product_id = $row["product_id"];
		// 				$product_title = $row["product_title"];
		// 				$product_price = $row["product_price"];
		// 				$product_image = $row["product_image"];
		// 				$cart_item_id = $row["id"];
		// 				$qty = $row["qty"];
		// 			}
		// }
	}	


?>






