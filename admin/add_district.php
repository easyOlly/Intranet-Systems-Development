						    <!-- Button to trigger modal -->
    <a href="#add_service" role="button" class="btn btn-info" data-toggle="modal"><i class="icon-plus icon-large"></i>&nbsp;Add Story</a>
     <br>
     <br>
    <!-- Modal -->
    <div id="add_service" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
	<div class="alert alert-info">Add Story</div>      
    </div>
    <div class="modal-body">
		<form class="form-horizontal" enctype="multipart/form-data" method="POST">
			<div class="control-group">
			<label class="control-label" for="inputEmail">Story Title</label>
			<div class="controls">
			<input type="text" name="title" id="inputEmail" placeholder="" required>
			</div>
			</div>

			<div class="control-group">
			<label class="control-label" for="inputPassword">Story Description</label>
			<div class="controls">
				<textarea name="description" rows="8" id="inputPassword"></textarea>
			
			</div>
			</div>


			<div class="control-group">
			<label class="control-label" for="inputPassword">Story Image</label>
			<div class="controls">
			<input type="file" name="image1" id="inputPassword" placeholder=""  required>
			</div>
			</div>

			<div class="control-group">
			<div class="controls">
			<button type="submit" name="ad" class="btn btn-info">Add</button>
			</div>
			</div>
	</form>
	</div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
    </div>
	
	<?php
	
	if (isset($_POST['ad'])){
	$title=$_POST['title'];
	$description=$_POST['description'];

	move_uploaded_file($_FILES["image1"]["tmp_name"],"uploads/" . $_FILES["image1"]["name"]);		
	$location=$_FILES["image1"]["name"];
	
	mysqli_query($conn,"insert into story (title,description,image_location) values('$title','$description','$location')")or die(mysqli_error($conn));
	?>
	<script>
	window.location="district.php";
	</script>
	<?php
	}
	?>
