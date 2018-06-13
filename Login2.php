<?php
session_start();
if (isset($_REQUEST["btnsubmit"])) {
	$connection=mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"company");
	$huname = $_REQUEST['txtusername'];
	$hpass = $_REQUEST['txtpass'];
	$query=mysqli_query($connection,"select * from company where cpass='$hpass' AND cuname='$huname'");
	$rows = mysqli_num_rows($query);
	if ($rows == 1) {
		$_SESSION['login_user1']=$huname;
		header("location: profile2.php"); 
	}
	else
	{
		
	}
	mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<title>Login</title>
	<style>
	body
		{
			background-image:url("image2.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
		#form1
		{
			text-content: center;
			
		}
		.register
		{
			align-content: center;
			margin-top:  200px;
			margin-left: 500px;
			margin-right: 500px;
			padding-left: 10px;
			text-align: center;
			
			padding-top: 10px;
			padding-bottom: 20px;
			padding-left: 30px;
			background-color: #ffffff;
 			border: 1px solid black;
 		    opacity: 0.6;
  			filter: alpha(opacity=60);
		}
		</style>
</head>
<body>
	
	<div class="register" >
	<h1 style="text-align: center;"><i class="glyphicon glyphicon-edit"></i></h1>
	<h1 style="text-align: center;">Login</h1>
	<form action="" id="form1" method="post">
		<table>
			<tr>
				<td>User Name:</td>
				<td><input required type="text" name="txtusername"/></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input required type="Password" name="txtpass"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnsubmit"/></td>
			</tr>
		</table>		
	</form>
	</div>
</body>
</html>