<?php 

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   

   
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div  class="navbar-header">
       <a class="navbar-brand" href="#">
                   <?php 
                   
                   if(!isset($_SESSION['login_user'])){
                       
                       echo "Welcome: Guest";
                       
                   }else{
                       
                       echo "Welcome: " . $_SESSION['login_user'] . "";
                       
                   }
                   
                   ?>
               </a>
     
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="updateDelet.php">delete/update Product</a></li>
      <li><a href="#">
      
      <li><a href="insert_product.php">insert product </a></li>
      <li>
                     
                           
                           <?php 
                           
                           if(!isset($_SESSION['login_user'])){
                       
                                echo "<a href='login.php'> Login </a>";

                               }else{

                                echo " <a href='logout.php'> Log Out </a> ";

                               }
                           
                           ?>
                    
                   </li>
    </ul>
  </div>
</nav>
</body>
</html>