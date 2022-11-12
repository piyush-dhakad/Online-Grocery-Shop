<?php
session_start();
$errors = array();


//connectto database
$con = mysqli_connect('localhost','root','','online');
 
//if the registar button click
if (isset($_POST['register'])){
    //$code = $_SESSION['code'];
    
    
    
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
    
    if ($password1 != $password2){
    array_push($errors,"The confirm password is not match"); 
      }
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
    
    
}        header('location:register_connect.php');
//register_connect.php
?>