
<?php include('header.php'); ?>






<?
ob_start();
php include('header.php'); 

?>
<?php 
session_start();
if (!isset($_SESSION['user_id'])){
//header('location:index.php');
}

?>
    <div class="container">

	<div class="row">	
						<div class="span3">
						<?php include('sidebar.php'); ?>
						</div>
						<div class="span9">
							
								<?php include('navbar_dasboard.php') ?>
							<div class="body_img">
								<img src="../img/hou.JPG">
							</div>
						</div> 
    </div>
<?php include('footer.php') ?>