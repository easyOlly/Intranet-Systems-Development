	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit Story</strong></div>
	<form class="form-horizontal" method="post" enctype="multipart/form-data">
			
			<div class="control-group">
				
				<div class="controls">

 
				<img name="image" src="uploads/<?php echo $row['image_location']; ?>"  width="150px" height="150px" style="border:1px solid #333333;">
		</div>

				</div>

				<div class="control-group">   
					
				
				<div class="controls">
				<input type="hidden" name="storyid" value="<?php echo $row['storyid']; ?>" readonly>
		</div>

				</div>

				<div class="control-group">

				<label class="control-label" for="inputPassword">Title</label>
				<div class="controls">
				<input type="text" name="title" value="<?php echo $row['title']; ?>">
		</div>

				</div>

				<div class="control-group">
				<label class="control-label" for="inputPassword">description</label>
				<div class="controls">
				<textarea name="description" rows="3"><?php echo $row['description']; ?></textarea>
				</div>
				</div>

				<div class="control-group">
				<label class="control-label" for="inputPassword">Image file</label>
				<div class="controls">
				<input type='file' name='image'>
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
	$storyid=$_POST['storyid'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);		
	$location1=$_FILES["image"]["name"];
	mysqli_query($conn,"update story set title='$title', description='$description', image_location='$location1' where storyid='$storyid'")or die(mysqli_error($conn)); ?>
	<script>
	window.location="district.php";
	</script>
	<?php
	}
	?>