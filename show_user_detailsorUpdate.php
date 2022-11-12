<?php  require("adminheader.php"); ?>
    
        
        <?php
$con=mysqli_connect("localhost","root","","online")or die(mysqli_error());
$id=$_GET["id"];
$query=mysqli_query($con,"select * from users where id='".$id."'");
     
?>
<div class="container" style="margin-top:30px">
    <div class="row">
    
        
    
<table class="table" align="center" style="background-color: #fff;" border="2px solid red">
<tr  align="center">
<th>No.</th>
<th>Username</th>
<th>Email</th>
<th>Mobile</th>
 
    <th>Choice</th>

</tr>
<?php 
$S=mysqli_fetch_assoc($query)
	
 ?>
<tr align="center">
<td><?php echo $S["username"]; ?></td>
<td><?php echo $S["email"]; ?></td>
<td><?php echo $S["mobile"]; ?></td>
<td><a href="Show_1.php?id=<?php echo $S["id"]; ?>" onclick="return confirm('Are you want to show');">Show</a>
<a href="delete_product.php?id=<?php echo $S["id"]; ?>" onclick="return confirm('Are you want to Delete');">Delete</a>
<a href="update.php?id=<?php echo $S["id"]; ?>" onclick="return confirm('Are you want to update');">Update</a>
 </td>
    
</tr>


</table>
<br>

            <form method="post"  action="#"  enctype="multipart/form-data" class="form-horizontal" role="form">
    
      <h2>User Profile</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">UserName*</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="First Name" required name="username" value="<?php echo $S["username"]; ?>" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" required placeholder="Email" name="email" value="<?php echo $email; ?>"  class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" required id="password" placeholder="Password" name="password1" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" required id="password" placeholder="Password" name="password2" class="form-control">
                    </div>
                </div></form>

        
        
        
        
    </div>
</div>
<?php  require("footer.php");   ?>