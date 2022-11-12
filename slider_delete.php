<?php
$con=mysqli_connect("localhost","root","","online")or die (mysqli_error());
$id=$_GET["id"];
$query=mysqli_query($con,"Delete from slider where id='".$id."'");
header("location:slider_detals.php");



?>