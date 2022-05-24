<?php
include_once './seller_header.php';
include_once '../includes/dbh_inc.php';
include_once '../includes/function_inc.php';

session_start();

$sellerInfo = getSellerInfo($conn, $_SESSION['user_id']);

$productInfo = getProductBySeller($conn, $sellerInfo['seller_id']);



?>

<div class="seller-all-product container">
  <br> <br>
  <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">product_id </th>
        <th scope="col">product_name </th>
        <th scope="col">product_unit_price </th>
        <th scope="col">product_description </th>
        <th scope="col">product_quanity </th>
        <th scope="col">upload_date </th>
        <th scope="col">product_image_1 </th>
        <th scope="col">category_id </th>
        <th scope="col">Action </th>
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
          <td><?php echo $product['upload_date'] ?></td>
          <td><img src="/online_shopping_system/img/product_img/<?= $product['product_image_1'] ?>" width="100" height="100"></td>
          <td><?php echo $product['category_id'] ?></td>
          <td>
            <form action="/online_shopping_system/seller/seller_update_product.php" method="POST">
              <input type="text" hidden name="product_id" value="<?php echo $product['product_id'] ?>">
              <input type="text" hidden name="product_name" value="<?php echo $product['product_name'] ?>">
              <input type="text" hidden name="product_unit_price" value="<?php echo $product['product_unit_price'] ?>">
              <input type="text" hidden name="product_description" value="<?php echo $product['product_description'] ?>">
              <input type="text" hidden name="product_quanity" value="<?php echo $product['product_quanity'] ?>">
              <input type="submit" name="update_product" class="btn btn-primary btn-sm" value="Update">

            </form>
          </td>
        </tr>
      <?php } ?>

    </tbody>
  </table>

</div>


<?php
include_once './seller_footer.php';
?>