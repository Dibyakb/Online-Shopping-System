<?php
if (isset($_POST['seller_update'])) {
    include_once '../dbh_inc.php';
    include_once '../function_inc.php';

    session_start();
    // echo $_SESSION['user_id'];
    $sellerId = $_POST['seller_id'];
    $sellerName = $_POST['seller_name'];
    $sellerEmail = $_POST['seller_email'];
    $sellerContactNumber = $_POST['seller_contact_number'];
    $sellerAddress = $_POST['seller_address'];

    sellerInfoUpdate($conn, $sellerId, $_SESSION['user_id'], $sellerName, $sellerEmail, $sellerContactNumber, $sellerAddress);
}
