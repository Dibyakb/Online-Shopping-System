<?php

session_start();

if (!isset($_SESSION['user_id'])) {

    header('location:/online_shopping_system/login.php');
}

//echo $_SESSION['user_id'];
include_once './admin_header.php';

?>
<div class="admin-add-category container">
    <br>
    <h4>
        Add New Category
    </h4>
    <form action="/online_shopping_system/includes/admin_inc/admin_category_inc.php" method="POST">
        <input type="text" name="user_id" hidden value="<?php echo $_SESSION["user_id"]; ?>">
        <div class="mb-3">
            <label class="form-label">New Category Name</label> <br>
            <input type="text" name="category_name">
        </div>
        <input type="submit" name="add_category" value="Add Category" class="btn btn-info">
    </form>

</div>

<?php

include_once '../includes/dbh_inc.php';
include_once '../includes/function_inc.php';

//getAllCategory($conn);


?>
<div class="admin-category container">
    <br>
    <h4>
        All Category
    </h4>

</div>


<?php
include_once './admin_footer.php';
?>