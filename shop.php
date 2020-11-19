<?php 

session_start();


?>
 <?php 
    
    include("includes/header.php");
    
    ?>
             <?php
    function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}

?>
              
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           
   <?php

function getId($id)
{
    echo $id;
}
?>
   
           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div class="box"><!-- box Begin -->
                   <h1>Shop</h1>
                   <p>
                       
welcome to our e commerce website you can buy whatever you want with resonable prices
                   </p>
               </div><!-- box Finish -->
               
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
    
    
  
           
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>


