<?php
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection,"candidate");
	session_start();
	$user_check=$_SESSION['login_user'];
	$ses_sql=mysqli_query($connection,"select uname from candidate where uname='$user_check'");
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session =$row['uname'];
	if(!isset($login_session)){
		mysqli_close($connection); // Closing Connection
		header("location: index.html"); 
	}
?>