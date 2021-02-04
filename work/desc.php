<!DOCTYPE html>
<!--Code by Divinector (www.divinectorweb.com)-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marefia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styled.css">    
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
<a href="">
       <div class="imagea">
    
     <img src="ad.png">
</div>
</a>

<h1 class="titlee">Image Name</h1><br/>
<div class="product">
    <div class="product-small-img">

        <img src="images.jpg" onclick="myfunction(this)">
        <img src="images2.jpg" onclick="myfunction(this)">
        <img src="images.jpg" onclick="myfunction(this)">
        <img src="images2.jpg" onclick="myfunction(this)">
        <img src="images.jpg" onclick="myfunction(this)">
        
    </div>
    <div class="image-container">
        <img id="imagebox" src="images.jpg">
    </div>
    <div class="desc">
        <h1>Description</h1>
        <b>Number of bedrooms</b>:&nbsp&nbsp&nbsp4<br>
       <b>Area</b>:&nbsp&nbsp&nbsp100Sq<br>
       <b>Price</b>:&nbsp&nbsp&nbsp500/Night<br>
       <b>More</b>:&nbsp&nbsp&nbsp
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
        <h1>Contact info</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,  </p>
    </div>
</div>
<div class="mapss">
    <h1>Location</h1>


    <p>
       <?php
   
    
        $latitude = '34.0544';
        $longitude = '-118.244';
        ?>
 
        <iframe width="1200" height="300" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
 
        <?php
    
?>
    </p>
</div>

<script>
    function myfunction(smallimg){
        var fullimg = document.getElementById("imagebox");
        fullimg.src = smallimg.src;
    }
</script>


</body>
</html>

