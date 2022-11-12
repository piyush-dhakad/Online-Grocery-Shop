<?php  require("adminheader.php"); ?>
    
        
        <?php
$con=mysqli_connect("localhost","root","","online")or die(mysqli_error());
$id=$_GET["id"];
$query=mysqli_query($con,"select * from product where id='".$id."'");
     
?>
<div class="container" style="margin-top:30px">
  <div class="row">
      <button  style="  background: #5f9ea0;"><a style="color: white;" href="admin_all_product_show.php" >back</a></button>
  </div>
    <div class="row">
    
        
    
<table class="table" align="center" style="background-color: #fff;" border="2px solid red">
<tr  align="center">
<th>Name</th>
<th>Image</th>
<th>rs</th>
<th>Category</th>
    <th>Detail</th>

</tr>
<?php 
$S=mysqli_fetch_assoc($query);

	
 ?>
<tr align="center">
<td><?php echo $S["name"]; ?></td>
<td><img style="width:200px;" src="<?php echo 'img/'.$S['image']; ?>" alt="product image"/></td>
<td><?php echo $S["rs"]; ?></td>
<td><?php echo $S["category"]; ?></td>
<td><?php echo $S["desc"]; ?></td>
    
</tr>



</table>
<br>


        
        
        
        
    </div>
</div>
<?php  require("footer.php");   ?>