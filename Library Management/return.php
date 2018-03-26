<!DOCTYPE html>
<html>
<head>
	<title>Return Books</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div style="text-align: center; width:200px; margin:0 auto;">
	<br><br><br>
	<form action="return1.php" method="post">
	<label for = "bookid"><p style="font-size : 15px;">Enter the Book ID to return</p></label><br>
		<input size="23" type = "text" name="bookid" required><br><br>
		<button class="btn btn-success btn-block">Return</button>
		<!--<input type="submit" value = "Return" name = "Return"> -->
	</form><br>
	</div>
	<div style="text-align: right; margin-right:100px; margin-left: 1070px;">
				<form action="profile.php" method="post">
				    <button class="btn btn-primary btn-block">View Profile</button>
					<!--<input type="submit" value="View Profile" name="Profile">-->
				</form>
				<br>
				<form action="viewbooks.php" method="post">
				    <button class="btn btn-warning btn-block">View Books</button>
					<!--<input type="submit" value="View Books" name="Books">-->
				</form>
				<br>
				<form action="borrow.php" method="post">
				    <button class="btn btn-info btn-block">Borrow Books</button>
					<!--<input type="submit" value="Borrow books" name="Borrow">-->
				</form>
				<br>
				<form action="return.php" method="post">
				    <button class="btn btn-success btn-block">Return Books</button>
					<!--<input type="submit" value="Return Books" name="Return">-->
				</form>
				<br>
				<form action="logout.php" method="post">
					<!--<?php //session_destroy(); ?>-->
					<button class="btn btn-danger btn-block">Logout</button>
					<!--<input type="submit" value="Logout" name="Logout">-->
				</form>
 			</div>
</body>
</html>