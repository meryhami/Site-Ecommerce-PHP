<?php 

session_start();


?>
<?php
$date = date('Y-m-d H:i:s');
echo $date;
 include("includes/config.php");
    
$id=getRealIpUser();


    setcookie('last_seeing4', $_COOKIE["last_seeing3"], time() + (86400 * 30));
    setcookie('last_seeing3',$_COOKIE["last_seeing2"], time() + (86400 * 30));
    setcookie('last_seeing2', $_COOKIE["last_seeing1"], time() + (86400 * 30));
    setcookie('last_seeing1', $_SESSION['product_id'], time() + (86400 * 30));
    
  
if(isset($_POST['add_cart'])){
    $id_pro=$_SESSION['product_id'];
   $price= $_SESSION['price'];
$qy= $_POST['product_qty'];
 
 
    
       
    setcookie('product_add_to_soppincart4', $_COOKIE["product_add_to_soppincart3"] , time() + (86400 * 30));
     
    setcookie('product_add_to_soppincart3', $_COOKIE["product_add_to_soppincart2"] , time() + (86400 * 30));
        
    setcookie('product_add_to_soppincart2', $_COOKIE["product_add_to_soppincart1"] , time() + (86400 * 30));
    
    setcookie('product_add_to_soppincart1', $id_pro, time() + (86400 * 30));
$sql = "INSERT INTO `shoppingcart` (id_cart,date,product_id,quantity

) VALUES ('$id','$date','$id_pro','$qy')";

if (mysqli_query($conn, $sql)) {
    

        echo "<script>window.open('index.php','_self')</script>";
       
        
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}
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
   
  
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                   <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                                   <li data-target="#myCarousel" data-slide-to="2"></li>
                               </ol><!-- carousel-indicators Finish -->
                               
                               <div class="carousel-inner">
                                   <div class="item active">
                                       <?php 
    
    include("includes/config.php");

$sql =" SELECT * FROM `product` WHERE id='".$_GET['productid']."'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
     {
    $_SESSION['product_id']=$row['id'];
    $_SESSION['price'] = $row["price"];
    echo'
                                       <center><img class="img-responsive"   src="admin_area/product_images/';echo $row["image1"]; echo '"alt="Product 3-a"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive"   src="admin_area/product_images/';echo $row["image2"]; echo '" alt="Product 3-b"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive"   src="admin_area/product_images/';echo $row["image3"]; echo '" alt="Product 3-c"></center>
                                   </div>
                               </div>
                               
                               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- left carousel-control Finish -->
                               
                               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- right carousel-control Finish -->
                               
                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->
                   </div><!-- col-sm-6 Finish -->';
                   
                    
  
                  echo' <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div class="box"><!-- box Begin -->
                           <h1 class="text-center">';echo $row["title"]; echo '</h1>
                           
                           <form action="details.php" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                               <div class="form-group"><!-- form-group Begin -->
                                   <label for="" class="col-md-5 control-label">Products Quantity</label>
                                   
                                   <div class="col-md-7"><!-- col-md-7 Begin -->
                                          <select name="product_qty" id="" class="form-control"><!-- select Begin -->
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           </select><!-- select Finish -->
                                   
                                    </div><!-- col-md-7 Finish -->
                                   
                               </div><!-- form-group Finish -->
                               
                               <div class="form-group"><!-- form-group Begin -->
                                   <label class="col-md-5 control-label">Price:</label>
                                   
                                   <div class="col-md-7"><!-- col-md-7 Begin -->
                                         <p class="price">$'; echo $row["price"] ; echo '</p>
                                      
                                   </div><!-- col-md-7 Finish -->
                               </div><!-- form-group Finish -->
                             
                               
                             
                               
                            
            
                           
                       </div><!-- box Finish -->
                       
                       <div class="row" id="thumbs">
                       
                       
                       <label class="col-md-5 control-label">Product Details</label>
                                   
                                   <div class="col-md-7"><!-- col-md-7 Begin -->
                                         <p class="price">'; echo $row["details"] ; echo '</p>
                                      
                                   </div><!-- col-md-7 Finish -->
                                    <p class="text-center buttons"><button type="submit" name="add_cart" class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>
                               
                    
                
                       
                       <hr>
                       
                       
                       <!-- row Begin -->
                           
                           
                           
                           
                       </div><!-- row Finish -->
                       
                      
                   
               </div><!-- row Finish -->
                              </form><!-- form-horizontal Finish -->
             
                   
               </div><!-- box Finish -->
              '; }} ?>
               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Products You Maybe Like</h3><br>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->
                   
                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 6">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">M-Dev Tank Top Women</a></h3>
                                
                                <p class="price">$40</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/Product-5a.jpg" alt="Product 6">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">M-Dev Street Shirt Women</a></h3>
                                
                                <p class="price">$45</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/Product-4a.jpg" alt="Product 6">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">M-Dev Polo T-Shirt Women</a></h3>
                                
                                <p class="price">$50</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
               </div><!-- #row same-heigh-row Finish -->
               
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