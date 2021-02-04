<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="image" >
	<input type="submit" name="submit" value="Upload">
</form>
<?php

$conn=mysqli_connect("localhost","root","");
$dbs=mysqli_select_db($conn,"places");
if (isset($_POST['submit'])) {
	# code...
}

?>
</body>
</html>