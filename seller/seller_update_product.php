<?php
session_start();


if (!isset($_SESSION['user_id'])) {

    header('location:/online_shopping_system/login.php');
}

include_once './seller_header.php';

if (isset($_POST['update_product'])) {

    // echo $_POST['product_id'];
    // exit();
?>
    <div class="container">
        <br> <br>
        <form action="/online_shopping_system/includes/seller_inc/seller_update_product_inc.php" method="POST">
            <span class="form-label"><b>Product ID: <?php echo $_POST["product_id"]; ?> </b></span> <br> <br>
            <input type="text" hidden name="product_id" value="<?php echo $_POST["product_id"]; ?>">
            <div class="mb-3">
                <label class="form-label">Product Name</label> <br>
                <input type="text" name="product_name" value="<?php echo $_POST['product_name']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Unit Price</label> <br>
                <input type="text" name="product_unit_price" value="<?php echo $_POST['product_unit_price'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Description</label> <br>
                <input type="text" name="product_description" value="<?php echo  $_POST['product_description'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Quantity</label> <br>
                <input type="text" name="product_quanity" value="<?php echo  $_POST['product_quanity'] ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="update">Save</button>
        </form>

    </div>

<?php
}

include_once './seller_footer.php';
?>