<?php

session_start();

if (!isset($_SESSION['user_id'])) {

  header('location:/online_shopping_system/login.php');
}

include_once './admin_header.php';

?>

<div class="admin-dashboard container">
  <br>
  <h4>
    Admin dashboard
  </h4>

</div>


<?php
include_once './admin_footer.php';
?>