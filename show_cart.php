 <?php
    include_once './header.php';
    ?>

 <div class="container" id="cart-display" style="height: 400px;">

     <?php
        if (isset($_SESSION['show_cart']) && count($_SESSION['show_cart']) > 0) {

        ?>
         <h2>Cart Items: </h2>
         <table>
             <thead>
                 <tr>
                     <th>Product Name</th>
                     <th>Product Price</th>
                     <th>Product Quantity</th>
                     <th>Action</th>
                     <th>total</th>

                 </tr>
             </thead>
             <tbody>

             <?php
            } else {

                echo "<h2 class='text-center'>Your Cart Is Empty</h2>";
            }
            $total = 0;

            if (isset($_SESSION['show_cart'])) {
                foreach ($_SESSION['show_cart'] as $key => $value) {

                    $total = $total + $value['product_unit_price'];
                    echo "
                                    <tr>                             
                                        <td>$value[product_name]</td>
                                        <td><input type='hidden' value='$value[product_unit_price]' class='mrp'>$value[product_unit_price]</td>
                                        <td>
                                            <form action='/online_shopping_system/cart.php' method='POST'>
                                                <input type='number' class='quantity' onchange='this.form.submit();' name='to_change_quantity' value='$value[product_quantity]' min='1' max='20'>  
                                                <input type='hidden' name='product_name' value='$value[product_name]'>
                                                <input type='hidden' name='Id' value='$value[product_id]'>
                                            </form>    
                                        </td>
                                        <td> 
                                            <form action='/online_shopping_system/cart.php' method='POST'>
                                                <input type='hidden' name='product_name' value='$value[product_name]'>
                                                <input name='remove_from_cart' value='remove' class='btn btn-primary btn-sm' type='submit'>
                                            </form>
                                         </td>
                                        <td class='total'>$value[product_unit_price]</td>
                                    </tr>                         
                                ";
                }
            }
                ?>
             </tbody>

         </table>
         <br> <br>


         <?php
            if (isset($_SESSION['show_cart']) && count($_SESSION['show_cart']) > 0) {
            ?>
             <h4>Total MRP:<h4 id="Total"> </h4>
                 <a class="btn btn-danger btn-sm" href="/online_shopping_system/cart_form.php">Procced To Pay</a>
             <?php
            }
                ?>
 </div>
 <script>
     var Total = document.getElementById('Total');
     var mrp = document.getElementsByClassName('mrp');
     var quantity = document.getElementsByClassName('quantity');
     var total = document.getElementsByClassName('total');

     function calculate() {
         T = 0;
         for (i = 0; i < mrp.length; i++) {
             total[i].innerText = (mrp[i].value) * (quantity[i].value);
             T = T + (mrp[i].value) * (quantity[i].value);
         }
         Total.innerText = T;
     }
     calculate();
 </script>

 <?php
    include_once './footer.php';
    ?>