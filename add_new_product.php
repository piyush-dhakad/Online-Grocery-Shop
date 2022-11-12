<?php  require("adminheader.php"); ?>
    
        
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
</style>

      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="content" style="background-color: #fff;">          
<h3>Add New Product</h3>
          <form  method="post" action="product_insert_connect.php" enctype="multipart/form-data">
            <br>
            <label>Full Name:</label> <br>
            <input type="text" name="name"class="form-control input-sm"> <br>
                <label>photo:</label> <br>
                <input type="file"  name="image"class="form-control input-sm"> <br>
                <label>description:</label> <br>
                <textarea name="desc" rows="10" cols="100"  maxlength="999" style="resize:none"></textarea> <br>
            <label>Prise:</label> <br>
                <input type="text" name="rs"class="form-control input-sm">
                 <br>
            <label>Category:</label> <br>
                <input type="text" name="category"class="form-control input-sm">
                 <br>
            <label>offer:</label> <br>
                <input type="text" name="offer"class="form-control input-sm">
                 <br>
            
               <br>
              
              <!-- For success/fail messages -->
              <button type="submit" name="submit" style="color: white;" class="btn btn-block"> Product Show </button>         
          </form>
    </div>
 
<?php  require("footer.php");   ?>