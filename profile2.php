<?php
	include('session1.php');
	$connection=mysqli_connect("localhost","root","");
			mysqli_select_db($connection,"company");
			$str = "select * from company where cuname='$login_session'";
			$res = mysqli_query($connection,$str);
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link rel="stylesheet" href="css1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
		body
		{
			background-image:url("image5.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			overflow: hidden;
		}
		#table1
		{
			align-content: : center;
			background-color: white;
			color: black;
			margin-top:30px;
		/*	margin-right:100px;
			margin-left: 20px;*/
			margin-bottom: 30px;
			text-align: center;
		}
		tr
		{
			border-bottom:ridge;
		}
		.feed
		{
			align-content: center;
			margin-top: 50px;
			margin-left: 500px;
			margin-right: 500px;
		/*	margin-left: 500px;
			margin-right: 550px;
			text-align: center;*/
		/*	padding-top: 10px;
			padding-bottom: 20px;
			padding-left: 30px;
		*/	background-color: #ffffff;
 			border: 1px solid black;
 		    opacity: 0.6;
  			filter: alpha(opacity=60);
		}
		.btn 
		{
			color: white;
		}


	</style>
</head>
<body>
<header>
   			<h1>Online recruitment</h1>
   			<a class="btn" href="logout.php"><i class="glyphicon glyphicon-user"><br>Logout</i></a>
   			<a class="btn" href="post.php"><i class="glyphicon glyphicon-edit"><br>Post</i></a>
		</header>
<article>
<center>
	<div class="feed">
	<h2><b>Profile</b></h2>
	<table id="table1">
		<?php 
			while($row = mysqli_fetch_array($res))
		  		{
			?>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>UserName:</b></td>
				<td><?php echo $row["cuname"] ?></td>
				<td><hr></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>Email:</b></td>
				<td><?php echo $row["cemail"] ?></td>
				<td><hr></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>Contact:</b></td>
				<td><?php echo $row["ccontact"] ?></td>
				<td><hr></td>
			</tr>
		
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>Starting date:</b></td>
				<td><?php echo $row["cdate"] ?></td>
				<td><hr></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>Address:</b></td>
				<td><?php echo $row["caddress"] ?></td>
				<td><hr></td>
			</tr>
			<?php
			   }  		
			?>
		</table>
		</div>
		</article>
		</center>
		<footer>Copyright &copy; OnlineRecruit.com</footer>
</body>
</html>
<body>

</div>
</body>
</html>