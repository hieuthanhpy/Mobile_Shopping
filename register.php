<?php

require_once("db_Con.php");
 if (isset($_POST["signup_button"]))
  { 
      //lấy thông tin từ các form bằng phương thức POST 
      $f_name = $_POST["f_name"];
      $l_name = $_POST["l_name"];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $repassword = $_POST['repassword'];
      $mobile = $_POST['mobile'];
      $address1 = $_POST['address1'];
      $address2 = $_POST['address2'];
      //điều kiện kiểm tra giá trị
      $name = "/^[a-zA-Z ]+$/";
      $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
      $number = "/^[0-9]+$/";
//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
    if ($f_name==""||$l_name == "" || $email == "" || $password == "" || $repassword == ""||$mobile==""||$address1==""||$address2==""){
        echo "bạn vui lòng nhập đầy đủ thông tin";
        exit();
    }
    // kiểm tra từng thuộc tính
    else{
        if(!preg_match($name,$f_name))
        {
            echo "first name is not valid";
            exit();
        }
        if(!preg_match($name,$l_name)){
            echo "last name is not valid";
            exit();
        }
        if(!preg_match($emailValidation,$email)){
            echo"email not is valid";
            exit();

        }
        if(strlen($password)<8){
            echo"password is sort";
            exit();
        }
        if($password != $repassword){
            echo"repassword is not same password ";
            exit();
        }
        if(!preg_match($number, $mobile)){
            echo" phone is not valid ";
            exit();
        }
        if(strlen($mobile)!=10){
            echo"phone is not valid";
            exit();
        }
        $sql= "select * from user_info where email = '$email'";
        $kt= mysqli_query($conn,$sql);
        if(mysqli_num_row($kt)>0){
            echo "email is already available";
            exit();
        }


        else{
    $sql = "INSERT INTO `user_info` 
		(`user_id`, `first_name`, `last_name`, `email`, 
		`password`, `mobile`, `address1`, `address2`) 
		VALUES (NULL, '$f_name', '$l_name', '$email', 
		'$password', '$mobile', '$address1', '$address2')";
        mysqli_query($con,$sql);
        echo" register is success";
        }
    }
}
?>