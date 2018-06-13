<?php
			session_start();
			$name= $_SESSION['name'];			
			$connection=mysqli_connect("localhost","root","");
			mysqli_select_db($connection,"advertise");

			if (isset($_REQUEST["id"])) {
				$id = $_REQUEST["id"];
			}

			$str = "select * from advertise where company='$name'";
			global $res;
			$res = mysqli_query($connection,$str);
		
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
			padding-top: 10px;
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
	<h3>Search By Company</h3>
		<table id="table1">
				<tr>
				<td><b>Id</b></td>
				<td><b>Company</b></td>
				<td><b>Salary</b></td>
				<td><b>Area</b></td>
				<td><b>Contact</b></td>
				<td><b>Email</b></td>
				<td><b>Description</b></td>
			</tr>
			<?php
		  		while($row = mysqli_fetch_array($res))
		  		{
		  	?>
			<tr>
				<td><?php echo $row["id"] ?></td>
				<td><?php echo $row["company"] ?></td>
				<td><?php echo $row["salary"] ?></td>
				<td><?php echo $row["area"] ?></td>
				<td><?php echo $row["acontact"] ?></td>
				<td><?php echo $row["aemail"] ?></td>
				<td><?php echo $row["description"] ?></td>
			</tr>";
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