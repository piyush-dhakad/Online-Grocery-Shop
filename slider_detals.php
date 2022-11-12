<?php  require("adminheader.php"); ?>
    
        
   <style>
 form, .content {
            width: 100%;
            margin: 0px auto;
            padding: 20px;
            border: 1px solid #b0c4de;
            background: white;
            border-radius: 10px 10px 10px 10px;
        }
          .content2 {
            width: 100%;
            margin: 0px auto;
           color: white; 
            background:#343a40 ;
        }
</style>
 <header>
        
      <div id="carouselExampleIndicators" class="carousel slide size" data-ride="carousel">
        
        <div class="carousel-inner size" role="listbox">
    
         
            <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active size" style="background-image: url('img/slider/banner1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Fashion shop</h3>
              <p>Buy a great deals .</p>
            </div>
          </div> 
                <?php 
            $slid=mysqli_query($con,"select * from slider");
               
            while($Sl=mysqli_fetch_assoc($slid)  )
                {
	           ?>
             
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item size" style="background-image: url('<?php echo 'img/slider/'.$Sl['image']; ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3><?php echo $Sl['name']; ?></h3>
              <p><?php echo $Sl['desc']; ?></p>
            </div>
          </div>   <?php
                  }
                  ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="content" style="background-color: #fff;">          
<h3>Update slider</h3>
          <form  method="post" action="slider_img_insert_connect.php" enctype="multipart/form-data">
            <br>
            <label>Name:</label> <br>
            <input type="text" name="name"class="form-control input-sm"> <br>
                <label>photo:</label> <br>
                <input type="file"  name="image"class="form-control input-sm"> <br>
                <label>description:</label> <br>
                <textarea name="desc" rows="10" cols="100"  maxlength="999" style="resize:none"></textarea> <br>
               <br>
              
              <!-- For success/fail messages -->
              <button type="submit" name="submit" style="color: white;" class="btn btn-block"> Product Show </button>         
          </form>
    </div>
 
        <?php
$con=mysqli_connect("localhost","root","","online")or die(mysqli_error());
$query=mysqli_query($con,"select * from slider");

?>
 <div class="row">
    
        
    
<table class="table" align="center" style="background-color: #fff;" border="2px solid red">
<tr  align="center">
<th>No.</th>
<th>Name</th>
<th>Image</th>
<th>desc</th>
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
<td><img style="width:200px;" src="<?php echo 'img/slider/'.$S['image']; ?>" alt="product image"/></td>
<td><?php echo $S["desc"]; ?></td>
<td><a href="Show_1.php?id=<?php echo $S["id"]; ?>" onclick="return confirm('Are you want to show');">Show</a>
<a href="slider_delete.php?id=<?php echo $S["id"]; ?>" onclick="return confirm('Are you want to Delete');">Delete</a>
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


<?php  require("footer.php");   ?>