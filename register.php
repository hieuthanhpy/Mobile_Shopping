<?php
session_start();
include "connectDB.php";
if(isset($_POST["f_name"])){
  $f_name=$_POST["f_name"];
  $l_name=$_POST["l_name"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $repassword=$_POST["repassword"];
  $mobile=$_POST["mobile"];
  $address1=$_POST["address1"];
  $address2=$_POST["address2"];
  if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) || 
  empty($mobile) || empty($address1) || empty($address2)){
    echo "
    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>$times;</a><b>Please Fill all fields ..!</b>
    </div>
    ";
    exit();
  }else{
    if (!preg_match($na))
  }
}

?>