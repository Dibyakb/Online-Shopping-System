<?php

if (isset($_POST['customer_signup'])) {

    include_once '../dbh_inc.php';
    include_once '../function_inc.php';

    $customerName = $_POST['customer_name'];
    $customerEmail = $_POST['user_email'];
    $customerPassword = $_POST['user_password'];
    $role = 'customer';


    $userId = signupUser($conn, $customerEmail, $customerPassword, $role);

    if ($userId != false) {


        signupCustomer($conn, $customerName, $userId);
    }
}
