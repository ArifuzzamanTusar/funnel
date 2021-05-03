<?php
include 'inc/header.php';
?>


<div class="container">
    <div class="row">
        <a class="col-6 col-lg-3 text-center p-3 tab" href="index.php">
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
                        <h6>image</h6>
                    </div>
                    <div class="col-3 prodct-texts">
                        <h6>Product name</h6>
                    </div>
                    <div class="col-3 prodct-texts">
                        <h6>price</h6>
                    </div>
                    <div class="col-3 prodct-texts">
                        <a name="" id="" class="btn" href="#" role="button">
                            <h6>Actions</h6>
                        </a>
                        <br>

                    </div>
                </div>

            </div>
            <div class="p-2"></div>
        </div>

        <?php
        $admin_query = " SELECT * FROM `products` ORDER BY `sl` DESC ";
        $result = mysqli_query($con, $admin_query);
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                $product_id = $row["product_id"];
                $product_tittle = $row["product_tittle"];
                $product_price = $row["product_price"];
                $product_img_1 = "../uploads/product-image/" . $row["product_img_1"];

        ?>
                <!-- crud sectin  -->
                <div class="col-12">
                    <div class="widget">
                        <div class="row">
                            <div class="col-3 text-left ">
                                <img src="<?php echo $product_img_1 ?>" width="30%" alt="">
                            </div>
                            <div class="col-3 prodct-texts">
                                <h6><?php echo $product_tittle ?></h6>
                            </div>
                            <div class="col-3 prodct-texts">
                                <h6><?php echo $product_price ?></h6>
                            </div>
                            <div class="col-3 prodct-texts">
                                <a name="" id="" class="btn" href="#" role="button">
                                    <h6>Edit</h6>
                                </a>
                                <br>
                                <a onclick="myFunction()" name="" id="" class="btn" href="" role="button">
                                    <h6>Delete</h6>
                                </a>
                                <script>
                                    function myFunction() {
                                        var answer = window.confirm("Are you sure to delete '<?php echo  $product_tittle ?>' ? ");
                                        if (answer) {
                                            window.location.replace("delete.php?id=<?php echo  $product_id ?>");
                                        }

                                    }
                                </script>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="p-2"></div>
                <!-- crud sectin  -->

        <?php
            }
        }
        ?>



    </div>
</div>

<div class="p-4"></div>

<?php

include 'inc/footer.php';
?>