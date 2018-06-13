<?php
		if (isset($_REQUEST["btnsubmit"])) {
			$connection=mysqli_connect("localhost","root","");
			mysqli_select_db($connection,"advertise");

			$hcompany = $_REQUEST['txtusername'];
			$hemail = $_REQUEST['txtemail'];
			$hcontact = $_REQUEST['txtnumber'];
			$hsalary = $_REQUEST['salary'];
			$harea=$_REQUEST['area'];
			$hdescription = $_REQUEST['txtaddress'];

			$str = "insert into advertise(company,salary,area,acontact,aemail,description) values('$hcompany','$hsalary','$harea','$hcontact','$hemail','$hdescription')";
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
			background-image:url("image5.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			overflow: hidden;
		}
		#form1
		{
			text-content: center;
			
		}
		.register
		{
			align-content: center;
			margin:  150px;
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
	<center>
	<div class="register" >
	<h1 style="text-align: center;"><i class="glyphicon glyphicon-edit"></i></h1>
	<h1 style="text-align: center;">Post advertisement</h1>
	<form action="" id="form1" method="post">
		<table>
			<tr>
				<td>Company:</td>
				<td><input required type="text" name="txtusername"/></td>
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
				<td>Salary:</td>
  				<td><input required type="number" name="salary"></td>
			</tr>
			<tr>
				<td>Area:</td>
				<td><input required type="text" name="area"/></td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><textarea rows="4" cols="20" name="txtaddress"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnsubmit"/></td>
			</tr>
		</table>		
	</form>
	</div>
	</center>
</body>
</html>