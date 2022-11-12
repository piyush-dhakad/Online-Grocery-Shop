
      
<?php

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0){
	//Request hash
	$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';	
	if(strcasecmp($contentType, 'application/json') == 0){
		$data = json_decode(file_get_contents('php://input'));
		$hash=hash('sha512', $data->key.'|'.$data->txnid.'|'.$data->amount.'|'.$data->pinfo.'|'.$data->fname.'|'.$data->email.'|||||'.$data->udf5.'||||||'.$data->salt);
		$json=array();
		$json['success'] = $hash;
    	echo json_encode($json);
	
	}
	exit(0);
}
 
function getCallbackUrl()
{
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	return 'http://localhost/project/new/response.php';
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PayUmoney BOLT PHP7 Kit</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!-- this meta viewport is required for BOLT //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
<!-- BOLT Sandbox/test //-->
<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
<!-- BOLT Production/Live //-->
<!--// script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script //-->

    
    
  <!-- Bootstrap core CSS -->
 <link href="startbootstrap-modern-business-gh-pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="startbootstrap-modern-business-gh-pages/css/modern-business.css" rel="stylesheet">
<link rel="shortcut icon" href="assets/ico/favicon.ico">

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

<?php
$con=mysqli_connect("localhost","root","","online")or die(mysqli_error());

 

include('server.php');

$name = $_SESSION['username'];
$password = $_SESSION['password'] ;             

$query=mysqli_query($con,"select * from users where username='".$name."' and password='".$password."'");
$S=mysqli_fetch_assoc($query);
  
$id=$_GET["id"];
$qu=mysqli_query($con,"select * from product where id='".$id."'");
$p=mysqli_fetch_assoc($qu);

 
?>
        

  <body background="img/bag.png">

    <!-- Navigation -->
    <nav  class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary fixed-top">
        
      <div class="container">
        <a class="navbar-brand" href="home.php">Fashion Shop</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
     <a class="dropdown-item" href="home.php?logout='1'">Logout</a>
            </li>
            </ul>
        </div>
      </div>
    </nav>

      <div style=" background-color:white;  margin: 20px;
    padding: 40px;" class="row">
                         <h1 style="color:white; background:#007bff;">&ensp; ORDER SUMMARY &ensp;</h1>
 <div class="row" style=" background-color:white;  margin: 20px;
    padding: 40px;">
        <div class="col-lg-3 col-sm-6 col-mb-4">
           
         <img class="img-fluid" src="<?php echo 'img/'.$p['image']; ?>" alt="">
        </div>
        <div class="col-sm-6 col-xs-8" >
 <h3 style="color:#878787;"><?php echo $p["name"]; ?></h3>
      
            <h3><?php echo $p["desc"]; ?></h3>
            <img src="img/str.jpg" width="40%" alt="star"/>

            
            <h3 class="card-text" style="color:#93c295;" >&#36; &#9876; <?php echo $p["rs"]; ?></h3>
            
          
            </div>
            <div class="col-sm-4 col-xs-8" >
                
                 
                
            </div>
  
      
            </div>
           </div>
   
 <div class="row" style=" background-color:white;  margin: 20px;
    padding: 40px;">
 <form action="#" id="payment_form">
    <input type="hidden" id="udf5" name="udf5" value="BOLT_KIT_PHP7" />
    <input type="hidden" id="surl" name="surl" value="<?php echo getCallbackUrl(); ?>" />
    <div class="dv">

    <!--<span class="text"><label>Merchant Key:</label></span>-->
    <span><input type="hidden" id="key" name="key" placeholder="Merchant Key" value="ZqjpLC08" /></span>
    </div>
    <br>
    <div class="dv">
    <!-- <span class="text"><label>Merchant Salt:</label></span>-->
    <span><input type="hidden" id="salt" name="salt" placeholder="Merchant Salt" value="QdzBPF3DnD" /></span>
    </div>
    <br>
    <div class="dv">
    <!--<span class="text"><label>Transaction/Order ID:</label></span>-->
    <span><input type="hidden" id="txnid" name="txnid" placeholder="Transaction ID" value="<?php echo  "Txn" . rand(10000,99999999)?>" /></span>
    </div>
    <br>
    <div class="dv">
    <span class="text"><label>Amount:</label></span>
        
    <span><?php echo $p["rs"]; ?>/-<input type="hidden" id="amount" name="amount" placeholder="Amount" value="<?php echo $p["rs"]; ?>" /></span>    
    </div>
    <br>
    <div class="dv">
    <span class="text"><label>Product Info:</label></span>
    <span><?php echo $p["desc"]; ?><input type="hidden" id="pinfo" name="pinfo" placeholder="Product Info" value="<?php echo $p["desc"]; ?>" /></span>
    </div>
    <br>
    <div class="dv">
    <span class="text"><label>First Name:</label></span>
    <span><input type="text" id="fname" name="fname" placeholder="First Name" value="" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Email ID:</label></span>
    <span><input type="text" id="email" name="email" placeholder="Email ID" value="" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Mobile/Cell Number:</label></span>
    <span><input type="text" id="mobile" name="mobile" placeholder="Mobile/Cell Number" value="" /></span>
    </div>
    <div class="dv">
    <span class="text"><label>Address:</label></span>
    <span><input type="text" id="addess" name="address" placeholder="Address" value="" /></span>
    </div>
    
    <div class="dv">
<!--    <span class="text"><label>Hash:</label></span>-->
    <span><input type="hidden" id="hash" name="hash" placeholder="Hash" value="" /></span>
    </div>
    
    
    <div><input type="submit" class="btn btn-primary" style="width:80%" value="Pay" onclick="launchBOLT(); return false;" /></div>
	</form>
          </div>

<script type="text/javascript"><!--
$('#payment_form').bind('keyup blur', function(){
	$.ajax({
          url: 'payu.php',
          type: 'post',
          data: JSON.stringify({ 
            key: $('#key').val(),
			salt: $('#salt').val(),
			txnid: $('#txnid').val(),
			amount: $('#amount').val(),
		    pinfo: $('#pinfo').val(),
            fname: $('#fname').val(),
			email: $('#email').val(),
			mobile: $('#mobile').val(),
			udf5: $('#udf5').val()
          }),
		  contentType: "application/json",
          dataType: 'json',
          success: function(json) {
            if (json['error']) {
			 $('#alertinfo').html('<i class="fa fa-info-circle"></i>'+json['error']);
            }
			else if (json['success']) {	
				$('#hash').val(json['success']);
            }
          }
        }); 
});
//-->
</script>
<script type="text/javascript"><!--
function launchBOLT()
{
	bolt.launch({
	key: $('#key').val(),
    salt: $('#salt').val(),
	txnid: $('#txnid').val(), 
	hash: $('#hash').val(),
	amount: $('#amount').val(),
	firstname: $('#fname').val(),
	email: $('#email').val(),
	phone: $('#mobile').val(),
	productinfo: $('#pinfo').val(),
	udf5: $('#udf5').val(),
	surl : $('#surl').val(),
	furl: $('#surl').val(),
	mode: 'dropout'	
},{ responseHandler: function(BOLT){
	console.log( BOLT.response.txnStatus );		
	if(BOLT.response.txnStatus != 'CANCEL')
	{
		//Salt is passd here for demo purpose only. For practical use keep salt at server side only.
		var fr = '<form action=\"'+$('#surl').val()+'\" method=\"post\">' +
		'<input type=\"hidden\" name=\"key\" value=\"'+BOLT.response.key+'\" />' +
		'<input type=\"hidden\" name=\"salt\" value=\"'+$('#salt').val()+'\" />' +
		'<input type=\"hidden\" name=\"txnid\" value=\"'+BOLT.response.txnid+'\" />' +
		'<input type=\"hidden\" name=\"amount\" value=\"'+BOLT.response.amount+'\" />' +
		'<input type=\"hidden\" name=\"productinfo\" value=\"'+BOLT.response.productinfo+'\" />' +
		'<input type=\"hidden\" name=\"firstname\" value=\"'+BOLT.response.firstname+'\" />' +
		'<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +
		'<input type=\"hidden\" name=\"udf5\" value=\"'+BOLT.response.udf5+'\" />' +
		'<input type=\"hidden\" name=\"mihpayid\" value=\"'+BOLT.response.mihpayid+'\" />' +
		'<input type=\"hidden\" name=\"status\" value=\"'+BOLT.response.status+'\" />' +
		'<input type=\"hidden\" name=\"hash\" value=\"'+BOLT.response.hash+'\" />' +
		'</form>';
		var form = jQuery(fr);
		jQuery('body').append(form);								
		form.submit();
	}
},
	catchException: function(BOLT){
 		alert( BOLT.message );
	}
});
}
//--
</script>	

</body>
</html>
	
