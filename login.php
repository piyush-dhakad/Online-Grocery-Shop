<?php  require("fheader.php");   ?>

<?php include('server.php');?>
    <style>
        form, .content {
            width: 100%;
            margin: 0px auto;
            padding: 20px;
            border: 1px solid #b0c4de;
            background: white;
            border-radius: 0px 0px 10px 10px;
        }
          .content2 {
            width: 100%;
            margin: 0px auto;
           color: white; 
            background:#343a40 ;
        }
          .success{
            color: #3c763d;
            background: #dff0d8;
            border: 1px solid #3c763d;
        
            
        }
          .size {

                  height:300px;

                }

        .btn {
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #5f9ea0;
            border: none;
            border-radius: 5px;
            
        }
        .error {
            width: 92%;
            margin: 0px auto;
            padding: 10px;
            border: 1px solid #a94442;
            color:#a94442;
            background: #f2dede;
            border-radius: 5px;
            text-align: left;
        }
     </style>
 
<div class="container" style="margin-top:30px">
  <div class="row" style="margin-bottom:15px;">
    <div class="col-sm-4">
      <h2>Other database</h2>
         <div class="form-group">
             <h5>My access database</h5>
             <button type="submit" name="#" class="btn btn-block"><a href="access.php" style="color: white;" alt="connection ms access" > Microsoft Office Access 2007 </a></button>  
            </div>
    
       <div class="form-group">
             <h5>Oracal database</h5>
                 <button type="submit" name="#" class="btn btn-block">Oracal database </button>  
            </div>
       
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-6">
      <h2>Login</h2>
     <form class="form-horizontal" method="post" action="login.php">   <?php include('errors.php');?>
       
          <div class="form-group">
    <label for="inputsm">Username</label>
              <input type="text" class="form-control input-sm"  placeholder="Username" name="username">
  </div>
          
               
          <div class="form-group">
    <label for="inputsm">Password:</label>
          <input type="password" class="form-control input-sm" placeholder="Enter password" name="password">
    
  </div>
         
          
          <div class="form-group">
    <button type="submit" name="login" class="btn btn-block">Login</button>
  </div>
    
          
          <p>Not registered?  <a href="register.php">Create an account</a></p>
           <p>Forget  <a href="changepassword/changepassword.php">Password!!!</a></p>
         
          
          
          </form>
      
    </div>
  </div>
</div>

    
    
    
    
    
    
    
    
    
  
<?php  require("footer.php");   ?>