<?php
$con=mysqli_connect("localhost","root","","online")or die (mysqli_error());
$id=$_GET["id"];
$query=mysqli_query($con,"Delete from users where id='".$id."'");
header("location:show_user.php");



?>