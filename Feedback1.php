<?php
			$connection=mysqli_connect("localhost","root","");
			mysqli_select_db($connection,"feedback");

		/*	if (isset($_REQUEST["fid"])) {
				$id = $_REQUEST["fid"];
			}*/

			$str = "select * from feedback";
			$res = mysqli_query( $connection,$str );
			//data type of result is object 
		
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style>
		body
		{
			background-image:url("image2.jpg");
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
			margin-left: 40px;
			margin-bottom: 30px;
		}
		.feed
		{
			align-content: center;
			margin-top:  10px;
			margin-left: 500px;
			margin-right: 500px;
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
<header>
   			<h1>Online recruitment</h1>
		</header>
<article>
	<h3 id="h" style="text-align: center;"><a href="index.html"><i class="glyphicon glyphicon-home"></i>Home</a></h3>
	<div class="feed">
	<h3>Feedback</h3>
	<table id="table1">
			<tr>
				<td><b>UserName</b></td>
				<td><b>Remarks</b></td>
			</tr>

			<?php
		  		while($row = mysqli_fetch_array($res))
		  		{
			?>

			<tr>
				<td><?php echo $row["funame"] ?></td>
				<td><?php echo $row["fremark"] ?></td>
			</tr>
		
			<?php
			   }  		
			?>
		</table>
		</div>
		</article>
		<footer>Copyright &copy; OnlineRecruit.com</footer>
</body>
</html>