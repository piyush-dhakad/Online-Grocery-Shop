<?php 
session_start();

if(!isset($_SESSION['username'])&& empty($_SESSION['username']))
{
  header("Location: admine_login.php"); 
}

//die; ?>
<?php
$con=mysqli_connect("localhost","root","","online")or die(mysqli_error());

 
?>
<!DOCTYPE html>
<html lang="en">

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
 
<style>.btn {
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #5f9ea0;
            border: none;
            border-radius: 5px;
            
        }
.size {

                  height:300px;

                }
      </style>
    </head>

  <body background="img/bag.png">

    <!-- Navigation -->
    <nav  class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary fixed-top">
        
      <div class="container">
        <a class="navbar-brand" href="#">Fashion Shop</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
                
              <li class="nav-item">
          
                  <a class="nav-link" href="admin.php">Admine Home</a>
            </li>

              <li class="nav-item">
              <a class="nav-link" href="admin_all_product_show.php">Product Show </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="show_user.php">Show User</a>
            </li>
               <li class="nav-item">
              <a class="nav-link" href="slider_detals.php" >
                Slider Detals
              </a>
              
            </li>
             
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdownBlog" data-toggle="dropdown">
                Admin
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="admine_login_connect.php?logout='1'">Logout</a>
 </div>
            </li>          </ul>
        </div>
      </div>
    </nav>
