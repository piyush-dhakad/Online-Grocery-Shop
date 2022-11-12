
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
         form, .content {
            width: 100%;
            margin: 0px auto;
            padding: 20px;
            border: 1px solid #b0c4de;
            background: white;
            border-radius: 10px 10px 10px 10px;
        }
          .content2 {
            width: 100%;
            margin: 0px auto;
           color: white; 
            background:#343a40 ;
        }
          .success{
            color: #3c763d;
            background: #dff0d8;
            border: 1px solid #3c763d;
        
            
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
        <a class="navbar-brand" href="home.php">Fashion Shop</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="electronics.php">    Electronics</a>
            </li>
               <li class="nav-item">
              <a class="nav-link" href="men.php" >
                Men
              </a>
              
            </li>
               <li class="nav-item">
              <a class="nav-link" href="women.php" >
                Women
              </a>
              </li>
               <li class="nav-item">
              <a class="nav-link" href="contact.php" >
                Contact
              </a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdownBlog" data-toggle="dropdown">
                User
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                  <a class="dropdown-item" href="profile.php">Profile</a>
                  <a class="dropdown-item" href="home.php?logout='1'">Logout</a>
                
                <a class="dropdown-item" href="#">Blog Post</a>
              </div>
            </li>          </ul>
        </div>
      </div>
    </nav>

      