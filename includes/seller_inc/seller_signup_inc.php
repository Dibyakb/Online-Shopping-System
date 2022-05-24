<?php

if (isset($_POST['seller_signup'])) {

    include_once '../dbh_inc.php';
    include_once '../function_inc.php';

    $sellerName = $_POST['seller_name'];
    $sellerEmail = $_POST['seller_email'];
    $sellerPassword = $_POST['seller_password'];
    $sellerPasswordRepeat = $_POST['seller_password_confirm'];
    $role = 'seller';

    $userId = signupUser($conn, $sellerEmail, $sellerPassword, $role);

    if ($userId != false) {

        $userId;
        //$userId = getUserId($conn, $sellerEmail);

        signupSeller($conn, $sellerName, $userId);
    }
}
