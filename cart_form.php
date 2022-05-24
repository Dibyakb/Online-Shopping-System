<?php
include_once './header.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>
    alert('Please Login First');
    window.location.href='/online_shopping_system/login.php';
    </script>";
    exit();
}
include_once './includes/dbh_inc.php';
include_once './includes/function_inc.php';

$customerInformation = getCustomerInfo($conn, $_SESSION['user_id']);
?>
<div class="container" style="height: 1000px;">

    <div class="row">
        <div class="col">
            <h4>Basic Information</h4>
            <input type="text" name="customer_id" hidden value="<?php echo $customerInformation["customer_id"]; ?>">
            <div class="mb-3">
                <label class="form-label">Name</label> <br>
                <input type="text" name="customer_name" value="<?php echo $customerInformation['customer_name']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label> <br>
                <input type="text" name="customer_email" value="<?php echo $customerInformation['customer_email']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Contact Number</label> <br>
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
                <label class="form-label">Billing Address</label> <br>
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
        </div>
        <div class="col">
            <h4>Payment Method</h4>
            <form action="/online_shopping_system/includes/customer_inc/customer_order_inc.php" method="POST">
                <input type="text" name='customer_id' hidden value="<?php echo $customerInformation['customer_id']; ?>">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" value='cash_on_delivery' checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Cash On Delivery
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" value='online_payment'>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Online Payment
                    </label>
                </div>

                <?php if (isset($_POST['buy_now'])) { ?>
                    <input type="text" hidden name="product_id" value="<?php echo  $_POST['product_id']; ?>">
                    <input type="text" hidden name="product_name" value="<?php echo  $_POST['product_name']; ?>">
                    <input type="number" hidden name="product_unit_price" value="<?php echo $_POST['product_unit_price']; ?>">
                    <input type="number" hidden name="product_quantity" value="<?php echo $_POST['product_quantity']; ?>">
                    <button type="submit" name="buy_now_order" class="btn btn-primary">Confirm Order</button>
                <?php } else {
                ?>
                    <button type="submit" name="confirm_order" class="btn btn-primary">Confirm Order</button>
                <?php } ?>

            </form>

        </div>

    </div>

    <div class="col mt-5">

        <h4>Order Overview</h4>
        <table class="table table-sm">
            <thead>
                <td>Product Name</td>
                <td>Unit Price</td>
                <td>Quantiy</td>
                <td>Total</td>
            </thead>

            <?php
            if (isset($_POST['buy_now'])) { ?>

                <tbody>
                    <tr>
                        <td><?php echo $_POST['product_name'] ?></td>
                        <td><?php echo $_POST['product_unit_price'] ?></td>
                        <td><?php echo $_POST['product_quantity'] ?></td>
                        <td><?php echo $_POST['product_quantity'] * $_POST['product_unit_price'] ?></td>

                    </tr>
                </tbody>

        </table>
        <?php
            } else {

                if (isset($_SESSION['show_cart']) && count($_SESSION['show_cart']) > 0) {
        ?>
            <tbody>

                <?php
                    foreach ($_SESSION['show_cart'] as $key => $value) {


                ?>
                    <tr>
                        <td><?php echo $value['product_name'] ?></td>
                        <td><?php echo $value['product_unit_price'] ?></td>
                        <td><?php echo $value['product_quantity'] ?></td>
                        <td><?php echo $value['product_quantity'] * $value['product_unit_price'] ?></td>
                    </tr>
                <?php } ?>


            </tbody>

            </table>
    <?php }
            }


    ?>

    </div>


</div>

<?php
include_once './footer.php';
?>