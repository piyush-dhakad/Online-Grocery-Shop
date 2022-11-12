
<?php  require("header.php");   ?>

<?php include('server.php');

?>
<?php
$postdata = $_POST;
$msg = '';
if (isset($postdata ['key'])) {
	$key				=   $postdata['key'];
	$salt				=  "QdzBPF3DnD"; // $postdata['salt'];
	$txnid 				= 	$postdata['txnid'];
    $amount      		= 	$postdata['amount'];
	$productInfo  		= 	$postdata['productinfo'];
	$firstname    		= 	$postdata['firstname'];
	$email        		=	$postdata['email'];
	$udf5				=   $postdata['udf5'];
	$mihpayid			=	$postdata['mihpayid'];
	$status				= 	$postdata['status'];
	$resphash				= 	$postdata['hash'];
	//Calculate response hash to verify	
	$keyString 	  		=  	$key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'|||||';
	$keyArray 	  		= 	explode("|",$keyString);
	$reverseKeyArray 	= 	array_reverse($keyArray);
	$reverseKeyString	=	implode("|",$reverseKeyArray);
	$CalcHashString 	= 	strtolower(hash('sha512', $salt.'|'.$status.'|'.$reverseKeyString));
	$username  = $_SESSION['username'];
    $password  = $_SESSION['password'];
	
	if ($status == 'success'  && $resphash == $CalcHashString) {
		$msg = "Transaction Successful...";
      $quepay = "insert into pay (`username`,`password`,`txnid`,`amount`,`proinfo`,`fname`,`email`,`mihpayid`,`transtatus`,`message`) values('".$username."','".$password."','".$txnid."','".$amount."','".$productInfo."','".$firstname."','".$email."','".$mihpayid."','".$status."','".$msg."')";
      mysqli_query($con,$quepay);
      
        //yha pr order id ki detail ko update krege
        $queupdate = "UPDATE users SET 	orderid ='$txnid' WHERE username = '$username' or password = '$password' ";
                    
	   mysqli_query($con,$queupdate);
     
            //Do success order processing here...
	}
	else {
		//tampered or failed
		$msg = "Payment failed";
	} 
}
else exit(0);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PayUmoney BOLT PHP7 Kit</title>
</head>
<style type="text/css">
	.main {
		margin-left:30px;
		font-family:Verdana, Geneva, sans-serif, serif;
	}
	.text {
		float:left;
		width:180px;
	}
	.dv {
		margin-bottom:5px;
	}
</style>
<body>
<div class="main">
<div>
    	<h3 align="center"><?php echo $msg; ?></h3>
    </div>
    <div class="row"  style=" background-color:white;  margin: 20px;
    padding: 40px;">
	<table class="table" align="center">
        <tr>
            <th>Transaction/Order ID:</th>
            <td><?php echo $txnid; ?></td>
        </tr>
        <tr>
        <th>Amount:</th>
            <td><?php echo $amount; ?></td>
        </tr>
        <tr>
            <th>Product Info:</th>
            <td><?php echo $productInfo; ?></td>
        </tr>
    <tr>
<th>First Name:</th>
<td><?php echo $firstname; ?></td>
        <tr>
            <th>Email ID:</th>
            <td><?php echo $email; ?></td>
        </tr>
     <tr>
         <th>Mihpayid:</th>
    <td><?php echo $mihpayid; ?></td>
        </tr>
            <tr>
        <th>Transaction Status:</th>
        <td><?php echo $status; ?></td>
        </tr>
        <tr>
            <th>Message:</th>
            <td><?php echo $msg; ?></td>
        </tr>
        
        <tr>
             
            <td rowspan="2">
        <a class="btn btn-primary" style=" width:100%; "  href="home.php" >Thanktoyou....</a></td>
        </tr>
    </table>
    </div>
</div>
  
<?php  require("footer.php");   ?>
	