<?php 
session_start();
if(isset($_POST['creat_pdf']))
         {
             require_once('tcpdf_min/tcpdf.php');
             $obj_pdf = new TCPDF('p', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
             $obj_pdf->SetCreator(PDF_CREATOR);
     
      $obj_pdf->SetTitle("my orders");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '<table class="table table-bordered">
    <thead>
      <tr>
       <th>image</th>
        <th>title</th>
        <th>price</th>
        <th>quantity</th>
           <th>Total</th>
                
      </tr>
    </thead>
    <tbody>';

include("includes/config.php");
$id=getRealIpUser();
$sql ="SELECT * FROM shoppingcart , product where  product_id=product.id and id_cart= '$id' ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
     {
    
    $title = $row['title'];
    $price = $row['price'];
    $quantity = $row['quantity'];
    $image = $row['image1'];



      $content .= '<tr>
       <td class="img">
                     
                            <img src="admin_area/product_images/';
   $content .= $image;
       $content .= '" width="50" height="50" >
                    
                    </td>
        <td>';
    $content .= $title ; 
    $content .= '</td>
        <td>';
    $content .= $price ; 
$content .= '</td>
        <td>';
    $content .= $quantity ;
    $content .= '</td>
        <td>';
    $content .= $quantity*$price ; 
$content .= '</td>
        
      </tr>';
 

}}
    
      
    $content .= '</tbody>
  </table>';  
   
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  


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

<form method="post">  
<button 
type="submit" name="creat_pdf" style="  float: right ;" class="btn btn-success">i confirm my order</button>
</form>
<form method="post">  
<button 
type="submit" name="clearcart" style="  float: right;"  class="btn btn-danger">clear my cart</button>
</form>
<div class="container">
  <h2>My Orders</h2>
  <p>you can validate your store </p>            
  <table class="table table-bordered">
    <thead>
      <tr>
       <th>image</th>
        <th>title</th>
        <th>price</th>
        <th>quantity</th>
           <th>Total</th>
               <th>Action</th>
                
      </tr>
    </thead>
    <tbody>
 <?php
include("includes/config.php");
$id=getRealIpUser();
$sql ="SELECT * FROM shoppingcart  JOIN product on product_id=product.id where  id_cart= '$id' ";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
     {
    
    $title = $row['title'];
    $price = $row['price'];
    $quantity = $row['quantity'];



    echo '<tr>
       <td class="img">
                     
                            <img src="admin_area/product_images/';echo $row["image1"]; echo '"  width="50" height="50">
                   
                    </td>';
      ?>
        <td><?php echo $title ; ?></td>
        <td><?php echo $price ; ?></td>
        <td><?php echo $quantity ; ?></td>
        <td><?php echo $quantity*$price ; ?></td>
            <td><a href="store.php?action=remove&id=<?php echo $row["id_shop"]; ?>" class="btnRemoveAction">Remove Item</a></td>
      </tr>
  <?php

}}?>
      
    </tbody>
  </table>
       
   
   <?php 
   
    include("includes/footer.php");
    
    ?>
    <?php


if(isset($_GET["action"]))
{
   

    $idcart= $_GET["id"];
    $sql ="DELETE FROM `shoppingcart` WHERE id_shop= '$idcart'";

$result = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
    

        echo "<script>window.open('store.php','_self')</script>";
       
        
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
    if(isset($_POST['clearcart']))
       {
           $id=getRealIpUser();
            $sql ="DELETE FROM `shoppingcart` WHERE id_cart = '$id'";

$result = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
    

        echo "<script>window.open('store.php','_self')</script>";
       
        
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
       }

?>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>