						    <!-- Button to trigger modal -->
    <a href="#add_service" role="button" class="btn btn-info" data-toggle="modal"><i class="icon-plus icon-large"></i>&nbsp;Add Zone</a>
     <br>
     <br>
    <!-- Modal -->
    <div id="add_service" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
	<div class="alert alert-info">Add Story</div>
    </div>
    <div class="modal-body">
		<form class="form-horizontal" method="POST">
			<div class="control-group">
			<label class="control-label" for="inputEmail">Title Name</label>
			<div class="controls">
			<input type="text" name="zone_name" id="inputEmail" placeholder="Zone Name" required>
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="inputPassword">Description</label>
			<div class="controls">
			<input type="number" name="zone_No" id="inputPassword" placeholder="District Number"  required>
			</div>

			<div class="control-group">
			<label class="control-label" for="inputPassword">Tourist Images</label>
			<div class="controls">
			<input type="file" name="zone_No" id="inputPassword" placeholder="District Number"  required>
			</div>
			</div>
			<div class="control-group">
			<div class="controls">
			<button type="submit" name="ad" class="btn btn-info">Add Story</button>
			</div>
			</div>
	</form>
	</div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
    </div>
	
	<?php
	
	if (isset($_POST['zone_No'])){
	$zone_name=$_POST['zone_name'];
	$zone_No=$_POST['zone_No'];
	
	mysql_query("insert into zone (zone_name,zone_No) values('$zone_name','$zone_No')")or die(mysql_error());
	?>
	<script>
	window.location="zone.php";
	</script>
	<?php
	}
	?>