<?php

use function PHPSTORM_META\type;

function signupUser($conn, $userEmail, $userPassword, $userRole)
{

    $sql = "SELECT user_id 
            FROM users
            WHERE user_email = '$userEmail'";

    $res = mysqli_query($conn, $sql);

    $rowcount = mysqli_num_rows($res);

    if ($rowcount  > 0) {

        echo "<script>
                  alert('use another email');
                  window.location.href='/online_shopping_system/signup.php';
                  </script>";
    } else {

        $hashedPwd = password_hash($userPassword, PASSWORD_DEFAULT);

        $id =  generateId($conn, 'users');
        $userId =  'U#00' . $id;



        $sql = "INSERT INTO users (user_id,user_email,user_password,user_role)
                  VALUES ('$userId','$userEmail', '$hashedPwd','$userRole')";

        $res = mysqli_query($conn, $sql);

        if ($res) {
            //  echo "User Created";
            return  $userId;
        } else {

            echo "Error User";
            return false;
        }
    }
}


function generateId($conn, $tableName)
{




    $sql = "SELECT id
            FROM $tableName
            ORDER BY id ASC";

    $res = mysqli_query($conn, $sql);
    $ids = array();
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            array_push($ids, $row['id']);
        }
    }



    if (empty($ids)) {
        $mainId =  '1';
    } else {

        $lastId = $ids[sizeof($ids) - 1];

        $mainId =  $lastId + 1;
    }


    return  $mainId;
}


//! FUcntion Not in use
function getUserId($conn, $userEmail)
{
    $sqlRead = "SELECT user_id
                FROM users
                WHERE user_email = '$userEmail'";

    $res = mysqli_query($conn, $sqlRead);

    $userId = '';


    return $userId;
}


function signupSeller($conn, $sellerName, $userId)
{


    $id = generateId($conn, 'seller');

    $sellerId = 'S#00' . $id;

    $sqlSignup = "INSERT INTO seller (seller_id,seller_name,seller_contact_number,seller_address,user_id)
                  VALUES ('$sellerId','$sellerName',null,null,'$userId')";

    $res = mysqli_query($conn, $sqlSignup);

    if ($res) {
        echo "<script>
            alert('Signup successfully');
            window.location.href='/online_shopping_system/login.php';
            </script>";
    } else {

        echo "Signup Error";
    }
}


function signupCustomer($conn, $customerName, $userId)
{

    $id = generateId($conn, 'customer');

    $customerId = 'C#00' . $id;

    $sqlSignup = "INSERT INTO customer (customer_id,customer_name,customer_contact_number,customer_address,user_id)
                        VALUES ('$customerId','$customerName',null,null,'$userId')";

    $res = mysqli_query($conn, $sqlSignup);

    if ($res) {
        echo "<script>
            alert('Signup successfully');
            window.location.href='/online_shopping_system/login.php';
            </script>";
    } else {

        echo "Customer Signup Error";
    }
}


function loginUser($conn, $userEmail, $userPassword)
{

    session_start();
    $sql = "SELECT user_id,user_email, user_password,user_role
            FROM users
            WHERE user_email='$userEmail'";

    $res = mysqli_query($conn, $sql);

    $userInfo = array('user_id' => ' ', 'user_email' => ' ', 'user_password' => ' ', 'user_role' => "");

    if ($res->num_rows > 0) {

        while ($row = $res->fetch_assoc()) {

            $userInfo['user_id'] =  $row['user_id'];
            $userInfo['user_email'] = $row['user_email'];
            $userInfo['user_password'] = $row['user_password'];
            $userInfo['user_role'] = $row['user_role'];
        }

        $_SESSION["user_id"] = $userInfo['user_id'];
        $_SESSION['user_role'] =  $userInfo['user_role'];
        if ($userInfo['user_role'] === 'admin') {


            if ($userInfo['user_password'] == $userPassword && $userInfo['user_email'] == $userEmail) {

                header('location:/online_shopping_system/admin/admin_dashboard.php');
            } else {

                echo "Incorrect Admin Credentials";
            }
        } else {

            if (password_verify($userPassword, $userInfo['user_password']) && $userEmail === $userInfo['user_email']) {

                if ($userInfo['user_role'] === 'seller') {
                    header('location:/online_shopping_system/seller/seller_dashboard.php');
                } else if ($userInfo['user_role'] === 'customer') {

                    header('location:/online_shopping_system/main.php');
                }
            } else {

                echo "Incorrect Email / Password ";
            }
        }
    } else {

        echo "No user found";
    }
}


