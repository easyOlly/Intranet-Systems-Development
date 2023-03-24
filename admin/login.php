
<?php 
mysql_select_db('siwesdb',mysql_connect('localhost','root',''))or die(mysql_error());
?>

<?php
//include('conn.php');//para sa connection sang database

//if (isset($_POST['Submit'])) {//condition kun e click ang button
//$username=$_POST['username'];//variable ang $Username kag ang $_POST['UserName'] ay value sang textbox nga UserName
//$password=$_POST['password'];//variable ang $Username kag ang $_POST['Password'] ay value sang textbox nga Password
//$result=mysql_query("select * from users where username='$username' and password='$password'")or die (mysql_error());//query sang database 
		
//$count=mysql_num_rows($result);//isipon kn may tyakto sa query
//$row=mysql_fetch_array($result);//ma return row sa database
//		
//		if ($count > 0){//kun may tyakto sa query e execute yah ang code sa dalom
		//session_start();//para mag start ang session
//		$_SESSION['user_id']=$row['user_id'];//kwaon ang id sang may tyakto nga username kag password ang ibotang sa $_SESSION['member_id']
		header('location:director.php');
//		echo $username;
//		}else{
//		header('location:index.php');
		//header('location:index.php');
//		}
//}
?>

