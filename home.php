
<?php  require("header.php");   ?>
<?php include('server.php');?>
<?php 
if(!isset($_SESSION['username'])&& empty($_SESSION['username']))
{
  header("Location: index.php"); 
}
 //die;
?>
  <?php if (isset($_SESSION['success'])):?>
        <div class="error success">
  
            <h3>
            <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
            </h3>
        </div>
      

    <?php endif ?>
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
<!-- Page Content -->
    <div class="container">
 
      <!-- Portfolio Section -->
      <h2>Products</h2>
              
    
      <div class="row">
           
          <?php 
          $offer = "1";
            $query=mysqli_query($con,"select * from product where offer='".$offer."'");
           while($S=mysqli_fetch_assoc($query))
             {
	
              ?>
         
        <div class="col-lg-3 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo 'img/'.$S['image']; ?> " alt=""></a>
            <div class="card-body">
              <p><?php echo $S["name"]; ?></p>               
                <h4 class="card-title"> 
                    <a class="btn btn-primary" name="view" style=" width:100%; " href="show_items.php?id=<?php echo $S["id"]; ?>"  >View</a>
              </h4>
                <b><?php echo $S["desc"]; ?></b>
              <p class="card-text" style="color:#93c295;" >&#36; &#9876; <?php echo $S["rs"]; ?></p>
            </div>
          </div>
        </div>


                  <?php
                  
                  }
                  ?>
         
  
         
          
       
        </div>
        <!--      <div class="row">
                  
          <?php 
            //$query=mysqli_query($con,"select * from homeimg");
            // while($S=mysqli_fetch_assoc($query))
             //{
	
              ?>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </div>
                  <?php
                  
               //   }
                  ?>
     
      </div> -->
      </div>
      <!-- /.row -->


      <!-- /.row -->

<?php  require("footer.php");   ?>