<?php 
         
      function twopoints_on_earth($latitudeFrom, $longitudeFrom, 
                                    $latitudeTo,  $longitudeTo) 
      { 
           $long1 = deg2rad($longitudeFrom); 
           $long2 = deg2rad($longitudeTo); 
           $lat1 = deg2rad($latitudeFrom); 
           $lat2 = deg2rad($latitudeTo); 
              
           //Haversine Formula 
           $dlong = $long2 - $long1; 
           $dlati = $lat2 - $lat1; 
              
           $val = pow(sin($dlati/2),2)+cos($lat1)*cos($lat2)*pow(sin($dlong/2),2); 
              
           $res = 2 * asin(sqrt($val)); 
              
           $radius = 3958.756; 
              
           return ($res*$radius)*1.60934; 
      } 
  
      // latitude and longitude of Two Points 
      $latitudeFrom = 19.017656 ; 
      $longitudeFrom =  40.7127; 
      $latitudeTo = 19.010656; 
      $longitudeTo = 40.7051; 

      $lat1=$latitudeFrom-0.007;
      $lat2=$latitudeFrom+0.007;
      $long1=$longitudeFrom-0.007;
      $long2=$longitudeFrom+0.007;
         
      // Distance between Mumbai and New York 
      print_r(twopoints_on_earth( $latitudeFrom, $longitudeFrom,  
                    $latitudeTo,  $longitudeTo).' '.'KMs'); 
  echo "<br>".$lat1.",<br>".$lat2.",<br>".$long1.",<br>".$long2;
// This code is contributed by akash1295 
// https://auth.geeksforgeeks.org/user/akash1295/articles 



?> 