function getSellerInfo($conn, $userId)
{
    $sql = "SELECT seller_id, seller_name,seller_contact_number,seller_address
            FROM seller
            WHERE user_id='$userId'";

    $res = mysqli_query($conn, $sql);

    $sellerInfo = array('seller_id' => '', 'seller_name' => '', 'seller_contact_number' => '', 'seller_address' => '', 'seller_email' => '');

    if ($res->num_rows > 0) {

        while ($row = $res->fetch_assoc()) {

            $sellerInfo['seller_id'] =  $row['seller_id'];
            $sellerInfo['seller_name'] =  $row['seller_name'];
            $sellerInfo['seller_contact_number'] = $row['seller_contact_number'];
            $sellerInfo['seller_address'] = $row['seller_address'];
        }
    }

    $sql = "SELECT user_email
            FROM users 
            WHERE user_id='$userId'";

    $res = mysqli_query($conn, $sql);

    if ($res->num_rows > 0) {

        while ($row = $res->fetch_assoc()) {

            $sellerInfo['seller_email'] = $row['user_email'];
        }
    }
    return  $sellerInfo;
}


function getProductOfSeller($conn, $sellerId)
{

    $sql = "SELECT seller_id,seller_name, seller_address, seller_contact_number
            FROM porduct
            ORDER BY seller_id";

    $res = mysqli_query($conn, $sql);
    $sellerProducts = array();

    if ($res->num_rows > 0) {

        while ($row = $res->fetch_assoc()) {

            $sellerProduct = array('id' => $row['id'], 'seller_id' => $row['seller_id'], 'seller_name' => $row['seller_name'], 'seller_address' => $row['seller_address'], 'seller_contact_number' => $row['seller_contact_number']);
            array_push($sellerProducts, $sellerProduct);
        }
    }

    return  $sellerProducts;
}

function allCategory($conn)
{

    $sql = "SELECT category_id,category_name
            FROM category";

    $res = mysqli_query($conn, $sql);
    $categories = array();

    if ($res->num_rows > 0) {

        while ($row = $res->fetch_assoc()) {

            $category = array('category_id' => $row['category_id'], 'category_name' => $row['category_name']);
            array_push($categories, $category);
        }
    }

    return  $categories;
}

function addSellerProduct($conn, $productName, $productUnitPrice, $productDescription, $productQuantity,  $uploadDate, $categoryId, $sellerId, $imgId1, $imgId2)
{


    $categoryId = explode(" - ", $categoryId);
    $categoryId =  $categoryId[0];

    $id = generateId($conn, 'product');

    $productId = 'PROD#00' . $id;

    $s = "select * from product where product_name = '$productName'";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        echo "<script>
                   alert('Product With Same Name Exists');
                   window.location.href='/online_shopping_system/seller/seller_add_product.php';
                </script>";
    } else {

        $sql = "INSERT INTO 
        product(product_id,product_name,product_unit_price,product_description,product_quanity,
                upload_date,product_image_1,product_image_2,category_id,seller_id)
        VALUES ('$productId','$productName','$productUnitPrice','$productDescription','$productQuantity',  
                '$uploadDate','$imgId1','$imgId2','$categoryId', '$sellerId')";


        $res = mysqli_query($conn, $sql);

        if ($res) {

            return $productId;
        } else {

            echo "Error!";
        }
    }
}

function compressImage($uploadImage, $imgType)
{



    $img_name = $uploadImage['name'];
    $img_type = $uploadImage['type'];
    //$img_size = $uploadImage['size'];
    $tmp_name = $uploadImage['tmp_name'];
    $error = $uploadImage['error'];


    if ($error == 0) {

        if ($img_type == 'image/png') {
            $inputImg = imagecreatefrompng($tmp_name);
        } else {
            $inputImg = imagecreatefromjpeg($tmp_name);
        }


        if (isset($inputImg)) {

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex); //png / jpg / jpeg
            $allowed_exs = array("jpg", "jpeg", "png");
            if (in_array($img_ex_lc, $allowed_exs)) {

                if ($imgType == 'product') {

                    $imgId = uniqid('PIMG-') . '.jpg';
                    $outputImagePath = '../../img/product_img/' .  $imgId;
                }


                imagejpeg($inputImg, $outputImagePath, 50);

                return $imgId;
            }
        }
    }
}

