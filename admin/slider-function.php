<?php
$slider_id = $set_slider_no;
$admin_query = "SELECT *  FROM `slider` WHERE `slider_no` = $slider_id";
$result = mysqli_query($con, $admin_query);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        $get_slider_no = $row["slider_no"];
        $heading = $row["heading"];
        $sub_heading = $row["sub_heading"];
        $disc = $row["disc"];
        $image = $row["image"];
        $btn_txt = $row["btn_txt"];
        $btn_url = $row["btn_url"];
    }
}


