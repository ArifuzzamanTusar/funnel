<?php
    session_start();

    if(isset($_SESSION['username_session']))
    {

        $logged_user=  $_SESSION['username_session'];
        

        include "inc/connection.php";
        $admin_query = " SELECT * FROM `user` WHERE username LIKE '$logged_user' ";
        $result= mysqli_query($con,$admin_query);
        if (mysqli_num_rows($result) > 0) {
           
            while($row = mysqli_fetch_assoc($result)) {

                
                
                $userid= $row["id"];
                $username = $row["username"];
                $fname = $row["firstname"];
                $lname = $row["lastname"];
                $email = $row["email"];
                $phone= $row["phone"];
                $bio = $row["bio"];
                $city= $row["city"];
                $birtday = $row["birthday"];
                $gender = $row["gender"];
                
                $password = $row["password"];
                

                $profile_picture = $row["avater_image"];
               

                // creating backup 
                if (strlen($profile_picture) < 5) {
                    $profile_picture = "avater.png";
                }
                
                
                
                
                
            }
        }
        
        
   
        
    }

    
    else
    {
        header("location:login.php");
    }

?>

