<?php
include_once '../header.php';



if (isset($_POST['go_to_product']) || isset($_POST['display-product']) || isset($_POST['buy_now']) || isset($_POST['display-category-product'])) {

    include_once '../includes/dbh_inc.php';
    include_once '../includes/function_inc.php';

    $productInfo = getProductInfo($conn, $_POST['product_id']);

    $categoryInfo = getSingleCategory($conn, $productInfo['category_id']);
    $description = getSingleDescription($conn, $productInfo['product_id'], $productInfo['category_id']);

?>

    <div class="container product-description" style="height: 2500px;">
        <div class="row">
            <div class="col mb-3">
                <div class="pic-image row">
                    <div class="col">
                        <img src="/online_shopping_system/img/product_img/<?= $productInfo['product_image_1'] ?>">
                    </div>
                    <div class="col">
                        <img src="/online_shopping_system/img/product_img/<?= $productInfo['product_image_2'] ?>">

                    </div>
                </div>
            </div>
            <div class="col">
                <h3><?php echo  $productInfo['product_name'] ?></h3>
                <p>
                    <?php echo $productInfo['product_description'] ?>
                </p>
                <span>Price: <?php echo $productInfo['product_unit_price'] ?> BDT</span> <br>
                <form action="/online_shopping_system/cart_form.php" method="POST">
                    <input type="text" name="product_id" hidden value="<?php echo  $productInfo['product_id']; ?>">
                    <input type="text" name="product_name" hidden value="<?php echo  $productInfo['product_name']; ?>">
                    <input type="text" name="product_unit_price" hidden value="<?php echo $productInfo['product_unit_price']; ?>">
                    <label for="product_quantity"><b>ProductQuantity: </b> </label>
                    <input type='number' name="product_quantity" min='1' max='20' size="5" class="mt-2" value="1"> <br>
                    <input type="submit" class="btn btn-danger btn-sm mt-2" name='buy_now' value="Buy Now">
                </form>
            </div>
        </div>

        <div id='description-table'>
            <dl class="row">
                <?php foreach ($categoryInfo['attributes'] as $key => $attribute) { ?>
                    <dt class="col-sm-3">
                        <?php echo  $attribute; ?>
                    </dt>
                    <dd class="col-sm-9">
                        <?php
                        if (!isset($description['attributeValues'][$key])) {
                            echo "N/A";
                        } else {
                            echo $description['attributeValues'][$key];
                        }
                        ?>
                    </dd>
                <?php } ?>
            </dl>
        </div>
    </div>

<?php
}
include_once '../footer.php';
?>