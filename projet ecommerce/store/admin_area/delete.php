<?php
include("includes/config.php"); 
$sql = "DELETE FROM product WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
     echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('updateDelet.php','_self')</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
