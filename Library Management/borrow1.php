<!DOCTYPE html>
<html>
<head>
	<title>Return Successful</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript">
		function handleSelect(elm)
		{
			console.log("check");
			window.location = elm.value+".php";
		}
	</script>
<style>
#book{
	color:green;
	font-size : 15px;
	text-align :center;
}
</style>
	</head>

<body>
<?php
	session_start();
	$bookid = $_POST["bookid"];
	$user = $_SESSION["user"];
	$connect = mysqli_connect("127.0.0.1","root","");
	mysqli_select_db($connect,"Project1") or die ("Database not found");
	$qty = mysqli_query($connect,"SELECT quantity FROM book WHERE bookid=$bookid");
	$quantity = mysqli_fetch_array($qty);
	$name = mysqli_query($connect,"SELECT bookname FROM book WHERE bookid=$bookid");
	$bname = mysqli_fetch_array($name);
	if($quantity['quantity'] > 0)
	{
			mysqli_query($connect,"INSERT INTO borrow VALUES ($bookid,$user)");
			mysqli_query($connect,"UPDATE book SET quantity = quantity - 1 WHERE bookid=$bookid");
			echo ("<br>");
			echo ("<div id='book'>");
			echo "The book ".$bname['bookname']." is adopted successfully.";
			echo ("</div>");
	}
	else
	{
		echo "<script>alert('Required book not available')</script>";
	}
?>
<div style="text-align: center; width:200px; margin:0 auto;">
    <br><br><br><br><br>
	<form action="borrow.php" method="post">
	    <button class="btn btn-danger btn-block">Go Back</button>
		<!--<input type="submit" value="Go back" name="Borrow">-->
	</form>
</div>
</body>
</html>