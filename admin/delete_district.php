<?php
include('dbcon.php');
$id=$_POST['id'];
mysqli_query($conn,"delete from story where storyid='$id'") or die(mysqli_error($conn));
?>