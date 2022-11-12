
<?php  require("header.php");   ?>

<?php include('server.php');

echo $_SESSION['username'];
echo $_SESSION['password'] ;
 ?>
<?php 
if(!isset($_SESSION['username'])&& empty($_SESSION['username']))
{
  header("Location: index.php"); 
}
       
?>

    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">About
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="home.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-5" >
            
<?php 
$id=$_GET["id"];
$query=mysqli_query($con,"select * from product where id='".$id."'");
$S=mysqli_fetch_assoc($query);
      ?>      
            
          <img class="img-fluid rounded mb-4" src="<?php echo 'img/'.$S['image']; ?>" alt="">
        </div>
        <div class="col-lg-5">
         
  <table class="table ">
 
      <tr>
             <td class="table-info	"><h3 style="color:#878787;"><?php echo $S["name"]; ?></h3></td>
      </tr>
       
      <tr>
        <td class="table-danger"><h3><b><?php echo $S["desc"]; ?></b></h3></td>
         
      </tr>
            <tr>
        <td class="table-success"><h3><img src="img/tag.png">Special PriceGet extra 10% off (price inclusive of discount)T&C</h3></td>
      </tr>
      <tr>
        <td class="table-primary"><h3><img src="img/tag.png">   Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C
</h3></td>
      </tr>
      <tr>
        <td class="table-danger" ><h3 class="card-text" style="color:#93c295;" >&#36; &#9876; <?php echo $S["rs"]; ?></h3></td>
      </tr>

      <tr >
        <td class="table-warning" > 
            <h4 > 
 <a class="btn btn-primary" style=" width:100%; "  href="payu.php?id=<?php echo $S["id"]; ?>" >Buy now</a>
              </h4></td>
      </tr>

  </table>
            
            
        </div>
      </div>
      <!-- /.row -->
     </div>
    <!-- /.container -->

  
<?php  require("footer.php");   ?>