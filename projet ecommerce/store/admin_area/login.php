<?php
  
   session_start();
   $error="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      echo "cc";
      $myusername = $_POST['name'];
      $mypassword = $_POST['pass']; 
      if($myusername=='amin' && $mypassword=='laassri')
      {
          echo "wa3";
      	 $_SESSION['login_user']=$myusername;
      	header("location: updateDelet.php");
      }
      else {
         $error = "Your Login Name or Password is invalid";
          echo $error;
      }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Products </title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
</head>
<body>
    

   
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="POST" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Admin name</label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="name" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                     
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Password</label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="pass" type="password" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                   
                   </div><!-- form-group Finish -->
                   
                   
                </div>
                  <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="login" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Login
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
        
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script> 
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>


