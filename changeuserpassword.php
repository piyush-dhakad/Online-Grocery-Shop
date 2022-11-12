changeuserpassword.php
<?php  require("header.php");   ?>
<?php include('server.php');?>


<style>
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

<?php 
if(!isset($_SESSION['username'])&& empty($_SESSION['username']))
{
  header("Location:index.php"); 
}
?>
<?php if (isset($_SESSION['successpassword'])):?>
        <div class="error success">
  
            <h3>
            <?php 
            echo $_SESSION['successpassword'];
            unset($_SESSION['successpassword']);
            ?>
            </h3>
        </div>
      

    <?php endif 
?>

    
<form  method="post" action="changeuserpassword.php">
                   <?php include('errors.php');?>
    
          <div class="form-group">
    <label for="inputsm">New Password</label>
  <input type="text" class="form-control input-sm" name="password1" >
    </div>
          <div class="form-group">
    <label for="inputsm">Confirm Password </label>
  <input type="text" class="form-control input-sm" name="password2" >
    
  </div>  
          <div class="form-group">
              <input type="submit" name="changepassword" class="btn btn-block" value="Change Password" >
  </div>
    
          <p>
    Go to <a href="profile.php" >Back </a>
    </p></form>
      

<?php  require("footer.php");   ?>
  