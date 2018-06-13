
<?php
	session_start();
	if (isset($_REQUEST["btnsubmit"])) 
	{
		$tmin=$_REQUEST["txmin"];
		$tmax=$_REQUEST["txmax"];
		$_SESSION['min']=$tmin;
		$_SESSION['max']=$tmax;
		if($tmin!='' && $tmax!='')
		{
		header("Location: Salary.php");
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style>
		body
		{
			background-image:url("image4.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			overflow: hidden;
		}
		#table1,td
		{
			text-content: center;
			background-color: grey;
			border:solid;
			color: black;
			margin-top:30px;
			margin-right:40px;
			margin-left: 440px;
			margin-bottom: 30px;
		}
		.feed
		{
			align-content: center;
		/*	margin-top:  10px;
			margin-left: 500px;
			margin-right: 500px;
		*/	text-align: center;
			padding-top: 100px;
			padding-bottom: 100px;
			margin-top: 30px;
			background-color: #ffffff;
 			border: 1px solid black;
 		    opacity: 0.6;
  			filter: alpha(opacity=60);
		}
		.btn
		{
			color: white;
		}

	</style>
	<title></title>
</head>
<body>
<header>
   			<h1>Online recruitment</h1>
   			<a class="btn" href="profile1.php"><i class="glyphicon glyphicon-user"><br>Profile</i></a>
			<a class="btn" href="index.html"><i class="glyphicon glyphicon-home"><br>Home</i></a>
			<a class="btn" href="logout.php"><i class="glyphicon glyphicon-user"><br>Logout</i></a>
		</header>
<article>
	
	<center>
	<div class="feed">
	<h3>Search By Salary</h3>
	<form>
	Minimum:<input type="number" name="txmin">
	Maximum:<input type="number" name="txmax">
	<input type="submit" name="btnsubmit">
	</form>
	</div>
	</article>
		</center>
		<footer>Copyright &copy; OnlineRecruit.com</footer>
</body>
</html>