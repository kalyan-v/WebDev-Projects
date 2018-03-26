<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript">
		function handleSelect(elm)
		{
			console.log("check");
			window.location = elm.value+".php";
		}
	</script>
</head>
<body>
<?php
	$username = $_POST["Username"];
	$password = $_POST["Password"];
	if($username && $password)
	{
		$connect = mysqli_connect("127.0.0.1","root","");
		mysqli_select_db($connect,"Project1") or die ("Database not found");
		$result = mysqli_query($connect,"SELECT * FROM user WHERE Username=$username AND Password = $password");
		$result1 = mysqli_query($connect,"SELECT password FROM user WHERE Username=$username");
		if($result && mysqli_num_rows($result)==0)
		{
			echo "<script>alert('Username or Password is incorrect')</script>";
    		?>
	    	<html>
	    	<div style="text-align:center;">
	    	<form action="home.php" method="post">
	    		<input type="submit" value="Try Again">
	    	</form>
	    	</div>
	    	</html>
	    	<?php
		}
		else if($result && mysqli_num_rows($result)>0)
		{
			session_start();
			$_SESSION["user"] = $username;
			$name = mysqli_query($connect,"SELECT username FROM user WHERE username=$username");
			$usern = mysqli_fetch_array($name);
			echo "<div style='text-align:center; color:#666666;'><h1>Welcome ".$usern['username']." !</h1><hr></div>";
			?>
			<html>
			<div style="text-align: center; width:200px; margin:0 auto;">
				<form action="profile.php" method="post">
				    <button class="btn btn-primary btn-block">View Profile</button>
					<!--<input type="submit" value="View Profile" name="Profile"> -->
				</form>
				<br>
				<form action="viewbooks.php" method="post">
				    <button class="btn btn-warning btn-block">View Books</button>
					<!--<input type="submit" value="View Books" name="Books">-->
				</form>
				<br>
				<form action="borrow.php" method="post">
				    <button class="btn btn-success btn-block">Borrow Books</button>
					<!--<input type="submit" value="Borrow books" name="Borrow">-->
				</form>
				<br>
				<form action="return.php" method="post">
				    <button class="btn btn-info btn-block">Return Books</button>
					<!--<input type="submit" value="Return Books" name="Return">-->
				</form>
				<br>
				<form action="logout.php" method="post">
				    <button class="btn btn-danger btn-block">Logout</button>
					<!--<?php //session_destroy(); ?>-->
					<!-- <input type="submit" value="Logout" name="Logout"> -->
				</form>
 			</div>
			</html>
<!-- 			<script type="text/javascript">
				function logout()
				{
					
				}
			</script> -->
			<?php


			// echo "<div style='text-align:center;'<h2><b>Subjects list</b></h2><br></div>";

			// echo '<div style = "text-align: center;margin-top:15px;">
					
			// 			<select name="subject" onchange="javascript:handleSelect(this)">
			// 				<option value = "maths">Maths</option>
			// 				<option value = "physics">Physics</option>
			// 				<option value = "chemistry">Chemistry</option>
			// 				<option value = "english">English</option>
			// 				<option value = "cs">CS</option>
			// 			</select>
			// 	</div>';
		}
	}
?>

</body>
</html>