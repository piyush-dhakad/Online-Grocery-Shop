<?php 

//connectto database
$con = mysqli_connect('localhost','root','','online');
 
session_start();
if (isset($_POST['adminlogin'])) {
    
    
    $username = mysqli_real_escape_string($con, $_POST['username']);  //mysql_real_escape_string($_POST['username']);
     $password = mysqli_real_escape_string($con, $_POST['password']); // mysql_real_escape_string($_POST['password']);
                                           
    $query = "SELECT * FROM admin WHERE username ='".$username."' AND password	='".$password."'";
        
          $q=mysqli_query($con,$query);
         if($q)
         {

          $_SESSION['username'] = $username;
           header('location:admin.php');
            
            
        } 
        else{
            
              header('location:admine_login.php');
          
        }
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
          header('location:admine_login.php');
         
}


?>