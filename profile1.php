<?php 
	include('session.php');
	$connection=mysqli_connect("localhost","root","");
			mysqli_select_db($connection,"candidate");
			$str = "select * from candidate where uname='$login_session'";
			$res = mysqli_query($connection,$str);
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
		body
		{
			background-image:url("image5.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			overflow: auto;
		}
		article {
				padding: 1em;
				
				}
		#table1
		{
			align-content: center;
			background-color: white;
			color: black;
			margin-top:10px;
			margin-right:70px;
			margin-left: 70px;
			margin-bottom: 30px;
		}
		tr
		{
			border-bottom:ridge;
			padding-right: 20px;
		}
		header 
		{
			padding: 0.5em;
			color: white;
			background-color: black;
			clear: left;
			text-align: center;
		}
		
.btn
		{
			text-decoration:none;
		}
		.feed
		{
			align-content: center;
			margin-top:  5px;
			margin-left: 500px;
			margin-right: 450px;
			text-align: center;
			padding-top: 0px;
			padding-bottom: 20px;
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
</head>
<body>
<header>
   			<h1>Online recruitment</h1>
   			<a class="btn" href="logout.php"><i class="glyphicon glyphicon-user"><br>Logout</i></a>
   			<a class="btn" href="search.php"><i class="glyphicon glyphicon-search"><br>Search</i></a>
		</header>
<article>
	
	<div class="feed">
	<h3><b>Profile</b></h3>
	<table id="table1">
		<?php 
			while($row = mysqli_fetch_array($res))
		  		{
			?>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>UserName:</b></td>
				<td><?php echo $row["uname"] ?></td>
				<td><hr></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>First Name:</b></td>
				<td><?php echo $row["fname"] ?></td>
				<td><hr></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>Last Name:</b></td>
				<td><?php echo $row["lname"] ?></td>
				<td><hr></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>Email:</b></td>
				<td><?php echo $row["email"] ?></td>
				<td><hr></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>Contact:</b></td>
				<td><?php echo $row["contact"] ?></td>
				<td><hr></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>Gender:</b></td>
				<td><?php echo $row["gender"] ?></td>
				<td><hr></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>DOB:</b></td>
				<td><?php echo $row["dob"] ?></td>
				<td><hr></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>Address:</b></td>
				<td><?php echo $row["address"] ?></td>
				<td><hr></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>Qualification:</b></td>
				<td><?php echo $row["qualification"] ?></td>
				<td><hr></td>
			</tr>
			<tr>
				<td><i class="glyphicon glyphicon-pencil"></td>
				<td><b>Experience:</b></td>
				<td><?php echo $row["experience"] ?></td>
				<td><hr></td>
			</tr>
			<?php
			   }  		
			?>
		</table>
		</div>
		</article>
</body>
</html>
<body>

</div>
</body>
</html>