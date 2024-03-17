<?php
include('conn.php');
include('common_function.php');

if(!isset($_GET['category'])){
 if(!isset($_GET['brand'])){

$select_brands = "SELECT * FROM `products` ";
$result_brands = mysqli_query($con,$select_brands);
      while ($row_data = mysqli_fetch_assoc($result_brands)) {
      
       $product_id=$row_data['product_id'];
$delete_query = "DELETE FROM products WHERE product_id = $product_id";
$delete_result = mysqli_query($con, $delete_query);

if ($delete_result) {
 echo"<script>
 alert('Product deleted!');
  window.open('index.php', '_self')
</script>";
} else {
    echo "Error deleting product: " . mysqli_error($con);
}
      }
     }
    }
?>