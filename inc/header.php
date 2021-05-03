<?php include 'connection.php';?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- fa library -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous" />
  <!-- ----- -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>


  <!-- ----------------------------------------------------------------- -->
  <div class="header sticky-top">


    <div class="container">



      <nav class="mb-1 navbar navbar-expand-lg ">
        <a class="navbar-brand header_logo" href="index.php"><img height="40px" width="" src="images/logo/favicon.png" alt="logo" />&nbsp;  FUNNEL</a>
        <button class="navbar-toggler icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon ">&equiv;</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">

          <ul class="navbar-nav ml-auto nav-flex-icons">

            <li class="nav-item dropdown profile">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                <a class="dropdown-item" href="dashboard.php">Profile</a>
                <a class="dropdown-item" href="orders.php">My Orders</a>
                <a class="dropdown-item" href="logout.php?logout">logout</a>
                
              </div>
            </li>
          </ul>
        </div>
      </nav>

    </div>
  </div>









