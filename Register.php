<?php
		if (isset($_REQUEST["btnsubmit"])) {
			$connection=mysqli_connect("localhost","root","");
			mysqli_select_db($connection,"candidate");

			$huname = $_REQUEST['txtusername'];
			$hfname = $_REQUEST['txtfname'];
			$hlname = $_REQUEST['txtlname'];
			$hemail = $_REQUEST['txtemail'];
			$hpass = $_REQUEST['txtpassword'];
			$hcontact = $_REQUEST['txtnumber'];
			$hGender=$_REQUEST['Gender'];
			$hdob = $_REQUEST['bday'];
			$haddress = $_REQUEST['txtaddress'];
			$hqualification = $_REQUEST['txtqual'];
			$hexperience = $_REQUEST['txtexp'];

			$str = "insert into candidate(uname,fname,lname,pass,email,contact,gender,dob,address,qualification,experience) values('$huname','$hfname','$hlname','$hpass','$hemail','$hcontact','$hGender','$hdob','$haddress','$hqualification','$hexperience')";
			mysqli_query($connection,$str );
			header("location:success.html");
	
		}
		
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<title>
		Candidate Registration
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
	<h1 style="text-align: center;">Candidate Registration</h1>
	<div class="register" >
	<form action="" id="form1" method="post">
		<table>
			<tr>
				<td>UserName:</td>
				<td><input required type="text" name="txtusername"/></td>
			</tr>
			<tr>
				<td>FirstName:</td>
				<td><input required type="text" name="txtfname"/></td>
			</tr>
			<tr>
				<td>LastName:</td>
				<td><input required type="text" name="txtlname"/></td>
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
				<td>Gender:</td>
				<td><input type="radio" name="Gender" value="male" />male</td>
				</tr>
				<tr><td></td>
				<td><input type="radio" name="Gender" value="female" />female</td>
			</tr>
			
			<tr>
				<td>DOB:</td>
  				<td><input type="date" name="bday"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><textarea rows="4" cols="20" name="txtaddress"></textarea></td>
			</tr>
			<tr>
				<td>Qualification:</td>
				<td><textarea rows="4" cols="20" name="txtqual"></textarea></td>
			</tr>
			<tr>
				<td>Experience:</td>
				<td><input required type="number" name="txtexp"/></td>
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