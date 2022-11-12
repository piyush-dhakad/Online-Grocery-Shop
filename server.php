<?php
session_start();
$username = "";
$email = "";
$mobile = "";
$errors = array();


//connectto database
$con = mysqli_connect('localhost','root','','online');
 
//if the registar button click
if (isset($_POST['changepassword'])){
    $password1 = mysqli_real_escape_string($con, $_POST['password1']);  //mysql_real_escape_string($_POST['password1']);
    $password2 = mysqli_real_escape_string($con, $_POST['password2']);
    $username  = $_SESSION['username'];
    $password  = $_SESSION['password'];
	
    if ($password1 != $password2){
    array_push($errors,"The confirm password is not match"); 
      }
else{
      if (count($errors) == 0) {
        $password = md5($password1);
      $_SESSION['password'] = $password;
      $change = "UPDATE users SET password = '$password' WHERE username = '$username' or password = '$password' ";
                    
	   mysqli_query($con,$change); 
        $_SESSION['successpassword'] = "Password Sucess full Change"; 
    //    header('location:home.php');
    }
    }
}
    //$code = $_SESSION['code'];
if (isset($_POST['register'])){
    
    
    
    $username = mysqli_real_escape_string($con, $_POST['username']); // mysql_real_escape_string($_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']); //mysql_real_escape_string($_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);  //mysql_real_escape_string($_POST['mobile']);
    $password1 = mysqli_real_escape_string($con, $_POST['password1']);  //mysql_real_escape_string($_POST['password1']);
    $password2 = mysqli_real_escape_string($con, $_POST['password2']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $uploadimagename = mysqli_real_escape_string($con, $_FILES['uploadimage']['name']);
    $uploadimagetemp_name = mysqli_real_escape_string($con, $_FILES['uploadimage']["tmp_name"]);
    $order = '0';
    //mysql_real_escape_string($_POST['password2']);
    //$cap = mysqli_real_escape_string($con, $_POST['cap']); // mysql_real_escape_string($_POST['cap']);
    
    if (empty($username)){
        
        array_push($errors,"User name is required"); 
    }
        if (empty($email)){
        array_push($errors,"Email name is required"); 
    }
    if (empty($mobile)){
        array_push($errors,"mobile number is required"); 
    }
        if (empty($password1)){
        array_push($errors,"Password name is required"); 
    }
   // if (empty($cap)){
       //   array_push($errors,"Please fell the captcha code");   //}
    if ($password1 != $password2){
    array_push($errors,"The confirm password is not match"); 
      }
    // if($code != $cap)
    //{
    //     array_push($errors,"The captcha code is not valid");  }
    else{
      if (count($errors) == 0) {
          //yha pr uploade image ka code he
          $folder = "uploadimage/".basename($uploadimagename);
           //  $folder = "uploadimage/".$uploadimagename;
            move_uploaded_file($_FILES['uploadimage']["tmp_name"], $folder);
//         move_uploaded_file($uploadimagetemp_name,$folder);
// yha pr  camera ka code he
        $password = md5($password1);
            $img = $_POST['image'];
    $folderPath = "upload/";
      $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
      $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.png';
      $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
      //print_r($fileName);
        $sql = "insert into users (`username`,`email`,`mobile`,`password`,`dob`,`gender`,`city`,`state`,`pincode`,`address`,`uploadimage`,`cameraimage`,`orderid`) values('".$username."','".$email."','".$mobile."','".$password."','".$dob."','".$gender."','".$city."','".$state."','".$pincode."','".$address."','".$uploadimagename."','".$fileName."','".$order."')";
      mysqli_query($con,$sql);
        $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
        $_SESSION['success'] = "you are now loged in"; 
        header('location:home.php');
    }
    }
    
    
}
//log user in form login pag
if (isset($_POST['login'])) {
    
    
    $username = mysqli_real_escape_string($con, $_POST['username']); // mysql_real_escape_string($_POST['username']);
                 
    $password = mysqli_real_escape_string($con, $_POST['password']); //mysql_real_escape_string($_POST['password']);
             
    if (empty($username)){
        
        array_push($errors,"User name is required"); 
    }
        if (empty($password)){
        
        array_push($errors,"Password name is required"); 
    }
    
    if (count($errors) == 0 ){
        
        $password = md5($password);
    $query = "SELECT * FROM users WHERE username ='".$username."' AND password	='".$password."'";
        
        $r = mysqli_query($con,$query);
        if (mysqli_num_rows($r) == 1) {
          $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
         $_SESSION['success'] = "Now you are loged in"; 
        header('location:home.php');
            
            
        } 
        else{
            
            array_push($errors, "Wrong username/password"); 
        }
    }
     
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php'); 
    
}
