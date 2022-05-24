<?php

session_start();


if (!isset($_SESSION['user_id'])) {

    header('location:/online_shopping_system/login.php');
}

include_once './seller_header.php';
include_once '../includes/dbh_inc.php';
include_once '../includes/function_inc.php';
$sellerInformation = getsellerInfo($conn, $_SESSION['user_id']);

?>

<div class="seller-dashboard container">

    <br>
    <h3>Seller Profile Information</h3>

    <form action="/online_shopping_system/includes/seller_inc/seller_update_info_inc.php" method="POST">
        <input type="text" name="seller_id" hidden value="<?php echo $sellerInformation["seller_id"]; ?>">
        <div class="mb-3">
            <label class="form-label">Seller Name</label> <br>
            <input type="text" name="seller_name" value="<?php echo $sellerInformation['seller_name']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Seller Email</label> <br>
            <input type="text" name="seller_email" value="<?php echo $sellerInformation['seller_email']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Seller Contact Number</label> <br>
            <?php
            if ($sellerInformation['seller_contact_number'] == '') {
            ?>
                <input type="text" name="seller_contact_number" placeholder="Please Set Contact Number">
            <?php } else {
            ?>
                <input type="text" name="seller_contact_number" value="<?php echo $sellerInformation['seller_contact_number']; ?>">
            <?php
            }
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Seller Address</label> <br>
            <?php
            if ($sellerInformation['seller_address'] == '') {
            ?>
                <input type="text" name="seller_address" placeholder="Please Set Address">
            <?php } else {
            ?>
                <input type="text" name="seller_address" value="<?php echo $sellerInformation['seller_address'] ?>">
            <?php }
            ?>

        </div>
        <button type="submit" class="btn btn-primary" name="seller_update">Submit</button>
    </form>
</div>


<?php
include_once './seller_footer.php';
?>