<?php include 'inc/header.php'; ?>
<link href="css/carousel.css" rel="stylesheet">



<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

        <!-- ||||||||||||||||||||||||||||||||||car one ||||||||||||||||||||||||||||||\\ -->
        <?php 
        $set_slider_no =1;
        include 'slider-function.php';
        ?>

        <div class="carousel-item active">
            <img class="bd-placeholder-img" width="100%" height="100%" src="<?php echo $image?>" preserveAspectRatio="xMidYMid slice" focusable="false">
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1><?php echo  $heading?></h1>
                    <p><?php echo $disc?></p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo  $btn_url?>" role="button"><?php echo $btn_txt?></a></p>
                </div>
            </div>
        </div>

        <!-- ||||||||||||||||||||||||||||||||||car two ||||||||||||||||||||||||||||||\\ -->
        <?php 
        $set_slider_no =2;
        include 'slider-function.php';
        ?>

        <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="<?php echo $image?>" preserveAspectRatio="xMidYMid slice" focusable="false">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?php echo  $heading?></h1>
                    <p><?php echo $disc?></p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo  $btn_url?>" role="button"><?php echo $btn_txt?></a></p>
                </div>
            </div>
        </div>

        <!-- ||||||||||||||||||||||||||||||||||car three ||||||||||||||||||||||||||||||\\ -->
        <?php 
        $set_slider_no =3;
        include 'slider-function.php';
        ?>

        <div class="carousel-item">

            <img class="bd-placeholder-img" width="100%" height="100%" src="<?php echo $image?>" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="container">
                <div class="carousel-caption text-right">
                    <h1><?php echo  $heading?></h1>
                    <p><?php echo $disc?></p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo  $btn_url?>" role="button"><?php echo $btn_txt?></a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- ------- Car End --------- -->

<div class="container">
    <div class="row">



        <?php
        $admin_query = " SELECT * FROM `products` ORDER BY `sl` DESC ";
        $result = mysqli_query($con, $admin_query);
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                $product_id = $row["product_id"];
                $product_tittle = $row["product_tittle"];
                $product_slug = $row["product_slug"];
                $product_price = $row["product_price"];
                $product_cat = $row["product_cat"];
                $product_dis = $row["product_dis"];
                $product_img_1 = "uploads/product-image/" . $row["product_img_1"];
                $product_img_2 = $row["product_img_2"];
                // function 
                if (strlen($product_dis) > 200) {
                    $product_dis = substr($product_dis, 0, 200) . "&nbsp;" . "<a href='product?id=" . $product_id . "'>Read More</a>";
                }







        ?>
                <div class="col-md-6">
                    <div class="product">


                        <div class="featured-image">
                            <img class="p-image" src="<?php echo $product_img_1 ?>" alt="">

                        </div>
                        <div class="disription">
                            <h3 class="p-tittle"><?php echo $product_tittle ?></h3>
                            <hr class="divider">
                            <!-- <del class="p-del-price">$1050</del> -->
                            <h3 class="p-price">Price: $ <?php echo $product_price ?></h3>
                            <p class="p-discription"> <?php echo $product_dis ?></p>
                            <div>
                                <span>
                                    <a name="" id="" class="btn btn-primary see-details" href="#" role="button">See Details</a>

                                </span>
                                <span>
                                    <a name="" id="" class="btn btn-primary buy-now" href="#" role="button">Buy Now</a>
                                </span>

                            </div>

                        </div>
                    </div>

                    <div class="p-4"></div>
                </div>






        <?php
            }
        }

        ?>

    </div>
</div>




<?php
include 'inc/footer.php';
?>