<?php
		if (isset($_REQUEST["btnsubmit"])) {
			$connection=mysqli_connect("localhost","root","");
			mysqli_select_db($connection,"company");

			$huname = $_REQUEST['txtusername'];
			$hemail = $_REQUEST['txtemail'];
			$hpass = $_REQUEST['txtpassword'];
			$hcontact = $_REQUEST['txtnumber'];
			$hdob = $_REQUEST['bday'];
			$haddress = $_REQUEST['txtaddress'];

			$str = "insert into company(cuname,cpass,cemail,ccontact,cdate,caddress) values('$huname','$hpass','$hemail','$hcontact','$hdob','$haddress')";
			mysqli_query($connection,$str );
			header("location:success.html");
	
		}
		
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<title>
		Company Registration
	</title>
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
			margin-top:  10px;
			margin-left: 500px;
			margin-right: 500px;
			padding-left: 10px;
			text-align: center;
			
			padding-top: 10px;
			padding-bottom: 20px;
			background-color: #ffffff;
 			border: 1px solid black;
 		    opacity: 0.6;
  			filter: alpha(opacity=60);
		}
	</style>
</head>
<body>
	<h1 style="text-align: center;"><i class="glyphicon glyphicon-edit"></i></h1>
	<h1 style="text-align: center;">Company Registration</h1>
	<div class="register" >
	<form action="" id="form1" method="post">
		<table>
			<tr>
				<td>UserName:</td>
				<td><input required type="text" name="txtusername"/></td>
			</tr>

			<tr>
				<td>Password:</td>
				<td><input required type="password" name="txtpassword"/></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input required type="email" name="txtemail"/></td>
			</tr>
			<tr>
				<td>Contact:</td>
				<td><input required type="number" name="txtnumber"/></td>
			</tr>
			
			<tr>
				<td>Starting Date:</td>
  				<td><input type="date" name="bday"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><textarea rows="4" cols="20" name="txtaddress"></textarea></td>
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