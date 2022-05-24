<?php

include_once './header.php';
// session_start();
// echo $_SESSION['user_id'];

?>

<div class="login-page container">
    <br>
    <h3>Log In</h3>

    <form action="/online_shopping_system/includes/login_inc.php" method="POST">
        <label>Enter Email:</label><br>
        <input type="text" name="user_email"><br>
        <label>Enter Password:</label><br>
        <input type="password" name="user_password"> <br><br>
        <input type="submit" value="Login " name="login_btn" class="btn btn-info"><br>
    </form>
    <br>

    <div class="mt-5">

        <h5 class="text-center">Don't have an account? <a href="./signup.php">Sign Up</a></h5>
    </div>
</div>


<?php

include_once './footer.php';

?>