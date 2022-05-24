<?php

include_once './header.php';

?>

<div class="container">

    <div class="row align-items-center">
        <div class="col">
            <br><br>
            <h3>Sign up As Seller</h3>
            <div class="seller-signup">
                <form action="/online_shopping_system/includes/seller_inc/seller_signup_inc.php" method="POST">
                    <label>Enter Name:</label><br>
                    <input type="text" name="seller_name"> <br>
                    <label>Enter Email:</label><br>
                    <input type="text" name="seller_email"><br>
                    <label>Enter Password:</label><br>
                    <input type="password" name="seller_password"> <br>
                    <label>Confirm Password:</label><br>
                    <input type="password" name="seller_password_confirm">
                    <br>
                    <br>
                    <input type="submit" value="Sign Up" class="btn btn-small btn-info" name="seller_signup"><br>
                </form>
            </div>

        </div>
        <div class="col">
            <br><br>
            <h3>Sign up As Customer</h3>
            <div class="customer-signup">
                <form action="/online_shopping_system/includes/customer_inc/customer_signup_inc.php" method="POST">
                    <label>Enter Name:</label><br>
                    <input type="text" name="customer_name"> <br>
                    <label>Enter Email:</label><br>
                    <input type="text" name="user_email"><br>
                    <label>Enter Password:</label><br>
                    <input type="password" name="user_password"><br>
                    <label>Confirm Password:</label><br>
                    <input type="password" name="seller_password_confirm">
                    <br><br>
                    <input type="submit" value="Sign Up" class="btn btn-small btn-info" name="customer_signup">
                </form>
            </div>
        </div>

        <div class="mt-5">
            <h5 class="text-center">Already have an account? <a href="./login.php">Log In</a></h5>
        </div>
    </div>

</div>





<?php

include_once './footer.php';

?>