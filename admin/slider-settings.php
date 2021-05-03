<?php
include 'inc/header.php';
?>


<div class="container">
    <div class="row">
        <a class="col-6 col-lg-3 text-center p-3 tab" href="index.php">
            Dashboard
        </a>

        <a class="col-6 col-lg-3 text-center p-3 tab" href="admin-products.php">
            All Products
        </a>

        <a class="col-6 col-lg-3 text-center p-3 tab" href="all-customers.php">
            Customers
        </a>

        <a class="col-6 col-lg-3 text-center p-3 tab tab-active" href="settings.php">
            Settings
        </a>


    </div>
</div>

<div class="container">
    <a href="slider-settings.php"><h4 class="pt-3 pb-3 ">Change Slider</h4></a>
    <hr>
    <div class="p-3"></div>

    <div class="row">

    </div>


</div>
<!-- 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
||||||||||||||||||||||||||||||||||||||||||  SLIDER 1 ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| 
-->
<div  id="1" class="container">
    <h4>Slider 1</h4>
    <?php
    $set_slider_no = 1;
    include 'slider-function.php';
    ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="">Heading</label>
            <input type="text" class="form-control" name="heading1" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $heading ?>">

            <label for="">Discription</label>
            <script src="ckeditor/ckeditor.js"></script>
            <textarea name="discription1" id="editor1" rows="10" cols="80">
                <?php echo $disc ?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
            </script>

            <label for="">Button Text</label>
            <input type="text" class="form-control" name="btn1" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $btn_txt ?>">
            <label for="">Button url</label>
            <input type="text" class="form-control" name="url1" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $btn_url ?>">
            <label for="">Slider Image</label>
            <br>
            <img src="<?php echo $image ?>" width="30%" alt="">
            <br>
            <label for="">Change Image <small> (Add <a target="_blank" href="https://cloudinary.com/console">cloudinary</a> Url) </small></label>
            <input class="form-control" name="image1" type="text" name="slider-img-1" id="" value="<?php echo $image ?>">
            <small>If you're logged in, <a href="https://cloudinary.com/console/c-fc761ee9de4e6e48dd78edc79aca50/media_library/folders/a8ce38023715925d70724c25b42817c0" target="_blank" rel="noopener noreferrer">Select Image from Cloudinary</a></small>
            <br>
            <button name="update1" type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>
    <?php
    if (isset($_POST["update1"])) {


        $form_heading_1 = $_REQUEST["heading1"];
        $form_disc_1 = $_REQUEST["discription1"];
        $form_btn_txt_1 = $_REQUEST["btn1"];
        $form_btn_url_1 = $_REQUEST["url1"];
        $form_bg_image_1 = $_REQUEST["image1"];

        $sql_1 = "UPDATE `slider` SET 
        `heading` = '$form_heading_1', 
        `sub_heading` = 'Not Set', 
        `disc` = '$form_disc_1', 
        `image` = '$form_bg_image_1', 
        `btn_txt` = '$form_btn_txt_1', 
        `btn_url` = '$form_btn_url_1'
        WHERE `slider`.`slider_no` = 1;";
        if (mysqli_query($con, $sql_1)) {
            echo '<script>window.location.replace("slider-settings.php#1");</script>';
        }
    }
    ?>
</div>

<div class="p-3">
    <hr>
