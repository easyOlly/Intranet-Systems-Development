<?php
include('dbcon.php');
$id=$_POST['id'];
mysql_query("delete from zone where zone_id='$id'") or die(mysql_error());  
?>