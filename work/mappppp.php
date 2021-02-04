<?php
$user_ip=getenv('REMOTE_ADDR');
$geo=unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$city=$geo["geoplugin_city"];
$region=$geo["geoplugin_region"];
$country=$geo["geoplugin_countryName"];
echo $city " ,  " $region "  ,  " $country;
?>