<?php

if (isset($_POST['login_btn'])) {


    include_once './dbh_inc.php';
    include_once './function_inc.php';

    $userEmail = $_POST['user_email'];
    $userPassword = $_POST['user_password'];

    //echo $userEmail . " " . $userPassword;
    loginUser($conn, $userEmail, $userPassword);
}
