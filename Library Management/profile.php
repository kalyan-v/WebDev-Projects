<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
		body{
			 background-image : url('https://images.unsplash.com/photo-1502979932800-33d311b7ce56?auto=format&fit=crop&w=1050&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D');
			 background-repeat : no-repeat;
			 background-size : cover;
		    }
</style>			
<body>
    <br><br><br><br><br><br><br><br><br><br>
	<div style="text-align: center; width:200px; margin:0 auto;">
				<form action="history.php" method="post">
				    <button class="btn btn-primary btn-block">My Books</button>
					<!--<input type="submit" value="View Books" name="Books">-->
				</form>
				<br>
				<form action="viewbooks.php" method="post">
				    <button class="btn btn-info btn-block">View Books</button>
					<!--<input type="submit" value="Borrow books" name="Borrow">-->
				</form>
				<br>
				<form action="borrow.php" method="post">
				    <button class="btn btn-success btn-block">Borrow Books</button>
					<!--<input type="submit" value="Return Books" name="Return">-->
				</form>
				<br>
				<form action="return.php" method="post">
				    <button class="btn btn-primary btn-block">Return Books</button>
					<!--<?php //session_destroy(); ?>-->
					<!--<input type="submit" value="Logout" name="Logout">-->
				</form>
				</br>
				<form action="logout.php" method="post" >
				    <button class="btn btn-danger btn-block">Logout</button>
		            <!--<input type ="submit" value="My books" name="history">-->
	            </form>
 			</div>
<?php
		$connect = mysqli_connect("127.0.0.1","root","");
		mysqli_select_db($connect,"Project1") or die ("Database not found");
		session_start();
		if(!$_SESSION["user"]){
			header('location:login.php');
		}
		$pavan = $_SESSION["user"];
		$query="SELECT username FROM user WHERE username =$pavan";

	function mysql_query_or_die($query) {
		$connect = mysqli_connect("127.0.0.1","root","","Project1");
	    $result = mysqli_query($connect,$query);
	    if ($result)
	        return $result;
	    else {
	        $err = mysqli_error($connect);
	        die("<br>{$query}<br>*** {$err} ***<br>");
	    }
	}
	     $result = mysql_query_or_die($query);
	     ?>
	     <div style="text-align: center;">
	     	<?php

?>
</div>
	
</body>
</html>