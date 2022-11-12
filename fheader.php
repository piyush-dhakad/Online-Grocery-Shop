

<!DOCTYPE html>
<html lang="en">
<?php
$con=mysqli_connect("localhost","root","","online")or die(mysqli_error());

 
?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fashion Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="startbootstrap-modern-business-gh-pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="startbootstrap-modern-business-gh-pages/css/modern-business.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
 
   <style>
      .size {
             height:300px;
            }
    </style>
</head>
  <body background="img/bag.png">
    <!-- Navigation -->
    <nav  class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary fixed-top">
        
      <div class="container">
        <a class="navbar-brand" href="index.php">Fashion Shop</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="felectronics.php">    Electronics</a>
            </li>
               <li class="nav-item">
              <a class="nav-link" href="fmen.php" >
                Men
              </a>
              
            </li>
               <li class="nav-item">
              <a class="nav-link" href="fwomen.php" >
                Women
              </a>
              </li>
               <li class="nav-item">
              <a class="nav-link"  href="fcontact.php" >
                Contact
              </a>
              </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdownBlog" data-toggle="dropdown">
                login/singup
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="register.php">singup</a>
                <a class="dropdown-item" href="login.php">login</a>
                <a class="dropdown-item" href="admine_login.php">Admin Login</a>
                </div>
            </li> 
          </ul>
        </div>
      </div>
    </nav>