function getCustomerInfo($conn, $userId)
{

    $sql = "SELECT customer_id, customer_name, customer_contact_number,customer_address
            FROM customer 
            WHERE user_id='$userId'";

    $res = mysqli_query($conn, $sql);
    $customerInformation = '';
    if ($res->num_rows > 0) {

        while ($row = $res->fetch_assoc()) {

            $customerInformation = array('customer_id' => $row['customer_id'], 'customer_name' => $row['customer_name'], 'customer_contact_number' => $row['customer_contact_number'], 'customer_address' => $row['customer_address'], 'customer_email' => '');
        }
    }


    $sql = "SELECT user_email
            FROM users 
            WHERE user_id='$userId'";

    $res = mysqli_query($conn, $sql);
    if ($res->num_rows > 0) {

        while ($row = $res->fetch_assoc()) {

            $customerInformation['customer_email'] = $row['user_email'];
        }
    }


    return $customerInformation;
}

function customerInfoUpdate($conn, $customerId, $userId, $customerName, $customerEmail, $customerContactNumber, $customerAddress)
{
    $sql = "UPDATE customer
            SET customer_name = '$customerName', customer_contact_number= '$customerContactNumber', customer_address= '$customerAddress'
            WHERE customer_id = '$customerId'";

    $res1 = mysqli_query($conn, $sql);

    $sql = "UPDATE users
            SET user_email = '$customerEmail'
            WHERE user_id  = '$userId'";

    $res2 = mysqli_query($conn, $sql);
    if ($res1 && $res2) {
        echo "<script>
                  alert('Customer Information Update Succesful');
                  window.location.href='/online_shopping_system/customer/customer_dashboard.php';
                  </script>";
    } else {
        echo "<script>
                  alert('Customer Information Update Unsuccesful');
                  window.location.href='/online_shopping_system/customer/customer_dashboard.php';
                  </script>";
    }
}

function sellerInfoUpdate($conn, $sellerId, $userId, $sellerName, $sellerEmail, $sellerContactNumber, $sellerAddress)
{

    $sql = "UPDATE seller
            SET seller_name = '$sellerName', seller_contact_number= '$sellerContactNumber', seller_address= '$sellerAddress'
            WHERE seller_id = '$sellerId'";

    $res1 = mysqli_query($conn, $sql);

    $sql = "UPDATE users
            SET user_email = '$sellerEmail'
            WHERE user_id  = '$userId'";

    $res2 = mysqli_query($conn, $sql);
    if ($res1 && $res2) {
        echo "<script>
                  alert('Seller Information Update Succesful');
                  window.location.href='/online_shopping_system/seller/seller_dashboard.php';
                  </script>";
    } else {
        echo "<script>
                  alert('Seller Information Update Unsuccesful');
                  window.location.href='/online_shopping_system/seller/seller_dashboard.php';
                  </script>";
    }
}


function  addCategory($conn, $categoryName)
{

    $id = generateId($conn, 'category');

    $categoryId = "CAT#00" . $id;

    // echo $categoryId;

    // exit();
    $sql = "INSERT INTO category(category_id,category_name)
            VALUES('$categoryId','$categoryName')";
    $res = mysqli_query($conn, $sql);

    if ($res) {

        header('location:/online_shopping_system/admin/admin_category.php');
    } else {

        echo "Error!";
    }
}


function getCustomerByAdmin($conn)
{

    $sql = "SELECT id,customer_id, customer_name, customer_contact_number, customer_address,user_id	
            FROM customer 
            ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);

    $customerInfo = array();
    if ($result->num_rows > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $customer = array('customer_id' => $row['customer_id'], 'customer_name' => $row['customer_name'], 'customer_contact_number' => $row['customer_contact_number'], 'customer_address' => $row['customer_address'], 'user_id' => $row['user_id'], 'customer_email' => "");
            array_push($customerInfo, $customer);
        }
    }

    $sql = "SELECT id, user_id,user_email
            FROM users 
            WHERE user_role='customer'
            ORDER BY id ASC";
    $res = mysqli_query($conn, $sql);

    $i = 0;
    if ($res->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($res)) {

            $customerInfo[$i]['customer_email'] = $row['user_email'];
            $i++;
        }
    }


    //exit();


    return $customerInfo;
}



function  getSellerByAdmin($conn)
{

    $sql = "SELECT id,seller_id, seller_name, seller_contact_number, seller_address,user_id	
    FROM seller 
    ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);

    $sellerInfo = array();
    if ($result->num_rows > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $seller = array('seller_id' => $row['seller_id'], 'seller_name' => $row['seller_name'], 'seller_contact_number' => $row['seller_contact_number'], 'seller_address' => $row['seller_address'], 'user_id' => $row['user_id'], 'seller_email' => "");
            array_push($sellerInfo, $seller);
        }
    }

    $sql = "SELECT id, user_id,user_email
    FROM users 
    WHERE user_role='seller'
    ORDER BY id ASC";
    $res = mysqli_query($conn, $sql);

    $i = 0;
    if ($res->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($res)) {

            $sellerInfo[$i]['seller_email'] = $row['user_email'];
            $i++;
        }
    }


    //exit();

    return $sellerInfo;
}

