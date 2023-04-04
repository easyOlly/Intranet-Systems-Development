<?php session_start(); ?>	
<?php include('dbcon.php'); ?>
<?php include('session.php'); 

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Tourist</title>     
<!-- Bootstrap stylesheet -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">    
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700%7CSource+Sans+Pro:300,400,600,700" rel="stylesheet"> 
<!-- stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/style_cyan.css" title="style_cyan" rel="alternate stylesheet" type="text/css"/>
<link href="css/style_red.css" title="style_red" rel="alternate stylesheet" type="text/css"/>
<link href="css/style_green.css" title="style_green" rel="alternate stylesheet" type="text/css"/>
<link href="css/style_blue.css" title="style_blue" rel="alternate stylesheet" type="text/css"/>
<!-- font-awesome -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- top start here -->
	<div id="top">
		<!-- top container start here-->
		<div class="container">
			<div id="top-links">
				<ul class="list-inline pull-left button">
					<li>
						<a href="story.php"><span>Back</span></a>
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
				<div class="col-sm-3 col-md-3 col-xs-12 visible-xs paddleft">
					<!-- button-login start here -->
					
					<!-- button-login end here -->
				</div>
			   
			  
			</div>
		</div>
		<!-- header container end here -->
	</header>
<!-- header end here -->
<!-- jobs start here -->
	<div id="jobs">
		<div class="container">
			<div class="row">
				<!-- <?php
			
					$query=mysqli_query($conn,"select * from members where member_id='$session_id'")or die(mysqli_error());
					$row=mysqli_fetch_array($query);
					?> -->
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h5>Continue: <?php echo $row['firstname']." ".$row['lastname'];?></h5>
					<!-- about-content start here -->
					
				<!-- jobs-content end here -->
				</div>
			</div>
		</div>
	</div>
<!-- jobs end here -->
<!-- job start here -->
	<div id="blogs">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12 padd0">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="blog-detail">
							
							<div class="image">
                     <!-- php goes here-->
 						<?php
						$get_id = $_GET['storyid'];
                                  
	 					$user_query=mysqli_query($conn,"select * from story where storyid='$get_id'")or die(mysqli_error($conn));
						while($row=mysqli_fetch_array($user_query)){ 
							?>
							<img src="./admin/uploads/<?php echo $row['image_location']; ?>" width="870px" height="446px" class="img-responsive">
								<!-- <img src="images/blog-big.jpg" title="blog-big" alt="blog-big" class="img-responsive"> -->
							</div>
							<div class="content">
								<h1><?php echo $row['title']; ?></h1>
							
								<h5><?php echo $row['description']; ?></h5>
								
								<?php } ?>
							</div>
							 <!-- php goes here-->
						



							<div class="commentbox col-md-12 col-sm-12 col-xs-12 padd0">
								<h3>Comments</h3>
									<ul class="list-unstyled">
											<!--   Comment code start -->
								  
											<ul class="sam">
												 
												<li>
													<?php $user_query=mysqli_query($conn,"select * from comments")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['id'];
									$member_id = $row['member_id'];
									$comments = $row['comments'];

									/* member query  */
									$member_query = mysqli_query($conn,"select * from members where member_id = ' $member_id'")or die(mysqli_error());

							while($row1=mysqli_fetch_array($member_query)){
								$firstname = $row1['firstname'];
								$image_location = $row1['image_location'];							
									//$member_row = mysqli_fetch_array($member_query);

									
									$service_query = mysqli_query($conn,"select * from comments where comments = '$comments' ")or die(mysqli_error());
									$service_row = mysqli_fetch_array($service_query);
								
									?>




									<img src="./uploads/<?php echo $row1['image_location'];?>" width="40" height="40" class="img-responsive">


													<div class="profile">
														<h5><?php echo $row1['firstname']; ?></h5>
													<p><?php echo $service_row['comments']; ?></p>

													</div>
												<?php } } ?>	
												</li>
												
											</ul>

									</ul>
												
											




									
									<div class="form col-md-12 col-sm-12 col-xs-12">
										<div class="border"></div>
										<div class="border1"></div>
										
										<form class="form-horizontal" method="post">
											<fieldset>
												<div class="form-group">
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<label>Comment</label>
														<input type="hidden" name="session_id" value="<?php echo $session_id;?>"></text>
														<textarea class="form-control" id="input-enquiry" rows="10" name="comments" placeholder="" required=""></textarea>
													</div>
												</div>
												<div class="button">
													<button type="submit" value="Submit" name="update" class="btn btn-primary btnus">SUBMIT</button>
												</div>
											</fieldset>
											<?php
							if (isset($_POST['update'])){
							$session_id = $_POST['session_id'];
							$comments = $_POST['comments'];
							
						mysqli_query($conn,"insert into comments(member_id,comments) values ('$session_id','$comments')
							")or die(mysqli_error($conn));
							?>
							<script>
								alert ('Your Comments is save Sucessfully');
								window.location.refresh();

							//window.location = 'blog-detail.php'; 
							</script>
							<?php
							}	
							?>
										</form>
									</div>
							</div>


						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 hidden-xs">
					<div class="rightside">
						<div class="border"></div>
						
						<div class="latest-post">
							<h1>Admin Note</h1>
							<div class="border"></div>
							<div class="border1"></div>
						</div>

                                <?php
									include('dbcon.php');
                                   $user_query=mysqli_query($conn,"select * from note")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['note_id']; ?>  

						<div class="job-content">
							
									<img src="images/new/admin.jpg" alt="p1" title="p1" height="24" width="27">
									<h1><?php echo $row['message']; ?>
										
									</h1>
										
						</div>	
						<?php } ?>
					</div>
				
					
				</div>
			</div>

		</div>
	</div>

<!-- abouts end here -->
<!-- Footer start here -->
	<footer>
	</footer>
	<div class="powered">
		<div class="container">
			<p>Copyright &#169; 2017. All Rights Reserved</p>
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

<!-- Mirrored from ocsolutions.co.in/html/jobportal/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Mar 2023 21:35:13 GMT -->
</html>