<?php
if (isset($_POST['add_category'])) {

    include_once '../dbh_inc.php';
    include_once '../function_inc.php';
    $categoryName = $_POST['category_name'];


    addCategory($conn, $categoryName);
}
