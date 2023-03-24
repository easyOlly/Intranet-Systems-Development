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
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Story Seeker Table</strong>
                            </div>
													
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                            
                                <thead>
                                    <tr>
                                        <th>Picture</th> 
                                        <th>Name</th>                 
                                        <th>Gender</th>                                 
                                        <th>Address</th>                                 
                                        <th>Contact No</th>                              
                                        <th>Email Address</th>
                                        
                                                                          
                                                                    
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                
                                
                                 
                                    
                                    
								 
                                  <?php
                                  
                                  include('dbcon.php');

                                   $user_query=mysqli_query($conn,"select * from members")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){ 
									
									 $id=$row['member_id'];
									
									
									
								 ?>
                                    
                                    
                                    
					 <tr class="del<?php echo $id ?>">
     <td>  <img src="../uploads/<?php echo $row['image_location'];?>" width="70" height="70"></td>
                                    
                                    <td><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></td> 
                                    
                                    <td><?php echo $row['gender']; ?></td> 
                                    <td><?php echo $row['address']; ?></td> 
                                    <td><?php echo $row['contact_no']; ?></td> 
                
                                    <td><?php echo $row['email']; ?></td> 
                                  
                                      
                                    <td width="100">
                                     <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                     
									   <!-- <a  href="updatem.php<?php echo '?member_id='.$id; ?>"  class="btn btn-info"><i class="icon-check icon-large"></i></a> -->
									</td>
									<?php include('toolttip_edit_delete.php'); ?>
									</tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
							
<script type="text/javascript">
        $(document).ready( function() {
            $('.btn-danger').click( function() {
                var id = $(this).attr("id");
                if(confirm("Are you sure you want to delete this Member?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_member.php",
                        data: ({id: id}),
                        cache: false,
                        success: function(html){
                        $(".del"+id).fadeOut('slow'); 
                        } 
                    }); 
                }else{
                    return false;}
            });				
        });
    </script>

						</div>
    </div>
    
    
    <?php
	

	/*
	if (isset($_POST['edit'])){
	
	$user_id=$_POST['id'];
	$status=$_POST['status'];
	
	mysql_query("update members set status='Activate' where user_id='$user_id'")or die(mysql_error()); ?>
	<script>
	window.location="members.php";
	</script>
	<?php
	}
	*/
	?>
    
    
    
<?php include('footer.php') ?>