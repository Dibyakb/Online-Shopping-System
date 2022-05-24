<?php
// session_start();


include_once '../header.php';
include_once '../includes/dbh_inc.php';
include_once '../includes/function_inc.php';

if (!isset($_SESSION['user_id'])) {

    header('location:/online_shopping_system/main.php');
}

$customerInformation = getCustomerInfo($conn, $_SESSION['user_id']);

?>

<div class="customer-dashboard container">
    <br> <br>
    <h3>Customer Profile Information</h3>

    <form action="/online_shopping_system/includes/customer_inc/customer_update_info_inc.php" method="POST">
        <input type="text" name="customer_id" hidden value="<?php echo $customerInformation["customer_id"]; ?>">
        <div class="mb-3">
            <label class="form-label">Customer Name</label> <br>
            <input type="text" name="customer_name" value="<?php echo $customerInformation['customer_name']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Customer Email</label> <br>
            <input type="text" name="customer_email" value="<?php echo $customerInformation['customer_email']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Customer Contact Number</label> <br>
            <?php
            if ($customerInformation['customer_contact_number'] == '') {
            ?>
                <input type="text" name="customer_contact_number" placeholder="Please Set Contact Number">
            <?php } else {
            ?>
                <input type="text" name="customer_contact_number" value="<?php echo $customerInformation['customer_contact_number']; ?>">
            <?php
            }
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Customer Address</label> <br>
            <?php
            if ($customerInformation['customer_address'] == '') {
            ?>
                <input type="text" name="customer_address" placeholder="Please Set Address">
            <?php } else {
            ?>
                <input type="text" name="customer_address" value="<?php echo $customerInformation['customer_address'] ?>">
            <?php }
            ?>

        </div>
        <button type="submit" class="btn btn-primary" name="customer_update">Submit</button>
    </form>
</div>









<?php
include_once '../footer.php';
?>