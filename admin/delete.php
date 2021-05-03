<?php
include 'connection.php';
require_once 'admin-session.php';
if (isset($_GET['id'])) {
    $deletable_id = $_GET['id'];
    $sql = "DELETE FROM `products` WHERE `products`.`product_id` LIKE '$deletable_id' ";

    if (mysqli_query($con, $sql)) {

       
        header("location:admin-products.php");
    } else {
        $topic_up_failed = "Failed";
        echo '<div class="alert-light text-danger text-center py-3">' . $topic_up_failed . '</div>';
        echo mysqli_error($con);
    }
}
