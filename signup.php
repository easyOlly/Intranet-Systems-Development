
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('header.php'); ?>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">   
<title>Sign up</title>
<!-- Bootstrap stylesheet -->
<link href="new/bootstrap/css/bootstrap.css" rel="stylesheet">   
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700%7CSource+Sans+Pro:300,400,600,700" rel="stylesheet"> 
<!-- stylesheet -->
<link href="new/css/style.css" rel="stylesheet" type="text/css"/>
<link href="new/css/style_cyan.css" title="style_cyan" rel="alternate stylesheet" type="text/css"/>
<link href="new/css/style_red.css" title="style_red" rel="alternate stylesheet" type="text/css"/>
<link href="new/css/style_green.css" title="style_green" rel="alternate stylesheet" type="text/css"/>
<link href="new/css/style_blue.css" title="style_blue" rel="alternate stylesheet" type="text/css"/>
<!-- font-awesome -->
<link href="new/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="new/js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="new/js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="toastr/toastr.min.css" rel="stylesheet"/>
</head>
<body>
<!-- top start here -->
	<div id="top">
		<!-- top container start here-->
		<div class="container">
			<div id="top-links">
				<ul class="list-inline pull-left button">
					
					<li>
						<a href="index.php"><span>HOME</span></a>
					</li>
					<li>
						<a href="admin/index.php"><span>ADMIN LOGIN</span></a>
					</li>
				</ul>
				
			</div>
		</div>
		<!-- top container end here-->
	</div>
<!-- top end here -->
	
<!-- header start here-->
	<header>
		<!-- header container start here-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-xs-12">
					<!-- logo start here-->
					<div id="logo">
						<a href="index-2.html">
							<img class="img-responsive logochange" alt="logo" title="logo" src="img/log.jpg" />
						</a>
					</div>
					<!-- logo end here-->
				</div>
			
			    <div class="col-sm-6 col-md-6 col-xs-12 padd0">
					<!-- menu start here-->
					<nav class="navbar" id="menu">
						<div class="navbar-header">
							<span class="menutext visible-xs">Menu</span>
							<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
						</div>
						<div class="collapse navbar-collapse navbar-ex1-collapse padd0">
							<ul class="nav navbar-nav pull-left">
								
								
								
												
						</div>
					</nav>
					<!-- menu end here -->
				</div>
			   
			</div>
		</div>
		<!-- header container end here -->
	</header>


<!-- login-form start here -->
	<div id="login-form">
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-2 col-md-8 col-sm-8 col-xs-12">
					<div class="form">
						<div class="border"></div>
						<div class="border1"></div>
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
							<fieldset>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Surname</label>
                                        
										<input class="form-control" id="input-username" placeholder="Enter your Surname" name="firstname" required type="text" value="">
									</div>
                                    
								</div>
                                
                                
                                
                                <div class="form-group">
									<div class="col-sm-12">
										<label>Middle Name</label>
										<input class="form-control" id="input-username" placeholder="Enter your Middle name" name="middlename" value="" >
									</div>
                                    
								</div>
                                
                                <div class="form-group">
									<div class="col-sm-12">
										<label>Last Name</label>
										<input class="form-control" id="input-username" placeholder="Enter your Last Name" name="lastname" required type="text" value="">
									</div>
                                    
								</div>
                                
                                <div class="form-group">
									<div class="col-sm-12">
										<label>Gender</label>
										<select class="form-control" id="input-username" placeholder="" value="" name="gender" required>
                                        <option></option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        </select>
                                        
                                       
									</div>
                                    
								</div>
                                
                               
                                
                                <div class="form-group">
									<div class="col-sm-12">
										<label>Address</label>
										<input class="form-control" id="input-username" placeholder="address"  name="address" required type="textarea" value="">
									</div>
                                    
								</div>
                                
									                                <script>
									                                function isNumberKey(evt){
									    var charCode = (evt.which) ? evt.which : event.keyCode
									    if (charCode > 31 && (charCode < 48 || charCode > 57))
									        return false;
									    return true;
									}

                                </script>
                                <div class="form-group">
									<div class="col-sm-12">
										<label>Contact Number</label>
										<input class="form-control" id="input-username" placeholder="Enter your phone No" name="contact_no" maxlength="15" onkeypress='return isNumberKey(event)' required type="text" value="">
									</div>
                                    
								</div>
                                
                                <div class="form-group">
									<div class="col-sm-12">
										<label>Email</label>
										<input class="form-control" id="input-username" placeholder="Enter your email address"  value="" name="email" required type="email">
									</div>
                                    
								</div>
                                
                                  
                                
								<div class="form-group">
									<div class="col-sm-12">
										<label>User name</label>
										<input class="form-control" id="input-email" placeholder="username" value="" name="username" required type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Password</label>
										<input type="password" class="form-control" id="input-password" placeholder="Type your password" value="" name="password" required>
									</div>
								</div>


								<div class="form-group">
									<div class="col-sm-12">
										<label>Password Confirmation</label>
										
						<input type="password" class="form-control" id="input-passconfirm" placeholder="Re-type your password again" value="" name="cpassword" required>
                                         	<!-- <span id="red" class="label label-important"> -->
									</div>




									<div class="form-group">
									<div class="col-sm-12">
										<label></label>
										<input type="file" class="form-control" id="input-username" placeholder=""  name="image1"/>
									</div>
								</div>
									
					
								<div class="button">
									<button type="submit" value="Submit" name="submit" class="btn btn-primary btnus">REGISTER</button>
								</div>
								
								<p>Already have an account? <a href="login.php">Login</a></p>
							</fieldset>
			
                            <?php 
   include('dbcon.php');

