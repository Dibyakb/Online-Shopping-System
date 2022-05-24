<?php

include_once './includes/dbh_inc.php';

$output = '';
if (isset($_POST['query'])) {

    $search = $_POST['query'];
    $stmt = $conn->prepare("SELECT product_id, product_name FROM product 
                            WHERE product_name LIKE CONCAT('%',?,'%')");

    $stmt->bind_param("s", $search);

    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {

        $output = "";
        while ($row = $res->fetch_assoc()) {

            $output .= "   
            ";
?>

            <li class='list-group-item'>
                <form action="/online_shopping_system/product/single_product.php" method="POST">
                    <input type="text" name="product_id" hidden value="<?php echo $row['product_id']; ?>">
                    <button type="submit" class="btn btn-primary btn-sm" name='go_to_product' style="background: white; border: none; color:black;"><?php echo $row['product_name']; ?></button>
                </form>

            </li>

<?php
            "</li>";
        }
        echo $output;
    } else {

        echo "<li class='list-group-item'>No Reult Found</li>";
    }
}

?>