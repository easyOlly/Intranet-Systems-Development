<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysqli_query($conn,"delete from note where note_id = '$get_id' ")or die(mysqli_error());
header('location:note.php');
?>