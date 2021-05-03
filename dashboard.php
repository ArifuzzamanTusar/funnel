<?php
include 'inc/header.php';
?>
<?php
//includes
require_once('login-session.php');

?>
<div class="container">
    <div class="row">
        <a class="col-6 text-center p-3 tab tab-active" href="dashboard.php">
            My Profile

        </a>
        <a class="col-6 text-center p-3 tab" href="orders.php">
            My Orders


        </a>
    </div>
</div>

<!-- profile -->
<div class="container">

    <div class="image text-center p-4">
        <img class="text-center" width="150px" style="border-radius: 100px; border: 2px dotted grey;" src="images/logo/favicon.png" alt="">
        <div class="p-4"></div>
        <h4><?php echo $fname."&nbsp;".$lname ?></h4>
        <h6><?php echo $username ?></h6>
        <div class="p-4"></div>
    </div>


</div>

<form action="" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </div>

</form>

<div class="p-5"></div>



<?php

include 'inc/footer.php';
?>