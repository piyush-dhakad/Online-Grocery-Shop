<?php  require("header.php");   ?>
<?php include('server.php');?>

<?php 
if(!isset($_SESSION['username'])&& empty($_SESSION['username']))
{
  header("Location:index.php"); 
}

?>
 

<!------ Include the above in your HEAD tag ---------->
<body>

<div style="margin-top:30px">
  <div class="row" style="margin-bottom:15px;">
    <div class="col-sm-4">
         <div class="row"  style=" background-color:white;  margin: 20px;
    padding: 40px;">
	<table class="table" align="center">
        <tr>
            <th>  <button  class="btn btn-success btn-block" id="button">Button</button>
            </th>
        </tr>
        <tr>
            <th>  <button  class="btn btn-success btn-block" id="button">Button</button>
            </th>
        </tr>
        <tr>
            <th>  <button  class="btn btn-success btn-block" id="button">Button</button>
            </th>
        </tr>
        <tr>
            <th>  <button  class="btn btn-success btn-block" id="button">Button</button>
            </th>
        </tr>
             </table>
        </div>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
               
<?php 
$name = $_SESSION['username'];
$password = $_SESSION['password'] ;             

$query=mysqli_query($con,"select * from users where username='".$name."' and password='".$password."'");
$S=mysqli_fetch_assoc($query);

      ?>      
     
   <table style=" background-color:white;  margin: 20px;
    padding: 40px;" class="table" align="center">
          <tr>
              <th><img style="width:200px;" src="<?php echo 'upload/'.$S['cameraimage']; ?>" alt="user Photo"/></th>
            <td><img style="width:200px;" src="<?php echo 'uploadimage/'.$S['uploadimage']; ?>" alt="user adhar card photo"/></td>
        </tr>
       <tr>
            <th>Name*</th>
            <td><?php echo $S['username']; ?></td>
        </tr>
        <tr>
        <th>Email*</th>
            <td><?php echo $S['email']; ?></td>
        </tr>
       <tr>
            <th>Password*</th>
            <td>****** &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style="width:50%; color:white;"  class="btn btn-success " href="changepassword/index.php" id="button">Change Password</a></td>
        </tr>
        <tr>
        <th>Mobile Number*</th>
            <td><?php echo $S['mobile']; ?></td>
        </tr>
       <tr>
            <th>Date Of Birth*</th>
            <td><?php echo $S['dob']; ?></td>
        </tr>
        <tr>
        <th>Gender*</th>
            <td><?php echo $S['gender']; ?></td>
        </tr>
       <tr>
            <th>City*</th>
            <td><?php echo $S['city']; ?></td>
        </tr>
        <tr>
        <th>State*</th>
            <td><?php echo $S['state']; ?></td>
        </tr>
       <tr>
            <th>Pin code*</th>
            <td><?php echo $S['pincode']; ?></td>
        </tr>
        <tr>
        <th>Address*</th>
            <td><?php echo $S['address']; ?></td>
        </tr>
       <tr>
            <th>Order Id*</th>
            <td><?php echo $S['orderid']; ?></td>
        </tr>
       
      </table>
        
 
    </div>
  </div>
</div>

    
    
    
    
    
    
    
     
  
<?php  require("footer.php");   ?>
  