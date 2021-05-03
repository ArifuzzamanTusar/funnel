<?php
include 'inc/header.php';
?>
<?php
//includes
require_once('login-session.php');

?>


<div class="container">
    <div class="row">
        <a class="col-6 text-center p-3 tab" href="dashboard.php">
            My Profile

        </a>
        <a class="col-6 text-center p-3 tab  tab-active" href="orders.php">
            My Orders


        </a>
    </div>
</div>

<div class="container">
    <h2 class="pt-3 pb-3">My Orders</h2>
    <hr>
    <div class="p-3"></div>

    <div class="row">

    </div>


</div>


<?php

include 'inc/footer.php';
?>