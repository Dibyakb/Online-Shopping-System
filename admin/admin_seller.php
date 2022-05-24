<?php
include_once './admin_header.php';
include_once '../includes/dbh_inc.php';
include_once '../includes/function_inc.php';
$sellerInfo = getSellerByAdmin($conn);

?>
<div class="admin_seller container">
  <br>
  <table class="table">
    <thead>
      <tr>
        <th>seller_id </th>
        <th>seller_name </th>
        <th>seller_email</th>
        <th>seller_contact_number</th>
        <th>seller_address </th>
        <th>user_id</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($sellerInfo as $seller) { ?>
        <tr>
          <td><?php echo $seller['seller_id'] ?></td>
          <td><?php echo $seller['seller_name'] ?></td>
          <td><?php echo $seller['seller_email'] ?></td>
          <td><?php echo $seller['seller_contact_number'] ?></td>
          <td><?php echo $seller['seller_address'] ?></td>
          <td><?php echo $seller['user_id'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

</div>
<?php
include_once './admin_footer.php';
?>