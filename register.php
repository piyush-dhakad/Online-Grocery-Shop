<?php  require("fheader.php");   ?>
<?php include('server.php');?>
<script src="startbootstrap-modern-business-gh-pages/ajax/jquery.min.js"></script>
<script src="startbootstrap-modern-business-gh-pages/ajax/webcam.min.js"></script>
<link rel="stylesheet" href="startbootstrap-modern-business-gh-pages/ajax/bootstrap.min.css" />
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc; }
    </style>


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


<!------ Include the above in your HEAD tag ---------->
<body onload="createCaptcha()" >
<div class="container">
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
            <form method="post"   action="register.php"  enctype="multipart/form-data" class="form-horizontal" role="form">
                   <?php include('errors.php');?>
      <h2>Registration</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">UserName*</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="First Name" required name="username" value="<?php echo $username; ?>" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" required placeholder="Email" name="email" value="<?php echo $email; ?>"  class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" required id="password" placeholder="Password" name="password1" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" required id="password" placeholder="Password" name="password2" class="form-control">
                    </div>
                </div>
				 <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" required id="phoneNumber" placeholder="Phone number" name="mobile" value="<?php echo $mobile; ?>" class="form-control">
                        
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" required id="birthDate" name="dob" class="form-control">
                    </div>
                </div>
               
                
				    <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio"   name="gender" value="Male" checked>Male  
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" name="gender" value="Female" >Female
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">City </label>
                    <div class="col-sm-9">
                        <input type="text"  required id="weight" placeholder="Please Enter your City "name="city" class="form-control">
                    </div>
                </div>
				<div class="form-group">
                        <label for="State" class="col-sm-3 control-label">State </label>
                    <div class="col-sm-9">
                        <select name="state"class="form-control">
						<option value="M.P.">M.P.</option>
						<option value="U.P.">U.P.</option>
						<option value="H.P.">H.P.</option>
						<option value="A.P.">A.P.</option>s
						
						</select>
                    </div>
                </div>
				<div class="form-group">
                        <label for="Zip" class="col-sm-3 control-label">Zip Code </label>
                    <div class="col-sm-9">
					
					<input type="text" required placeholder="Please Enter your City"name="pincode"class="form-control"/>
					
					</div>
				</div>
				<div class="form-group">
                        <label for="Address" class="col-sm-3 control-label">Street Address </label>
                    <div class="col-sm-9">
					<textarea rows="5" cols="50" placeholder="Please Enter your Address"name="address"class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
                        <label for="Aadhar Card" class="col-sm-3 control-label"> Aadhar Card </label>
                    <div class="col-sm-9">
					<input type="file"  required placeholder="Please Upload File" name="uploadimage" class="form-control"/>
					</div>
				</div>
				<div class="form-group">
                 <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results">Your captured image will appear here...</div>
            </div>
                    </div>
				</div>

        
             <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
    <button type="submit" name="register"  value="submit"  class="btn btn-success btn-block">Submit</button>
                    </div>
                </div>
                  <p>
    Already a mamber? <a href="login.php" >Sign in </a>
    </p>
            
            </form> <!-- /form -->
        </div> <!-- ./container -->
		
		</body>

<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
 
  
<?php  require("footer.php");   ?>