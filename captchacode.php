<?php
session_start();
$a="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
$str=str_shuffle($a);
$str=substr($str,0,6);


/*
$str="";
for($i=1;$i<=6;$i++)
{
   $str=$str.substr($a,rand(0,61),1);    
}
*/
$img=imagecreate(150,40);
$_SESSION['code'] = $str;
imagecolorallocate($img,205,205,205);
//$color=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
$color=imagecolorallocate($img,0,0,0);

imagettftext($img,20,0,20,30,$color,'ARLRDBD.ttf',$str);


header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);

?>