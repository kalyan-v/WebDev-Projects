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
		$result = mysqli_query($connect,"SELECT * FROM USER WHERE Username=$username AND Password = $password");
		$result1 = mysqli_query($connect,"SELECT password FROM USER WHERE Username=$username");
		if($result && mysqli_num_rows($result)==0)
		{
			echo "<script>alert('Username or Password is incorrect')</script>";
			?>
	    	
			<div style="text-align:center;">
				<form action="home.php" method="post">
					<button class="btn btn-warning btn-lg">Try Again</button>
				</form>
			</div>
	    	
	    	<?php
		}
		else if($result && mysqli_num_rows($result)>0)
		{
			session_start();
			$_SESSION["user"] = $username;
			header("Location:login.php");
		}
	}
?>
</body>
</html>