</div>
<!-- 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
||||||||||||||||||||||||||||||||||||||||||  SLIDER 2 ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| 
-->
<div   id="2" class="container">
    <h4>Slider 2</h4>
    <?php
    $set_slider_no = 2;
    include 'slider-function.php';
    ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="">Heading</label>
            <input type="text" class="form-control" name="heading2" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $heading ?>">

            <label for="">Discription</label>
            <!-- <script src="ckeditor/ckeditor.js"></script> -->
            <textarea name="discription2" id="editor2" rows="10" cols="80">
                <?php echo $disc ?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace('editor2');
            </script>

            <label for="">Button Text</label>
            <input type="text" class="form-control" name="btn2" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $btn_txt ?>">
            <label for="">Button url</label>
            <input type="text" class="form-control" name="url2" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $btn_url ?>">
            <label for="">Slider Image</label>
            <br>
            <img src="<?php echo $image ?>" width="30%" alt="">
            <br>
            <label for="">Change Image <small> (Add <a target="_blank" href="https://cloudinary.com/console">cloudinary</a> Url) </small></label>
            <input class="form-control" name="image2" type="text"  id="" value="<?php echo $image ?>">
            <small>If you're logged in, <a href="https://cloudinary.com/console/c-fc761ee9de4e6e48dd78edc79aca50/media_library/folders/a8ce38023715925d70724c25b42817c0" target="_blank" rel="noopener noreferrer">Select Image from Cloudinary</a></small>
            <br>
            <button name="update2" type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>
    <div class="p-2"></div>
    <?php
    if (isset($_POST["update2"])) {


        $form_heading_2 = $_REQUEST["heading2"];
        $form_disc_2 = $_REQUEST["discription2"];
        $form_btn_txt_2 = $_REQUEST["btn2"];
        $form_btn_url_2 = $_REQUEST["url2"];
        $form_bg_image_2 = $_REQUEST["image2"];

        $sql_2 = "UPDATE `slider` SET 
        `heading` = '$form_heading_2', 
        `sub_heading` = 'Not Set', 
        `disc` = '$form_disc_2', 
        `image` = '$form_bg_image_2', 
        `btn_txt` = '$form_btn_txt_2', 
        `btn_url` = '$form_btn_url_2'
        WHERE `slider`.`slider_no` = 2;";
        if (mysqli_query($con, $sql_2)) {
            echo '<script>window.location.replace("slider-settings.php#2");</script>';
        }
    }

    ?>
</div>
<div class="p-3">
    <hr>
</div>
<!-- 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
||||||||||||||||||||||||||||||||||||||||||  SLIDER 3 ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| 
-->
<div  id="3" class="container">
    <h4>Slider 3</h4>
    <?php
    $set_slider_no = 3;
    include 'slider-function.php';
    ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="">Heading</label>
            <input type="text" class="form-control" name="heading3" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $heading ?>">

            <label for="">Discription</label>
            <!-- <script src="ckeditor/ckeditor.js"></script> -->
            <textarea name="discription3" id="editor3" rows="10" cols="80">
                <?php echo $disc ?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace('editor3');
            </script>

            <label for="">Button Text</label>
            <input type="text" class="form-control" name="btn3" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $btn_txt ?>">
            <label for="">Button url</label>
            <input type="text" class="form-control" name="url3" id="" aria-describedby="emailHelpId" placeholder="" value="<?php echo $btn_url ?>">
            <label for="">Slider Image</label>
            <br>
            <img src="<?php echo $image ?>" width="30%" alt="">
            <br>
            <label for="">Change Image <small> (Add <a target="_blank" href="https://cloudinary.com/console">cloudinary</a> Url) </small></label>
            <input class="form-control" type="text" name="image3" id="" value="<?php echo $image ?>">
            <small>If you're logged in, <a href="https://cloudinary.com/console/c-fc761ee9de4e6e48dd78edc79aca50/media_library/folders/a8ce38023715925d70724c25b42817c0" target="_blank" rel="noopener noreferrer">Select Image from Cloudinary</a></small>
            <br>
            <button name="update3" type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>
    <?php
    if (isset($_POST["update3"])) {


        $form_heading_3 = $_REQUEST["heading3"];
        $form_disc_3 = $_REQUEST["discription3"];
        $form_btn_txt_3 = $_REQUEST["btn3"];
        $form_btn_url_3 = $_REQUEST["url3"];
        $form_bg_image_3 = $_REQUEST["image3"];

        $sql_3 = "UPDATE `slider` SET 
        `heading` = '$form_heading_3', 
        `sub_heading` = 'Not Set', 
        `disc` = '$form_disc_3', 
        `image` = '$form_bg_image_3', 
        `btn_txt` = '$form_btn_txt_3', 
        `btn_url` = '$form_btn_url_3'
        WHERE `slider`.`slider_no` = 3;";
        if (mysqli_query($con, $sql_3)) {
            echo '<script>window.location.replace("slider-settings.php#3");</script>';
        }
    }
    ?>
</div>



<?php

include 'inc/footer.php';
?>