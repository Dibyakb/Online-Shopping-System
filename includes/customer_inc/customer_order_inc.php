<?php
if (isset($_POST['confirm_order'])) {
    session_start();

    include_once '../dbh_inc.php';
    include_once '../function_inc.php';

    $customerId = $_POST['customer_id'];
    $paymentMethod = $_POST['payment_method'];

    $customerInfo = getCustomerInfo($conn, $_SESSION['user_id']);

    $sellerIds = array();
    $count = 0;
    $productTable = '<table style="font-size: 12px;">
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        <tbody>
                        ';


    $grandTotal = 0;

    foreach ($_SESSION['show_cart'] as $info) {

        $orderDate =  date("Y/m/d");
        $orderQuantity = $info['product_quantity'];
        $orderPrice = $info['product_quantity'] * $info['product_unit_price'];
        $grandTotal = $grandTotal +  $orderPrice;
        $productId = $info['product_id'];
        $productInfo = getProductInfo($conn, $productId);
        $productTable .= '<tr>
                                <td>' . $productId . '</td>
                                <td>' . $productInfo['product_name'] . '</td>
                                <td>' . $info['product_unit_price'] . '</td>
                                <td>' . $orderQuantity . '</td>
                                <td>' . $info['product_quantity'] * $info['product_unit_price'] . '</td>

                            </tr>';
        $orderDone = addToOrderTable($conn, $orderDate, $orderQuantity, $orderPrice, $paymentMethod, $productId, $customerId, $productInfo['seller_id']);


        if ($orderDone) {
            $count++;
        }
    }

    $productTable .= '</tbody>
                      </table>';

    $productTable .= '<br> <br>';
    $productTable .=  '<strong>Grand Total: <strong>' . $grandTotal;

    if ($count == sizeof($_SESSION['show_cart'])) {

        require_once  '../../vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();

        // Write some HTML code:
        $fname =    $customerInfo['customer_name'];
        $fnumber =  $customerInfo['customer_contact_number'];
        $faddress = $customerInfo['customer_address'];
        $fpayment =  $paymentMethod;

        //include_once '/vendor/mpdf/mpdf.php';


        $data = '<div style="font-size: 12px;">';
        $data .= '<h1>Order Details</h1>';
        $data .= '<strong>Customer Name: </strong>' . $fname . '<br>';
        $data .= '<strong>Contact Number: </strong>' . $fnumber . '<br>';
        $data .= '<strong>Billing Address: </strong>' . $faddress . '<br>';
        $data .= '<strong>Method of Payment: </strong>' . $fpayment . '<br>';
        $data .= '<br> <br>';
        $data .= $productTable . '</div>';

        $mpdf->WriteHTML($data);

        // Output a PDF file directly to the browser

        $mpdf->Output();

        echo "<script>
                  alert('Order has been placed');
                  window.location.href='/online_shopping_system/main.php';
                  </script>";

        $_SESSION['show_cart'] = array();
    }
} else if (isset($_POST['buy_now_order'])) {

    include_once '../dbh_inc.php';
    include_once '../function_inc.php';

    session_start();

    $customerId = $_POST['customer_id'];
    $paymentMethod = $_POST['payment_method'];
    $orderDate =  date("Y/m/d");
    $orderQuantity = $_POST['product_quantity'];
    $orderPrice =    $_POST['product_quantity'] * $_POST['product_unit_price'];
    $productId =     $_POST['product_id'];


    // echo  $customerId . " " . $paymentMethod . " " . $productId . " " .  $orderPrice;
    $customerInfo = getCustomerInfo($conn, $_SESSION['user_id']);
    $productInfo = getProductInfo($conn, $productId);

    $productTable = '<table style="font-size: 12px;">
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>' . $productId . '</td>
                                <td>' . $productInfo['product_name'] . '</td>
                                <td>' . $productInfo['product_unit_price'] . '</td>
                                <td>' . $orderQuantity . '</td>
                                <td>' . $orderPrice . '</td>

                            </tr>
                        </tbody>
                     </table>';

    $productTable .= '<br> <br>';
    $productTable .=  '<strong>Grand Total: <strong>' . $orderPrice;


    $orderDone = addToOrderTable($conn, $orderDate, $orderQuantity, $orderPrice, $paymentMethod, $productId, $customerId, $productInfo['seller_id']);

    if ($orderDone) {
        require_once  '../../vendor/autoload.php';

        // Create an instance of the class:

        $mpdf = new \Mpdf\Mpdf();
        // Write some HTML code:
        $fname =    $customerInfo['customer_name'];
        $fnumber =  $customerInfo['customer_contact_number'];
        $faddress = $customerInfo['customer_address'];
        $fpayment =  $paymentMethod;

        //include_once '/vendor/mpdf/mpdf.php';


        $data = '<div style="font-size: 12px;">';
        $data .= '<h1>Order Details</h1>';
        $data .= '<strong>Customer Name: </strong>' . $fname . '<br>';
        $data .= '<strong>Contact Number: </strong>' . $fnumber . '<br>';
        $data .= '<strong>Billing Address: </strong>' . $faddress . '<br>';
        $data .= '<strong>Method of Payment: </strong>' . $fpayment . '<br>';
        $data .= '<br> <br>';
        $data .= $productTable . '</div>';

        $mpdf->WriteHTML($data);

        // Output a PDF file directly to the browser
        $mpdf->Output();

        echo "<script>
        alert('Order has been placed');
        window.location.href='/online_shopping_system/main.php';
        </script>";
    }
}
