
<?php include('server.php');?>
<?php 
if(!isset($_SESSION['username'])&& empty($_SESSION['username']))
{
  header("Location: index.php"); 
}
 //die;
echo $_SESSION['username'];
?>
<link href="style1.css" type="text/css" rel="stylesheet" />
<body>
	<div class="contain">
		<div class="error"></div>
		<form id="frm-mobile-verification">
			<div class="form-heading">Mobile Number Verification</div>

			<div class="form-row">
				<input type="number" id="mobile" class="form-input"
					placeholder="Enter the 10 digit mobile">
			</div>
			<input type="button" class="btnSubmit" value="Send OTP"
				onClick="sendOTP();">
		</form>
	</div>
	<script src="changepassword/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="changepassword/verification.js"></script>
</body>
