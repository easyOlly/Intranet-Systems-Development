
<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Tourist</title>
<!-- Bootstrap stylesheet -->
<link href="new/bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- font -->

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
	
<div id="top">
		<!-- top container start here-->
		<div class="container">
			<div id="top-links">
				<ul class="list-inline pull-left button">
					
					<li>
						<a href="index.php"><span>HOME</span></a>
							<li>
						<a href="login.php"><span>LOGIN</span></a>
					</li>
						<li>
						<a href="signup.php"><span>Sign up</span></a>
					</li>

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
						<a href="index.php">
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

<!-- slider start here -->
	<div class="slideshow owl-carousel" style="height: 40%;">
		<div class="item">
			<img src="images/1.jpg" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					
				</div>
			</div>
		</div>
		<div class="item">
			<img src="images/2.jpg" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					
				</div>
			</div>
		</div>	
		<div class="item">
			<img src="images/3.jpeg" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					
				</div>
			</div>
		</div>	
		<div class="item">
			<img src="images/4.jpg" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					
				</div>
			</div>
		</div>	
	</div>
<!-- slider end here -->

	
	<footer>
		<div class="container">
			
			
		</div>
	</footer>
	<div class="powered">
		<div class="container">
			<p>Copyright &#169; 2023 Tourist Management Final Year Project</p>
		</div>
	</div>
<!-- Footer end here -->
<!-- Footer end here -->
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

<script type="text/javascript">


$(document).ready(function () {
   
    $('#akin').click(function () {
        toastr.success("Mechanic Workshop uploaded successfully", "Mechanic Workshop", {
                    "timeOut": "800",
                    "extendedTImeout": "3000" });
            setTimeout(function(){ 
        //alert ("akin");

        window.location = "https://sawtraxltd.com/mechanic";
            
          }, 3000);
    });

    
});

</script>

</html>

               