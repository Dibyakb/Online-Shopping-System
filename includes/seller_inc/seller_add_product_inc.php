<?php

if (isset($_POST['show_attribute'])) {

    echo "ok";
    include_once '../dbh_inc.php';
    include_once  '../function_inc.php';
    getAllCategory($conn, $_POST['category_id']);
}

if (isset($_POST['add_product']) && isset($_FILES['product_image_1']) && isset($_FILES['product_image_2'])) {
    include_once '../dbh_inc.php';
    include_once  '../function_inc.php';

    session_start();

    $attributeSize = sizeof($_SESSION['category_info']['attributes']);

    $attributeValue = array();
    for ($i = 1; $i <= $attributeSize; $i++) {
        echo $_POST[$i] . "<br>";
        array_push($attributeValue, $_POST[$i]);
    }

    $productName = $_POST['product_name'];
    $productUnitPrice = $_POST['product_unit_price'];
    $productDescription = $_POST['product_description'];
    $productQuantity = $_POST['product_quantity'];
    $categoryId = $_POST['category_id_main'];
    $userId = $_POST['user_id'];

    // // echo $categoryId;

    // // exit();

    // $categoryId = explode(" - ", $categoryId);
    // $categoryId =  $categoryId[0];
    // //echo $categoryId;

    $sellerInfo = getSellerInfo($conn, $userId);

    $imgType = 'product';
    $imgID1 = compressImage($_FILES['product_image_1'], $imgType);
    $imgID2 = compressImage($_FILES['product_image_2'], $imgType);

    $uploadDate =  date("Y/m/d");
    $productId = addSellerProduct($conn, $productName, $productUnitPrice, $productDescription, $productQuantity,  $uploadDate, $categoryId, $sellerInfo['seller_id'], $imgID1, $imgID2);

    // //echo  
    // $productId = 'PROD#001';
    addToDescription($conn, $productId, $categoryId, $attributeValue);
}
