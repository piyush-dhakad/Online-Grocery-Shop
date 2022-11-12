
<?php
$con=mysqli_connect("localhost","root","","online")or die (mysqli_error());
  
$Name=$_POST["name"];
$file_name = $_FILES['image']['name'];
$temp_name = $_FILES['image']["tmp_name"];
$desc=$_POST["desc"];
$rs=$_POST["rs"];
$category=$_POST["category"];
$offer=$_POST["offer"];
$query ="insert into product (`name`,`image`,`desc`,`rs`,`category`,`offer`) values('".$Name."','".$file_name."','".$desc."','".$rs."','".$category."','".$offer."')";
//echo ("insert into homeimg (`name`,`image`,`desc`,`rs`) values('".$Name."','".$file_name."','".$desc."','".$rs."')");
$q=mysqli_query($con,$query);
if($q)
{
    $folder = "img/".$file_name;
move_uploaded_file($temp_name,$folder);


echo "data_insert";	
//	header("location:show.php");
}
else
{
//	echo "error";
header("location:admin_all_product_show.php");
}

 
?>

