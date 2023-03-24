<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <div class="container">

	<div class="row">	
						<div class="span3">
						<?php include('sidebar.php'); ?>
						</div>
						<div class="span9">
							
								<?php include('navbar_dasboard.php') ?>
						    <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Information on Student Siwes Program</strong>
                            </div>
							<!-- form sort -->
							<form method="POST" action="sort_date.php">
							<input type="text"  class="w8em format-d-m-y highlight-days-67 " name="date" id="sd" maxlength="10" style="border: 3px double #CCCCCC;" required/>
							<br>
							<button name="sort"  class="btn btn-success"><i class="icon-filter icon-large"></i>&nbsp;Sort</button>
							<br>
							<br>
							</form>
							<!-- end form -->
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                            
                                <thead>
                                    <tr>
                                       
                                       
                                          <th>Matric Number</th>                                 
                                        <th>Surname</th> 
                                        <th>Other Name</th> 
                                        <th>Department</th>
                                         <th>phone number</th>
                                         <th>email</th>  
                                         <th> Siwes Organization</th>               
                                        <th> Siwes Location</th>                                
                                                                         
                                    </tr>
                                </thead>
                                <tbody>
								 
                                 

                                  <?php $user_query=mysqli_query($conn,"select * from siwes")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['id'];
									$member_id = $row['member_id'];
									$matricNo = $row['smatric'];
									/* member query  */
									$member_query = mysqli_query($conn,"select * from members where member_id = ' $member_id'")or die(mysqli_error());
									$member_row = mysqli_fetch_array($member_query);
									/* service query  */
									$service_query = mysqli_query($conn,"select * from siwes where smatric = '$matricNo' ")or die(mysqli_error());
									$service_row = mysqli_fetch_array($service_query);
									?>




									 <tr class="del<?php echo $id ?>">
                                     
                                     
							  		 
                                    
                                    <td><?php  echo $service_row['smatric'];  ?></td>
                                   
                                    <td><?php  echo $service_row['ssurname'];  ?></td>
                                    <td><?php  echo $service_row['sothername'];  ?></td>
                                    <td><?php  echo $service_row['sdepartment'];  ?></td>
                                    <td><?php  echo $service_row['sphone'];  ?></td>
                                    <td><?php  echo $service_row['semail'];  ?></td>
                                    
                                    


                                    <td><?php  echo $service_row['location'];  ?></td>
                                    <td><?php  echo $service_row['company'];  ?></td>
                                    
									<?php
								}
										?>
									  
									<?php include('toolttip_edit_delete.php'); ?>
									</tr>
									<?php  ?>
                           
                                </tbody>
                            </table>
							


						</div>
    </div>
<?php include('footer.php') ?>



<div id="edit<?php ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit User</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Service Offer</label>
				<div class="controls">
                
                
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['service_id']; ?>" required>
				<input type="text" id="inputEmail" name="service" value="<?php echo $row['service_offer']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Price</label>
				<div class="controls">
				<input type="text" name="price" id="inputPassword" value="<?php echo $row['price']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit'])){
	
	$user_id=$_POST['id'];
	$service=$_POST['service'];
	$price=$_POST['price'];
	
	mysql_query("update service set service_offer='$service', price='$price' where user_id='$user_id'")or die(mysql_error()); ?>
	<script>
	window.location="service.php";
	</script>
	<?php
	}
	?>