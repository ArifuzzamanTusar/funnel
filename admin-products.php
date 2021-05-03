<?php
include 'inc/header.php';
?>


<div class="container">
    <div class="row">
        <a class="col-6 col-lg-3 text-center p-3 tab" href="admin-dashboard.php">
            Dashboard
        </a>

        <a class="col-6 col-lg-3 text-center p-3 tab tab-active" href="admin-products.php">
            All Products
        </a>

        <a class="col-6 col-lg-3 text-center p-3 tab" href="all-customers.php">
            Customers
        </a>

        <a class="col-6 col-lg-3 text-center p-3 tab" href="settings.php">
            Settings
        </a>


    </div>
</div>

<div class="container">

    <div class="p-2"></div>

    <div class="row">
        <a class="col-6 col-lg-3 text-center p-3 tab" href="admin-add-products.php">
            Add Products
        </a>

    </div>
    <div class="p-3"></div>
    <h4 class="pt-3 pb-3">All Products</h4>
    <hr>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="widget">
                <div class="row">
                    <div class="col-3 text-left ">
                        <img src="images/iphone11.jpg" width="30%" alt="">
                    </div>
                    <div class="col-3 prodct-texts">
                        <h6>Iphone 11</h6>
                    </div>
                    <div class="col-3 prodct-texts">
                        <h6>99$</h6>
                    </div>
                    <div class="col-3 prodct-texts">
                        <a name="" id="" class="" href="#" role="button"><h6>Action</h6></a>
                    </div>  
                </div>

            </div>
        </div>

    </div>
</div>


<?php

include 'inc/footer.php';
?>