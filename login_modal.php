
<style type="text/css">
	.alert alert-danger{
		width: 150px;
		height: 150px;
		background:pink;       
	}
</style>

<!-- login-form start here -->
	<div id="login-form">
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-2 col-md-8 col-sm-8  col-xs-12">
					<div class="form">
						<div class="border"></div>
						<div class="border1"></div>
						<form class="form-horizontal" method="post">
							<fieldset>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Username</label>
										<input class="form-control" id="input-email" placeholder="Enter username" value="" name="username" required type="username">
									</div>
								</div>
                                
                                
								<div class="form-group">
									<div class="col-sm-12">
										<label>Password</label>
										<input class="form-control" id="input-password" placeholder="Enter your password" value="" name="password" required type="password">
									</div>
								</div>
<style type="text/css">
	.loginerror{
		width: 100px;
		height: 100px;
		background: red;
	}
</style>
<?php
if (isset($_POST['submit1'])){
$username = $_POST['username'];
$password = $_POST['password'];
$akin = md5($password);
$query = "SELECT * FROM members WHERE username='$username' AND password='$akin'";
$result = mysqli_query($conn,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row > 0 ) {
	$_SESSION['id']=$row['member_id']; 


	echo "<script>window.location='story.php';
						</script>";
   	}
else 
{
echo '<div class="alert alert-danger"><strong>Login Error!</strong>&nbsp;Please check your Username and Password</div>';
      }       
}
             ?>  
             		
								


								<div class="button">
									<button type="submit" value="Submit" name="submit1" class="btn btn-primary btnus">LOGIN</button>
								</div>
								
								<p>Don't have an account? <a href="signup.php">Register</a></p>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- login-form  end here -->

<script type="text/javascript">


$(document).ready(function () {
 
    $('#akin1').click(function () {

        toastr.success("Work in Progress for akin", "Student Requeassst Form", {
            "timeOut": "40000",
            "extendedTImeout": "40000"
            
        });
    });

    
});

</script>

</body>

    

</html>