function getProductByAdmin($conn)
{
    $sql = "SELECT product_id, product_name, product_unit_price, product_description, product_quanity,upload_date, product_image_1,	product_image_2,category_id, seller_id	
            FROM product";
    $result = mysqli_query($conn, $sql);

    $productInfo = array();
    if ($result->num_rows > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $product = array('product_id' => $row['product_id'], 'product_name' => $row['product_name'], 'product_unit_price' => $row['product_unit_price'], 'product_description' => $row['product_description'], 'product_quanity' => $row['product_quanity'], 'upload_date' => $row['upload_date'], 'product_image_1' => $row['product_image_1'], 'product_image_2' => $row['product_image_2'], 'category_id' => $row['category_id'], 'seller_id' => $row['seller_id']);

            array_push($productInfo, $product);
        }
    }
    return $productInfo;
}

function getProductBySeller($conn, $sellerId)
{

    $sql = "SELECT product_id, product_name, product_unit_price, product_description, product_quanity,upload_date, product_image_1,	product_image_2,category_id, seller_id	
            FROM product
            WHERE seller_id='$sellerId'";

    $result = mysqli_query($conn, $sql);

    $productInfo = array();
    if ($result->num_rows > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $product = array('product_id' => $row['product_id'], 'product_name' => $row['product_name'], 'product_unit_price' => $row['product_unit_price'], 'product_description' => $row['product_description'], 'product_quanity' => $row['product_quanity'], 'upload_date' => $row['upload_date'], 'product_image_1' => $row['product_image_1'], 'category_id' => $row['category_id']);

            array_push($productInfo, $product);
        }
    }
    return $productInfo;
}

function getProductInfo($conn, $productId)
{
    $sql = "SELECT product_id, product_name, product_unit_price, product_description, product_quanity,upload_date, product_image_1,	product_image_2,category_id, seller_id	
            FROM product
            WHERE product_id = '$productId'";
    $result = mysqli_query($conn, $sql);

    $productInfo = "";
    if ($result->num_rows > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $productInfo = array('product_id' => $row['product_id'], 'product_name' => $row['product_name'], 'product_unit_price' => $row['product_unit_price'], 'product_description' => $row['product_description'], 'product_quanity' => $row['product_quanity'], 'upload_date' => $row['upload_date'], 'product_image_1' => $row['product_image_1'], 'product_image_2' => $row['product_image_2'], 'category_id' => $row['category_id'], 'seller_id' => $row['seller_id']);
        }
    }
    return $productInfo;
}


function  productInfoUpdate($conn, $productId, $productName,  $productUnitPrice, $productQuantity,  $productDesciption)
{

    $sql = "UPDATE product
            SET product_name = '$productName',product_unit_price = '$productUnitPrice',product_quanity = '$productQuantity',product_description = '$productDesciption'
            WHERE product_id = '$productId'";

    $res = mysqli_query($conn, $sql);

    if ($res) {

        echo "<script>
        alert('Product Information Update Succesful');
        window.location.href='/online_shopping_system/seller/seller_product.php';
        </script>";
    } else {

        echo "<script>
        alert('Product Information Update Unsuccesful');
        window.location.href='/online_shopping_system/seller/seller_product.php';
        </script>";
    }
}

function getAllCategory($conn, $categoryId)
{
    session_start();
    $categoryId = explode(" - ", $categoryId);
    $categoryId =  $categoryId[0];
    $sql = "SELECT * FROM category
            WHERE category_id = '$categoryId'";


    $result = mysqli_query($conn, $sql);

    $desc = array();
    if ($result->num_rows > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            for ($i = 1; $i <= 30; $i++) {

                if ($row['att' . $i] != '') {

                    $desc[$i] = $row['att' . $i];
                }
            }
        }
    }

    echo  "size " . sizeof($desc);


    $sql = "SELECT * FROM category
            WHERE category_id = '$categoryId'";


    $result = mysqli_query($conn, $sql);
    $categoryInfo = array();
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $categoryInfo = array('category_id' => $row['category_id'], 'category_name' => $row['category_name'], 'attributes' => '');
        }
    }


    $categoryInfo['attributes'] = $desc;

    $_SESSION['category_info'] = $categoryInfo;

    header('location:/online_shopping_system/seller/seller_add_product.php');
}


