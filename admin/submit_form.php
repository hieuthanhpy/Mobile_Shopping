<?php
$link=$_REQUEST['success'];
?>
<html>
<head>
<script>
function myFunction(){
  document.getElementById("success").click();
}
</script>
</head>
<body onLoad="myFunction()">
<form action="index.php" method="post" id="myform">
<input hidden="" type="text" name="success" value="<?php echo "$link"; ?>">
<button hidden="" type="submit" id="success" data-modal="success" name="success" value="success"></button>
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
</body>
</html>