
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
      <h1 class="mt-4 mb-3"><img src="img/gif2.gif" alt="g  if image" width="150px"/>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
 <div style=" background-color:white;  margin: 20px;
    padding: 40px;" class="col-lg-5">
          <p>Any queary please contact Piyush dhakad .</p>
          <p>This is a site of online shopping. customer can buy a product and item to online on this site  This site is developed by Piyush dhakad</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
        </div>

          <div style=" background-color:white;  margin: 20px;
    padding: 40px;" class="col-lg-5">
                      
                   <h3>Contact Details</h3>
          <h5>Piyush Dhakad</h5>
              <p>
            32, Ambaprasad tiwari marg
            <br>Nalya bhakal, Ujjain ( M.P.)
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: 456001
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">Piyushdhakad08@gmail.com
            </a>
          </p>
          <p>
            <abbr title="college">college</abbr>:Govt. Polytechnic college Ujjain
          </p> </div>
          
      </div>
        
      </div>
      <!-- /.row -->
      <!-- Our Customers -->      <!-- /.row -->

    </div>
<?php  require("footer.php");   ?>