function  addToDescription($conn, $productId, $categoryId, $attributeValue)
{

    $id = generateId($conn, 'description');
    $descId = "DESC#00" . $id;



    $sql = "INSERT INTO description(description_id,product_id,category_id)
            VALUES('$descId','$productId','$categoryId')";

    $result = mysqli_query($conn, $sql);



    $count = 0;
    for ($i = 0; $i < sizeof($attributeValue); $i++) {
        echo $attributeValue[$i] . "<br>";

        $att = 'att_val_' . ($i + 1);

        $sql = "UPDATE description
                SET $att = '$attributeValue[$i]'
                WHERE description_id = '$descId'";
        $result = mysqli_query($conn, $sql);

        if ($result) {

            $count++;
        } else {
            echo "Desc not ok";
        }
    }
    if ($count == sizeof($attributeValue)) {
        header('location:/online_shopping_system/seller/seller_add_product.php');
    }
}


function getSingleCategory($conn, $categoryId)
{
    $sql = "SELECT * FROM category
            WHERE category_id = '$categoryId'";


    $result = mysqli_query($conn, $sql);

    $desc = array();
    if ($result->num_rows > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            for ($i = 1; $i <= 30; $i++) {

                if ($row['att' . $i] != '') {

                    $desc[$i] = $row['att' . $i];
                }
            }
        }
    }


    $sql = "SELECT * FROM category
            WHERE category_id = '$categoryId'";


    $result = mysqli_query($conn, $sql);
    $categoryInfo = array();
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $categoryInfo = array('category_id' => $row['category_id'], 'category_name' => $row['category_name'], 'attributes' => '');
        }
    }
    $categoryInfo['attributes'] = $desc;

    return $categoryInfo;
}

function getSingleDescription($conn, $productId, $categoryId)
{
    $sql = "SELECT * FROM description
            WHERE category_id = '$categoryId' AND product_id = '$productId'";


    $result = mysqli_query($conn, $sql);

    $descVal = array();
    if ($result->num_rows > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            for ($i = 1; $i <= 30; $i++) {

                if ($row['att_val_' . $i] != '') {

                    $descVal[$i] = $row['att_val_' . $i];
                }
            }
        }
    }


    $sql = "SELECT * FROM description
            WHERE category_id = '$categoryId'  AND product_id = '$productId'";


    $result = mysqli_query($conn, $sql);
    $descInfo = array();
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $descInfo = array('desc_id' => $row['description_id'], 'attributeValues' => '');
        }
    }

    $descInfo['attributeValues'] = $descVal;

    return $descInfo;
}

function  addToOrderTable($conn, $orderDate, $orderQuantity, $orderPrice, $paymentMethod, $productId, $customerId, $sellerId)
{

    $id = generateId($conn, 'orders');
    $orderId = "Order#00" . $id;
    $sql = "INSERT INTO orders(order_id,order_date,order_quantity,order_price,order_payment_method,product_id,customer_id,seller_id)
               VALUES ('$orderId','$orderDate', '$orderQuantity','$orderPrice','$paymentMethod','$productId','$customerId','$sellerId')";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        $sql  = "SELECT product_quanity 
                FROM product
                WHERE product_id='$productId'";

        $res = mysqli_query($conn, $sql);

        if ($res->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($res)) {

                $oldQuantity = $row['product_quanity'];
            }
        }

        $updatedQuantity  = (int)$oldQuantity - (int)$orderQuantity;


        $sql = "UPDATE product
                SET  product_quanity = '$updatedQuantity'
                WHERE product_id  = '$productId'";

        $res = mysqli_query($conn, $sql);

        if ($res) {

            return true;
        } else {
            echo "Quanitity Error";
        }
    } else {

        echo "Order Error";
    }
}



function  getProductByCategory($conn, $categoryId)
{

    $sql = "SELECT product_id, product_name, product_unit_price, product_description, product_quanity,upload_date, product_image_1,	product_image_2,category_id, seller_id	
            FROM product
            WHERE category_id = '$categoryId'";

    $res = mysqli_query($conn, $sql);

    $productInfo = array();
    if ($res->num_rows > 0) {

        while ($row = mysqli_fetch_assoc($res)) {

            // echo $row['product_id'] . "<br>";
            $product = array('product_id' => $row['product_id'], 'product_name' => $row['product_name'], 'product_unit_price' => $row['product_unit_price'], 'product_description' => $row['product_description'], 'product_quanity' => $row['product_quanity'], 'upload_date' => $row['upload_date'], 'product_image_1' => $row['product_image_1'], 'category_id' => $row['category_id']);
            array_push($productInfo, $product);
        }
    }


    return $productInfo;
}