if(isset($_POST['submit']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$middlename=$_POST['middlename'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$contact_no=$_POST['contact_no'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];	
	move_uploaded_file($_FILES["image1"]["tmp_name"],"uploads/" . $_FILES["image1"]["name"]);		
	$location=$_FILES["image1"]["name"];
	$akin = md5($password);
?>
	
<?php
?>
<?php
if(isset($_POST['submit']))
{
	$check = mysqli_query($conn,"SELECT * FROM members WHERE username = '$_POST[username]' AND password='$_POST[password]'") or die (mysqli_error($conn));
	


	if (mysqli_num_rows($check)){
		
		echo '<div class="fail"><strong>Registration Failed!</strong>&nbsp; Pick Another User Name to  sign up, the user name has been used ! <div>';
}

		else if($cpassword!=$password){
		//$a="Password do not Match";
			echo "<script type='text/javascript'>alert('Registration Failed!  Password do not match! ');</script>";

		echo '<div class="fail"><strong>Registration Failed!</strong>&nbsp; Password do not match! <div>';
	}
else
{
	mysqli_query($conn,"insert into members(firstname,lastname,middlename,gender,address,email,contact_no,username,password,image_location)values ('$firstname','$lastname','$middlename','$gender','$address','$email','$contact_no','$username','$akin','$location')")or die(mysqli_error($conn));


 echo '<div class="reg"><strong>Registration Successfully!</strong>&nbsp;You have sign up to the portal <div>';
	?>
<script type="text/javascript">
alert ('Registration Successful!!!');
window.location='login.php';
</script>
<?php
}}}else{
echo " ";
}//}?>
</form>
						<style type="text/css">
							.reg{
								background: green;
								width: auto;
								height: auto;
								color: white;
								text-align: center;

							}


.fail{
								background: red;
								width: auto;
								height: auto;
								color: white;
								text-align: center;

							}


						</style>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- submit-job-form end here -->


<!-- Footer start here -->
		<footer>
		<div class="container">
			
			
		</div>
	</footer>

	<div class="powered">
		<div class="container">
			<p>Copyright &#169; 2023. Project </p>
		</div>
	</div>
<!-- Footer end here -->

<script>
 webshims.setOptions('forms-ext', {types: 'date'});
webshims.polyfill('forms forms-ext');
$.webshims.formcfg = {
en: {
    dFormat: '-',
    dateSigns: '-',
    patterns: {
        d: "yy-mm-dd"
    }
}
};
</script>

 
   
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<!-- jquery -->
<script src="new/js/jquery.2.1.1.min.js" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="new/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--bootstrap select-->
<script src="new/js/dist/js/bootstrap-select.js" type="text/javascript"></script>
<!-- owlcarousel js -->
<script src="new/js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<!--internal js-->
<script src="new/js/internal.js" type="text/javascript"></script>
<!-- color switcher-->
<script src="new/js/switcher.js" type="text/javascript"></script>
<script type="text/javascript" src="toastr/toastr.min.js" ></script>  
</body>


</html>