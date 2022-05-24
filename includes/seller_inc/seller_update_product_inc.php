<?php
if (isset($_POST['update'])) {
    include_once '../dbh_inc.php';
    include_once '../function_inc.php';

    // echo $_SESSION['user_id'];
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $productUnitPrice = $_POST['product_unit_price'];
    $productQuantity = $_POST['product_quanity'];
    $productDesciption = $_POST['product_description'];


    productInfoUpdate($conn, $productId, $productName,  $productUnitPrice, $productQuantity,  $productDesciption);
}
