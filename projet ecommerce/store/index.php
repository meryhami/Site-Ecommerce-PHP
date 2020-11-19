<?php 

session_start();


?>
    <?php 
    
    include("includes/header.php");
    
    ?>
   <div class="container" id="slider"><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                   
                   <div class="item active">
                       
                       <img src="admin_area/slides_images/slidere1.jpg" alt="Slider Image 1">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="admin_area/slides_images/sliderr2.jpg" alt="Slider Image 2">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="admin_area/slides_images/sliderr3.png" alt="Slider Image 3">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="admin_area/slides_images/slide-4.jpg" alt="Slider Image 4">
                       
                   </div>
                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish -->
       
   </div><!-- container Finish -->
   
   <div id="advantages"><!-- #advantages Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="same-height-row"><!-- same-height-row Begin -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-heart"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Offer</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-tag"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Prices</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-thumbs-up"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">100% Original</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
           </div><!-- same-height-row Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- #advantages Finish -->
   
   <div id="hot"><!-- #hot Begin -->
       
       <div class="box"><!-- box Begin -->
           
           <div class="container"><!-- container Begin -->
               
               <div class="col-md-12"><!-- col-md-12 Begin -->
                   
                   <h2>
                       Our Latest Products
                   </h2>
                   
               </div><!-- col-md-12 Finish -->
               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       
   </div><!-- #hot Finish -->
     <?php 
    
    include("includes/config.php");
$sql =" SELECT * FROM `product` ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
     {
     $id = $row["id"];
     	echo '<div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/';echo $row["image1"]; echo '"alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">';
                             echo  $row["title"];
                        echo '</a>
                       </h3>
                       
                       <p class="price">'; echo $row["price"]; echo '</p>
                    
                           
                       
                           
                           <a href="details.php?productid='; echo $id; echo ' " class="btn btn-default">View Details</a>
               
                        
                   
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->';

}
    }

    ?>
    
    <div id="hot"><!-- #hot Begin -->
       
       <div class="box"><!-- box Begin -->
           
           <div class="container"><!-- container Begin -->
               
               <div class="col-md-12"><!-- col-md-12 Begin -->
                   
                   <h2>
Products recently seeing
                   </h2>
                   
               </div><!-- col-md-12 Finish -->
               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       
   </div><!-- #hot Finish -->
        <?php 
    
    include("includes/config.php");
$s2=$_COOKIE["last_seeing1"];
$sql =" SELECT * FROM `product` where id = '$s2' ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
     {
         $id = $row["id"];
   
  echo' <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/';echo $row["image1"]; echo '"alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">';
                               echo  $row["title"];
                          echo' </a>
                       </h3>
                       
                       <p class="price">';echo  $row["price"]; echo '</p>
                       
                       <p class="button">
                 <a href="details.php?productid='; echo $id; echo ' " class="btn btn-default">View Details</a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->'; }}?>
           
         <?php 
    
    include("includes/config.php");
$s3=$_COOKIE["last_seeing2"];
$sql =" SELECT * FROM `product` where id = '$s3' ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
     {
        $id = $row["id"];
  echo' <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/';echo $row["image1"]; echo '"alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">';
                               echo  $row["title"];
                          echo' </a>
                       </h3>
                       
                       <p class="price">';echo  $row["price"]; echo '</p>
                       
                       <p class="button">
                           
                          <a href="details.php?productid='; echo $id; echo ' " class="btn btn-default">View Details</a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->'; }}?>
           <?php 
    
    include("includes/config.php");
$s4=$_COOKIE["last_seeing3"];
$sql =" SELECT * FROM `product` where id = '$s4' ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
     {
        $id = $row["id"];
  echo' <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/';echo $row["image1"]; echo '"alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">';
                               echo  $row["title"];
                          echo' </a>
                       </h3>
                       
                       <p class="price">';echo  $row["price"]; echo '</p>
                       
                       <p class="button">
                           
                          <a href="details.php?productid='; echo $id; echo ' " class="btn btn-default">View Details</a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->'; }}?>
           <?php 
    
    include("includes/config.php");
$s=$_COOKIE["last_seeing4"];
$sql =" SELECT * FROM `product` where id = '$s' ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
     {
        $id = $row["id"];
  echo' <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/';echo $row["image1"]; echo '"alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">';
                               echo  $row["title"];
                          echo' </a>
                       </h3>
                       
                       <p class="price">';echo  $row["price"]; echo '</p>
                       
                       <p class="button">
                           
              <a href="details.php?productid='; echo $id; echo ' " class="btn btn-default">View Details</a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->'; }}?>
     
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->
   
  
           
           
    <div id="hot"><!-- #hot Begin -->
       
       <div class="box"><!-- box Begin -->
           
           <div class="container"><!-- container Begin -->
               
               <div class="col-md-12"><!-- col-md-12 Begin -->
                   
                   <h2>
                       
recently purchased products
                   </h2>
                   
               </div><!-- col-md-12 Finish -->
               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       
   </div><!-- #hot Finish -->
        <?php 
    
    include("includes/config.php");
$s2=$_COOKIE["product_add_to_soppincart2"];
$sql =" SELECT * FROM `product` where id = '$s2' ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
     {
         $id = $row["id"];
   
  echo' <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/';echo $row["image1"]; echo '"alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">';
                               echo  $row["title"];
                          echo' </a>
                       </h3>
                       
                       <p class="price">';echo  $row["price"]; echo '</p>
                       
                       <p class="button">
                 <a href="details.php?productid='; echo $id; echo ' " class="btn btn-default">View Details</a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->'; }}?>
           
         <?php 
    
    include("includes/config.php");
$s3=$_COOKIE["product_add_to_soppincart3"];
$sql =" SELECT * FROM `product` where id = '$s3' ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
     {
        $id = $row["id"];
  echo' <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/';echo $row["image1"]; echo '"alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">';
                               echo  $row["title"];
                          echo' </a>
                       </h3>
                       
                       <p class="price">';echo  $row["price"]; echo '</p>
                       
                       <p class="button">
                           
                          <a href="details.php?productid='; echo $id; echo ' " class="btn btn-default">View Details</a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->'; }}?>
           <?php 
    
    include("includes/config.php");
$s4=$_COOKIE["product_add_to_soppincart4"];
$sql =" SELECT * FROM `product` where id = '$s4' ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
     {
        $id = $row["id"];
  echo' <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/';echo $row["image1"]; echo '"alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">';
                               echo  $row["title"];
                          echo' </a>
                       </h3>
                       
                       <p class="price">';echo  $row["price"]; echo '</p>
                       
                       <p class="button">
                           
                          <a href="details.php?productid='; echo $id; echo ' " class="btn btn-default">View Details</a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->'; }}?>
           <?php 
    
    include("includes/config.php");
$s=$_COOKIE["product_add_to_soppincart1"];
$sql =" SELECT * FROM `product` where id = '$s' ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
     {
        $id = $row["id"];
  echo' <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/';echo $row["image1"]; echo '"alt="Product 1">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">';
                               echo  $row["title"];
                          echo' </a>
                       </h3>
                       
                       <p class="price">';echo  $row["price"]; echo '</p>
                       
                       <p class="button">
                           
              <a href="details.php?productid='; echo $id; echo ' " class="btn btn-default">View Details</a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->'; }}?>
     
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->
   
  
           
           
   
   <?php 
    
    include("includes/footer.php");

    ?>
    
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>