<?php
$con=mysqli_connect("localhost","root","","online")or die (mysqli_error());

$Name=$_POST["name"];
$file_name = $_FILES['image']['name'];
$temp_name = $_FILES['image']["tmp_name"];
$desc=$_POST["desc"];
$query ="insert into slider (`name`,`image`,`desc`) values('".$Name."','".$file_name."','".$desc."')";
//echo ("insert into homeimg (`name`,`image`,`desc`,`rs`) values('".$Name."','".$file_name."','".$desc."','".$rs."')");
$q=mysqli_query($con,$query);
if($q)
{
    $folder = "img/slider/".$file_name;
move_uploaded_file($temp_name,$folder);


//echo "data_insert";	
	header("location:slider_detals.php");
}
else
{
    header("location:slider_detals.php");
	//echo "error";
}


?>
