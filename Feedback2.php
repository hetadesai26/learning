<?php
		if (isset($_REQUEST["btnsubmit"])) {
			$connection=mysqli_connect("localhost","root","");
			mysqli_select_db($connection,"feedback");

			$huname = $_REQUEST['txtusername'];
			$hremark = $_REQUEST['txtremark'];

			$str = "insert into feedback(funame,fremark) values('$huname','$hremark')";
			mysqli_query($connection,$str );
			header("location:success.html");
	
		}
		
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

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
	<title></title>
</head>
<body>
<h1 style="text-align: center;"><i class="glyphicon glyphicon-edit"></i></h1>
	<h1 style="text-align: center;">Feedback</h1>
	<div class="register" >
	<form action="" id="form1" method="post">
		<table>
			<tr>
				<td>UserName:</td>
				<td><input required type="text" name="txtusername"/></td>
			</tr>
			<tr>
				<td>Remarks:</td>
				<td><textarea rows="4" cols="20" name="txtremark"></textarea></td>
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