<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
	<table>
		<thead>
			<tr>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Name</th>
			</tr>
		</thead>
		
	<?php

$user_ip = getenv['REMOTE_ADDR'];
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));

$lat = $geo["geoplugin_latitude"];
$lon = $geo["geoplugin_longitude"];



echo "Latitude: ".$lat."<br>";
echo "Longitude: ".$lon."<br>";


 $lat1=$lat-0.007;
 $lat2=$lat+0.007;
 $long1=$lon-0.007;
 $long2=$lon+0.007;

echo $lat1."<br>";
echo $lat2."<br>";
echo $long1."<br>";
echo $long2."<br>";
?>
<?php
$conn=mysqli_connect("localhost","root","");
$dbs=mysqli_select_db($conn,"places");
$query="SELECT * FROM houses";
$query_run=mysqli_query($conn,$query);
echo "Matches in your area<br>";
while ($row=mysqli_fetch_array($query_run)) {

$dlat=$row['Latitude'];
$dlon=$row['Longitude'];

	?>
<tr>
	<td><?php  echo $dlat; ?></td>
	<td><?php  echo $dlon; ?></td>
	<td><?php  echo $row['Name']; ?></td>
	
</tr>
<?php
if ($dlat<$lat2 && $dlat>$lat1 && $dlon>$long1 && $dlon<$long2) {		
			
			
			?>
<a href="<?php echo $row['Email'];  ?>">
			<?php
			echo $dlat;
			echo $dlon;
			echo $row['Name'];
			echo $row['Price'];
			?>
			</a><br>
			<?php

}


}
		?>
	</table>
</form>
</body>
</html>