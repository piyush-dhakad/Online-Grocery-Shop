
<?php  require("header.php"); ?>
<?php include('server.php');?>
<?php 
if(!isset($_SESSION['username'])&& empty($_SESSION['username']))
{
  header("Location: index.php"); 
}
 //die;
echo $_SESSION['username'];
?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Electronic
        <small>products</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>
   
      <!-- /.row -->

     
        
         <?php 
          $category = "mens";
            $query=mysqli_query($con,"select * from product where category='".$category."'");
           while($S=mysqli_fetch_assoc($query))
             {
	         
              ?>
        
        <div class="row" style=" background-color:white;  margin: 20px;
    padding: 40px;">
   
        <div class="col-lg-3 col-sm-4 col-mb-2">
           
         <img class="img-fluid" src="<?php echo 'img/'.$S['image']; ?>" alt="">
        </div>
        <div class="col-sm-4 col-xs-8" >
 <h3 style="color:#878787;"><?php echo $S["name"]; ?></h3>
      
            
         
Nowadays the lingerie industry is one of the most successful business spheres. We always stay in touch with the latest fashion tendencies - that is why our goods are so popular..
            
    
            
            <h3 class="card-text" style="color:#93c295;" >&#36; &#9876; <?php echo $S["rs"]; ?></h3>
            
          
            </div>
            <div class="col-sm-4 col-xs-8" >
            <h3><b><?php echo $S["desc"]; ?></b></h3>
                
     <h4 ><a class="btn btn-primary" name="view" style=" width:100%; " href="show_items.php?id=<?php echo $S["id"]; ?>"  >View</a></h4>
                
                
            </div>
  
      
            </div>   <?php
                }
                  ?>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php  require("footer.php");   ?>
