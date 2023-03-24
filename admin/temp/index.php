<?php
 @session_start();
 ob_start();
 include ('dbcon.php');
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Login</title>
<!-- Bootstrap stylesheet -->
<link href="../new/bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700%7CSource+Sans+Pro:300,400,600,700" rel="stylesheet"> 
<!-- stylesheet -->
<link href="../new/css/style.css" rel="stylesheet" type="text/css"/>

<link href="../new/css/style_cyan.css" title="style_cyan" rel="alternate stylesheet" type="text/css"/>
<link href="../new/css/style_red.css" title="style_red" rel="alternate stylesheet" type="text/css"/>
<link href="../new/css/style_green.css" title="style_green" rel="alternate stylesheet" type="text/css"/>
<link href="../new/css/style_blue.css" title="style_blue" rel="alternate stylesheet" type="text/css"/>
<!-- font-awesome -->
<link href="../new/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="../new/js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="../new/js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- top start here -->
	<div id="top">
		<!-- top container start here-->
		<div class="container">
			<div id="top-links">
				<ul class="list-inline pull-left button">
					
					<li>
						<a href="../index.php"><span>Back to Home</span></a>
					</li>
					<li>
						<a href=""><span>Unilag Siwes Web Portal</span></a>
					</li>
				</ul>
				<ul class="list-inline pull-right icon">
					<li>
						<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="https://in.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
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
						<a href="index.php">
							<img class="img-responsive logochange" alt="logo" title="logo"  src="log.jpg" />
						</a>
					</div>
					<!-- logo end here-->
				</div>
				<div class="col-sm-3 col-md-3 col-xs-12 visible-xs paddleft">
					<!-- button-login start here -->
					<div class="button-login pull-right">
						<button type="button" class="btn btn-default btn-lg" onclick="location.href='index.php'">Login</button>
						<button type="button" class="btn btn-primary btn-lg" onclick="location.href='../signup.php'">Register</button>
					</div>
					<!-- button-login end here -->
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
			    <div class="col-sm-3 col-md-3 col-xs-12 hidden-xs">
					<!-- button-login start here -->
					<div class="button-login pull-right">
						<button type="button" class="btn btn-default btn-lg" onclick="location.href='index.php'">Login</button>
						<button type="button" class="btn btn-primary btn-lg" onclick="location.href='../signup.php'">Register</button>
					</div>
					<!-- button-login end here -->
				</div>
			</div>
		</div>
		<!-- header container end here -->
	</header>
<!-- header end here -->

<!-- login start here -->
	<div id="login">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- login-content start here -->
					<div class="login-content">
						<h1>Administrative Login</h1>
						
					</div>
				<!-- login-content end here -->
				</div>
			</div>
		</div>
	</div>
<!-- login end here -->


<!-- login-form start here -->
	<div id="login-form">
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-2 col-md-8 col-sm-8  col-xs-12">
					<div class="form">
						<div class="border"></div>
						<div class="border1"></div>
						<form class="form-horizontal" method="post" action="">
							<fieldset>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Username</label>
										<input class="form-control" id="input-email" placeholder="Admin User Name" value="" name="username" required type="text">
									</div>
								</div>
                                
                                
                                
                                
                                
                                
                                
                                
								<div class="form-group">
									<div class="col-sm-12">
										<label>Password</label>
										<input class="form-control" id="input-password" placeholder="Admin password" value="" name="password" required type="password">
									</div>
								</div>
								
								
								<div class="button">
									<button type="submit" value="Submit" name="submit" class="btn btn-primary btnus">LOGIN</button>
								</div>
								
								
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
   


<?php
//include('conn.php');//para sa connection sang database

if (isset($_POST['submit'])) {//condition kun e click ang button
$username=$_POST['username'];//variable ang $Username kag ang $_POST['UserName'] ay value sang textbox nga UserName
$password=$_POST['password'];//variable ang $Username kag ang $_POST['Password'] ay value sang textbox nga Password
$result=mysql_query("select * from users where username='$username' and password='$password'")or die (mysql_error());//query sang database 
		
$count=mysql_num_rows($result);//isipon kn may tyakto sa query
$row=mysql_fetch_array($result);//ma return row sa database
		
		if ($count > 0){//kun may tyakto sa query e execute yah ang code sa dalom
		$_SESSION['user_id'] = $row['user_id'];//kwaon ang id sang may tyakto nga username kag password ang ibotang sa $_SESSION['member_id']
		echo "<script type='text/javascript'> window.location.href = 'director.php'; </script>";
						
						
	//	header('location:director.php');
		}else{
			//header('location:index1.php');
			echo "<script>alert('Access Denied due to wrong login credential!!!');
						
						</script>";
			
		
		//header('location:index.php');
		}
}
?>

<!-- jquery -->
<!-- jquery -->
<script src="../new/js/jquery.2.1.1.min.js" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="../new/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--bootstrap select-->
<script src="../new/js/dist/js/bootstrap-select.js" type="text/javascript"></script>
<!-- owlcarousel js -->
<script src="../new/js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<!--internal js-->
<script src="../new/js/internal.js" type="text/javascript"></script>
<!-- color switcher-->
<script src="../new/js/switcher.js" type="text/javascript"></script>
</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Jun 2017 10:43:37 GMT -->
</html>