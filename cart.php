<?php

session_start(); //to access session variable

if ($_SERVER["REQUEST_METHOD"] == "POST") //to access only form's submit method=post
{
    if (!isset($_SESSION['user_id'])) {
        echo "<script>
        alert('Please Login First');
        window.location.href='login.php';
        </script>";
        exit();
    }
    if (isset($_POST['add_to_cart']) || isset($_POST['add_to_cart_category'])) //to check add(Add to cart) button clicked or not, and product's details can be transfer by $_post 
    {

        if (isset($_SESSION['show_cart'])) //when session cart is set by a value already,and want to add more 
        {

            $items = array_column($_SESSION['show_cart'], 'product_name'); //to take existing products in items variable
            if (in_array($_POST['product_name'], $items)) //to search in array,not to add same product again
            {

                // echo "item already added <br>";
                echo "<script>
                    alert('item already added');
                    window.location.href='main.php';
                 </script>";
            } else {

                $count = count($_SESSION['show_cart']); //to count total product nmb of cart
                $_SESSION['show_cart'][$count] = array('product_id' => $_POST['product_id'], 'product_name' => $_POST['product_name'], 'product_unit_price' => $_POST['product_unit_price'], 'product_quantity' => 1); //to show cart iteam at count index

                // if (isset($_POST['add_to_cart_category'])) {
                echo "<script>
                    alert('item  added');
                    window.location.href='main.php';
                 </script>";
            }
        } else //no product selected before,so set array with value in session's zero nmb index
        {

            // echo $_POST['product_id'];
            $_SESSION['show_cart'][0] = array('product_id' => $_POST['product_id'], 'product_name' => $_POST['product_name'], 'product_unit_price' => $_POST['product_unit_price'], 'product_quantity' => 1); //to show cart item at 0 index



            echo "<script>
                alert('item added');
                window.location.href='main.php';
             </script>";
        }

        echo sizeof($_SESSION['show_cart']);
    }
    if (isset($_POST['remove_from_cart'])) {
        foreach ($_SESSION['show_cart'] as $key => $value) //$key to take to index nmb of cart item,$value to show to value of index
        {
            if ($value['product_name'] == $_POST['product_name']) {
                unset($_SESSION['show_cart'][$key]);
                $_SESSION['show_cart'] = array_values($_SESSION['show_cart']); //to rearrage the array after remove any product
                echo "<script>
                        alert('item removed');
                        window.location.href='show_cart.php';
                    </script>";
            }
        }
    }
    if (isset($_POST['to_change_quantity'])) {
        foreach ($_SESSION['show_cart'] as $key => $value) {
            if ($value['product_name'] == $_POST['product_name']) {
                $_SESSION['show_cart'][$key]['product_quantity'] = $_POST['to_change_quantity']; //to change quantity at desired index

                echo "<script>
                        window.location.href='show_cart.php';
                    </script>";
            }
        }
    }
}

?>


<!-- <h1>Cart</h1> -->