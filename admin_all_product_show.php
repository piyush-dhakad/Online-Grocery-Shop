<?php  require("adminheader.php"); ?>
    
        
        <?php
$con=mysqli_connect("localhost","root","","online")or die(mysqli_error());

$query=mysqli_query($con,"select * from product");

?>
<div class="container" style="margin-top:30px">
  <div class="row">
      <button  style="  background: #5f9ea0;"><a style="color: white;" href="add_new_product.php" >Add Product</a></button>
  </div>
    <div class="row">
    
        
    
<table class="table" align="center" style="background-color: #fff;" border="2px solid red">
<tr  align="center">
<th>No.</th>
<th>Name</th>
<th>Image</th>
<th>rs</th>
<th>Category</th>
    <th>Choice</th>

</tr>
<?php 
$i=1;
while($S=mysqli_fetch_assoc($query))
{
	
 ?>
<tr align="center">
<td><?php echo $i ; ?></td>
<td><?php echo $S["name"]; ?></td>
<td><img style="width:200px;" src="<?php echo 'img/'.$S['image']; ?>" alt="product image"/></td>
<td><?php echo $S["rs"]; ?></td>
<td><?php echo $S["category"]; ?></td>
<td><a href="show_product_detail.php?id=<?php echo $S["id"]; ?>" onclick="return confirm('Are you want to show');">Show</a>
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