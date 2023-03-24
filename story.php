
<?php session_start(); ?>	
<?php include('dbcon.php'); ?>
<?php include('session.php'); ?>
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
						<a href="admin/index.php"><span>ADMIN (Story Teller)LOGIN</span></a>
					</li>

									</ul>
				<ul class="list-inline pull-right icon">
					<li>
						<a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
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
	

		
		<!-- header container end here -->
	</header>
<!-- header end here -->
<!-- jobs start here -->
	<div id="jobs">
		<div class="container">
			<div class="row">
				<?php
			
					$query=mysqli_query($conn,"select * from members where member_id='$session_id'")or die(mysqli_error());
					$row=mysqli_fetch_array($query);
					?>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- about-content start here -->
					<div class="jobs-content">
						<h1>Welcome : <span><?php echo $row['firstname']." ".$row['lastname']; ?>	</span></h1>
					
					</div>
				<!-- jobs-content end here -->
				</div>
			</div>
		</div>
	</div>
	 <?php

$sql = "SELECT * FROM story LIMIT 10";
$result = $conn->query($sql);
?>

<?php    
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
              $id=$row['storyid'];
               ?>
<!-- jobs end here -->
<!-- job start here -->
	<div id="blogs">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12 padd0">
					<div id="bloggs">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<!-- box start here -->

							<div class="box" id="<?php echo $id ?>">
								<a href="story-detail.php" <?php echo $id ?>>
								<img src="./admin/uploads/<?php echo $row['image_location']; ?>" width="270px" height="221px">
								</a>
								<div class="matter">
									<h1><a href="story-detail.php"><?=$row['title']?></a></h1>

									<p><?=$row['description']?></p>
									<div class="pull-left">
										<ul class="list-inline">
										
										
										</ul>

									</div>
									<div class="pull-right">

						<a href="story-detail.php<?php echo'?storyid='.$id;?>">Read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
			
									</div>

								</div>
							</div>
						

						</div>
									
					</div>
						
				</div>
	

			</div>

		</div>

	</div>
	<?php   }
            } else {
              echo "<center> <b>No Story uploaded yet</b></center";
            }
            $conn->close();
             ?>	


<!-- abouts end here -->
<!-- Footer start here -->
	
			
<!-- begin of notte -->


	<footer>
		<div class="container">
			
			
		</div>
	</footer>
	<div class="powered">
		<div class="container">
			<p>Copyright &#169; 2023. Final Year Project</p>
		</div>
	</div>

<!-- Footer end here -->
<!-- jquery -->
<script src="js/jquery.2.1.1.min.js"></script>
<!-- bootstrap js -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!--bootstrap select-->
<script src="js/dist/js/bootstrap-select.js"></script>
<!-- owlcarousel js -->
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<!--internal js-->
<script src="js/internal.js"></script>
<!-- color switcher-->
<script src="js/switcher.js"></script>
</body>


</html>