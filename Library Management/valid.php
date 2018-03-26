<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php
	// $name = $_POST["Name"];
	$username = $_POST["Username"];
	$password = $_POST["Password"];
	$confpassword = $_POST["ConfirmPassword"];
	if($password != $confpassword)
	{
    	echo "<script>alert('Passwords does not match')</script>";
    	?>
    	<html>
    	<form action="register.php" method="post">
    		<input type="submit" value="Try Again">
    	</form>
    	</html>
    	<?php
	 }
	else
	{
		$connect = mysqli_connect("127.0.0.1","root","");
		mysqli_select_db($connect,"Project1") or die ("Database not found");

		mysqli_query($connect,"INSERT INTO user VALUES($username,$password)");
		echo "<script>alert('User registered successfully')</script>";
    		?>
	    	<html>
			<br><br><br>
	    	<div style="text-align:center;">
	    	<form action="home.php" method="post">
	    		<button class="btn btn-danger btn-md">Home</button>
	    	</form>
	    	</div>
	    	</html>
	    	<?php
	}
?>
</body>
</html>
