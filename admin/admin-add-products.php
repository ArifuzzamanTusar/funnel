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
    <h4 class="pt-3 pb-3">Add New Product</h4>
    <hr>
    <div class="p-3"></div>

    <div class="row">

    </div>


</div>
<div class="container pt-5">




    <!-- edit functionalities -->

    <!-- 
 ===============================================================================
||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
    <!-- form -->

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="pt-3" for="">Product Tittle</label>
            <input type="text" class="form-control" name="product-title" id="" placeholder="Product Name">
            <div class="row">
                <div class="col-md-4">
                    <label class="pt-3" for="">Product Slug</label>
                    <input required type="text" class="form-control" name="product-slug" id="" placeholder="Product slug">

                </div>
                <div class="col-md-4">
                    <label class="pt-3" for="">Product Price</label>
                    <input required type="number" class="form-control" name="product-price" id="" placeholder="$0.00">

                </div>
                <div class="col-md-4">
                    <label class="pt-3" for="">Product Brand</label>

                    <select class="form-control" name="product-category" id="">
                        <option value="Apple">Apple</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Xiaomi">Xiaomi</option>
                    </select>
                </div>


            </div>

            <div class="row">
                <div class="col-md-8">
                    <label class="pt-3" for="">Product Discription </label>
                    <!-- <textarea class="form-control" name="product-discription" id="" cols="30" rows="10"></textarea> -->
                    <script src="ckeditor/ckeditor.js"></script>
                    <textarea name="product-discription" id="editor1" rows="10" cols="80"></textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor 4
                        // instance, using default configuration.
                        CKEDITOR.replace('editor1');
                    </script>

                </div>

                <div class="col-md-4">
                    <label class="pt-3" for="">Product Images 1 (Front)</label>
                    <input type="file" class="form-control-file" name="product-img-1" id="" placeholder="" aria-describedby="fileHelpId">
                    <small id="fileHelpId" class="form-text text-muted">File should be under 200kb and ratio 2:3</small>


                    <label class="pt-3" for="">Product Images 1 (Back)</label>
                    <input type="file" class="form-control-file" name="product-img-2" id="" placeholder="" aria-describedby="fileHelpId">
                    <small id="fileHelpId" class="form-text text-muted">File should be under 200kb and ratio 2:3</small>

                    <button name="product_upload" type="submit" class="btn btn-primary mt-4 p-3"> ADD YOUR PRODUCT</button>



                </div>
            </div>

        </div>
    </form>


    <!-- Form Complete -->
    <!-- Upload -->


    <?php
    if (isset($_POST['product_upload'])) {

        $pd_id = "ST-" . rand(1000, 10000);
        $pd_title = $_REQUEST['product-title'];
        $pd_slug = $_REQUEST['product-slug'];
        $pd_price = $_REQUEST['product-price'];
        $pd_cat = $_REQUEST['product-category'];
        $pd_disc = $_REQUEST['product-discription'];


        // product-images

        #file name with a "random number" so that similar dont get replaced
        $pd_image_1 = rand(1000, 10000) . "-" . $_FILES["product-img-1"]["name"];
        $pd_image_2 = rand(1000, 10000) . "-" . $_FILES["product-img-2"]["name"];
        #temporary file name to store file
        $tname = $_FILES["product-img-1"]["tmp_name"];
        $tname1 = $_FILES["product-img-2"]["tmp_name"];
        #upload directory path
        $uploads_dir = '../uploads/product-image';
        #TO move the uploaded file to specific location
        move_uploaded_file($tname, $uploads_dir . '/' . $pd_image_1);
        move_uploaded_file($tname1, $uploads_dir . '/' . $pd_image_2);



        // ..................................
        //Uplaoading to database


        $sql = "INSERT INTO `products` (`product_id`, `product_tittle`, `product_slug`, `product_price`, `product_cat`, `product_dis`, `product_img_1`, `product_img_2`) 
            VALUES ('$pd_id', '$pd_title', '$pd_slug', '$pd_price', '$pd_cat', '$pd_disc', '$pd_image_1', '$pd_image_2');";

        if (mysqli_query($con, $sql)) {

            $product_up_ok = "Product Sucessfully uploaded";
            echo '<div class="alert-light text-success text-center py-3">' . $product_up_ok . '</div>';
        } else {
            $product_up_failed = "Failed";
            echo $sql;
            echo "<b>" . mysqli_error($con);
            echo '<div class="alert-light text-danger text-center py-3">' . $product_up_failed . '</div>';
        }
    }

    ?>


    <!-- 
===============================================================================
||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->



</div>


<?php

include 'inc/footer.php';
?>