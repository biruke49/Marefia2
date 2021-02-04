<!DOCTYPE html>
<html>
<head>
	<title>Marefia</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<link rel="stylesheet" href="styleu.css"> 
</head>
<body>
	 <header>
    <div class="wrapper">
        <div class="logo">
            <a href="maps.php"><img src="https://i.postimg.cc/mg4rWBmv/logo.png" alt=""></a>
        </div>
<ul class="nav-area">
<li><a href="maps.php">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href="places.php">Places</a></li>
<li><a href="contact.html">Contact</a></li>
<li class="property"><a href="upform.php">Post Property</a></li>
</ul>
</div>

</header>
<form method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" placeholder="Enter Name"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" placeholder="Enter Email"></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type="text" name="phone" placeholder="Enter phone"></td>
		</tr>
		<tr>
			<td>Area</td>
			<td><input type="text" name="area" placeholder="Enter area"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" placeholder="Enter price"></td>
		</tr>
		<tr>
			<td>Number of Bedrooms</td>
			<td><input type="text" name="bed" placeholder="Enter NumBedrooms"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" name="description" placeholder="Enter description"></td>
		</tr>
		<tr>
			<td>Image 1</td>
			<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td>Image 2</td>
			<td><input type="file" name="image1"></td>
		</tr>
		<tr>
			<td>Image 3</td>
			<td><input type="file" name="image2"></td>
		</tr>
		<tr>
			<td>Image 4</td>
			<td><input type="file" name="image3"></td>
		</tr>
		<tr>
			<td>Image 5</td>
			<td><input type="file" name="image4"></td>
		</tr>
		<tr>
			<td>Image 6</td>
			<td><input type="file" name="image5"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit"></td>
			
		</tr>
	</table>
	
</form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","");
$dbs=mysqli_select_db($conn,"places");
if (isset($_POST['submit'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$area=$_POST['area'];
$price=$_POST['price'];
$desc=$_POST['description'];
$beds=$_POST['bed'];

$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
$image2 = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
$image3 = addslashes(file_get_contents($_FILES['image3']['tmp_name']));
$image4 = addslashes(file_get_contents($_FILES['image4']['tmp_name']));
$image5 = addslashes(file_get_contents($_FILES['image5']['tmp_name']));





$user_ip = getenv['REMOTE_ADDR'];
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));

$lat = $geo["geoplugin_latitude"];
$lon = $geo["geoplugin_longitude"];

$sqls="insert into houses (Name,Email,Phone,Area,Price,Longitude,Latitude,No_of_Bedrooms,image_1,image_2,image_3,image_4,image_5,image_6,Description) values('$name','$email','$phone','$area','$price','$lon','$lat','$beds','$image','$image1','$image2','$image3','$image4','$image5','$desc')";
mysqli_query($conn,$sqls);
}
?>