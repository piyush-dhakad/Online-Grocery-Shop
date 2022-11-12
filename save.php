<?php
if(isset($_POST['submit']))
{
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $address=$_POST['address'];
 $contact=$_POST['contact'];

    
    
$con=odbc_connect("accessdb","","");
//$query ="insert into USER (`fname`,`lnam`,`address`,`contact`) values('".$fname."','".$lname."','".$address."','".$contact."')";
$query="insert into user (fname,lname,address,contact) values('".$fname."','".$lname."','".$address."','".$contact."')";
if(odbc_exec($con,$query)){

   //require("register.php"); 
	echo "ensert data ";
}
else
{
	
	echo "not ensert ";
	
}
}
?>ligupodrigpodripyidpofyhpoi