<?php
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection,"company");
	session_start();
	$user_check=$_SESSION['login_user1'];
	$ses_sql=mysqli_query($connection,"select cuname from company where cuname='$user_check'");
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session =$row['cuname'];
	if(!isset($login_session)){
		mysqli_close($connection); // Closing Connection
		header("location: index.html"); 
	}
?>