<?php  require("adminheader.php"); ?>
    
        
        <?php
$con=mysqli_connect("localhost","root","","online")or die(mysqli_error());
$query=mysqli_query($con,"select * from users");

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
$i=1;
while($S=mysqli_fetch_assoc($query))
{
	
 ?>
<tr align="center">
<td><?php echo $i ; ?></td>
<td><?php echo $S["username"]; ?></td>
<td><?php echo $S["email"]; ?></td>
<td><?php echo $S["mobile"]; ?></td>
<td><a href="show_user_detailsorUpdate.php?id=<?php echo $S["id"]; ?>" onclick="return confirm('Are you want to show');">Show</a>
<a href="delete_product.php?id=<?php echo $S["id"]; ?>" onclick="return confirm('Are you want to Delete');">Delete</a>
<a href="update.php?id=<?php echo $S["id"]; ?>" onclick="return confirm('Are you want to update');">Update</a>
 </td>
    
</tr>



<?php
$i++;
}
?>
</table>
<br>


        
        
        
        
    </div>
</div>
<?php  require("footer.php");   ?>