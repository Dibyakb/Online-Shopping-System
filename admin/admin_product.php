<?php
include_once './admin_header.php';
include_once '../includes/dbh_inc.php';
include_once '../includes/function_inc.php';
$productInfo = getProductByAdmin($conn);


?>
<div class="admin_product container">
  <br> <br>
  <table class="table">
    <thead>
      <tr>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Product Unit price</th>
        <th>Product Description</th>
        <th>Product Quantity</th>
        <th>Product Image</th>
        <th>Upload Date</th>
        <th>Category Id</th>
        <th>Seller Id</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($productInfo as $product) { ?>
        <tr>
          <td><?php echo $product['product_id'] ?></td>
          <td><?php echo $product['product_name'] ?></td>
          <td><?php echo $product['product_unit_price'] ?></td>
          <td><?php echo $product['product_description'] ?></td>
          <td><?php echo $product['product_quanity'] ?></td>
          <td><img src="/online_shopping_system/img/product_img/<?= $product['product_image_1'] ?>"></td>
          <td><?php echo $product['upload_date'] ?></td>
          <td><?php echo $product['category_id'] ?></td>
          <td><?php echo $product['seller_id'] ?></td>

        </tr>
      <?php } ?>
    </tbody>
  </table>

</div>
<?php
include_once './admin_footer.php';
?>