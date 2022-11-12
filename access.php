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
              <a class="nav-link" onclick="alert('Sorry..!go and Sign Up First then you can try');" href="#">    Electronics</a>
            </li>
               <li class="nav-item">
              <a class="nav-link" onclick="alert('Sorry..!go and Sign Up First then you can try');" href="#" >
                Men
              </a>
              
            </li>
               <li class="nav-item">
              <a class="nav-link" onclick="alert('Sorry..!go and Sign Up First then you can try');" href="#" >
                Women
              </a>
              </li>
               <li class="nav-item">
              <a class="nav-link" onclick="alert('Sorry..!go and Sign Up First then you can try');" href="#" >
                CONTACT
              </a>
              </li>
              <li class="nav-item">
            <a class="nav-link" onclick="alert('Sorry..!go and Sign Up First then you can try');" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="alert('Sorry..!go and Sign Up First then you can try');" href="#">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="alert('Sorry..!go and Sign Up First then you can try');" href="#">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="register.php">Register</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <header> 
<html>
<head>
    <title> register</title>
    <style>
        form, .content {
            width: 100%;
            margin: 0px auto;
            padding: 20px;
            border: 1px solid #b0c4de;
            background: white;
            border-radius: 0px 0px 10px 10px;
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

        
        .btn {
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #5f9ea0;
            border: none;
            border-radius: 5px;
            
        }
        .error {
            width: 92%;
            margin: 0px auto;
            padding: 10px;
            border: 1px solid #a94442;
            color:#a94442;
            background: #f2dede;
            border-radius: 5px;
            text-align: left;
        }
     </style>
    
    </head>
<body>
    
<div class="container" style="margin-top:30px">
  <div class="row" style="margin-bottom:15px;">
    <div class="col-sm-4">
      <h2>Other database</h2>
         <div class="form-group">
             <h5>My access database</h5>
             <button type="submit" name="#" class="btn btn-block"><a href="access.php" style="color: white;" alt="connection ms access" > Microsoft Office Access 2007 </a></button>  
            </div>
    
       <div class="form-group">
             <h5>Oracal database</h5>
                 <button type="submit" name="#" class="btn btn-block">Oracal database </button>  
            </div>
       
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Register to MS Access</h2>
<form  method="post" action="save.php">
    
          <div class="form-group">
    <label for="inputsm">Name</label>
  <input type="text" class="form-control input-sm" name="fname" >
    </div>
          <div class="form-group">
    <label for="inputsm">Lastname </label>
  <input type="text" class="form-control input-sm" name="lname" >
    
  </div>
           <div class="form-group">
    <label for="inputsm"> Address </label>
  <input type="text" class="form-control input-sm" name="address">
    
  </div>
          
                <div class="form-group">
    <label for="inputsm">contact</label>
        <input type="text" class="form-control input-sm" name="contact">
    
  </div>  
          <div class="form-group">
              <input type="submit" name="submit" class="btn btn-block" value="submit" >
  </div>
    
          
          
          
          
          
          
          
          <p>
    Go to <a href="register.php" >Back </a>
    </p></form>
      
    </div>
  </div>
</div>

    
    
    
    
    
    
    
     
  
<?php  require("footer.php");   ?>
  