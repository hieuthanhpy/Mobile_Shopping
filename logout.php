<?php
session_start();
unset($_SESSION["uid"]);
unset($_SESSION["name"]);
$backToMyPage = $_SESSION['HTTP_REFERER'];
if(isset($backToMyPage))
{
  header('Location: '.$backToMyPage);
}
else
{
  header('Location: index.php');
}
?>