<?php
include_once './admin_header.php';
include_once '../includes/dbh_inc.php';
include_once '../includes/function_inc.php';
$customerInfo = getCustomerByAdmin($conn);

//$userInfo = getAllUserInfo($conn, 'customer');

// foreach ($customerInfo as $c) {

//   echo $c['customer_email'] . "<br>";
// }

// echo "<br>";

// foreach ($userInfo as $u) {

//   echo $u['user_email'] . "<br>";
// }

//exit();

?>
<div class="admin_customer container">
  <table class="table">
    <thead>
      <tr>
        <th>customer id </th>
        <th>customer name </th>
        <th>customer email</th>
        <th>customer contact number </th>
        <th>customer address </th>
        <th>user_id </th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($customerInfo as $customer) { ?>
        <tr>
          <td><?php echo $customer['customer_id'] ?></td>
          <td><?php echo $customer['customer_name'] ?></td>
          <td><?php echo $customer['customer_email'] ?></td>
          <td><?php echo $customer['customer_contact_number'] ?></td>
          <td><?php echo $customer['customer_address'] ?></td>
          <td><?php echo $customer['user_id'] ?></td>
        </tr>
      <?php } ?>


    </tbody>
  </table>

</div>
<?php
include_once './admin_footer.php';
?>