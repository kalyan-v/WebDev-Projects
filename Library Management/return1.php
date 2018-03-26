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
</head>
<style>
 #return{
	 color : green;
	 font-size : 15px;
	 text-align: center;
 }
</style>
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
	$books = "SELECT bookid from borrow where username=$user";
	$books1 = mysqli_query($connect,$books);
	$i=0;$flag=0;
	while ($row = mysqli_fetch_assoc($books1)) 
	{
		
		foreach($row as $key => $field) 
		{
			if(htmlspecialchars($field) == $bookid)
			{
				$flag=1;
				//echo "Yes";
	 			mysqli_query($connect,"DELETE FROM borrow WHERE bookid=$bookid");
	 			mysqli_query($connect,"UPDATE book SET quantity = quantity + 1 WHERE bookid=$bookid");
				echo ("<br>");
				echo ("<div id='return'>");
	 			echo "The book ".$bname['bookname']." is returned successfully.";
				echo ("</div>");
				echo "<br><br><br><br>";
	 			break;
			}
		}
		

	}
	
	if($flag==0)
	{
		echo "sai";
	}
	

	// foreach($books1 as $i)
	// {
	// 	if($i == $bookid)
	// 	{
	// 			echo "Yes";
	// 			mysql_query("DELETE FROM borrow WHERE bookid=$bookid");
	// 			mysql_query("UPDATE book SET quantity = quantity + 1 WHERE bookid=$bookid");
	// 			echo "The book ".$bname['bookname']." is returned successfully.";
	// 			break;
	// 	}
	// 	// else
	// 	// {
	// 	// 	echo "no";
	// 	// }
	// }
?>  
	
	<div style="text-align: center; width:200px; margin:0 auto;">
		<form action="return.php" method="post">
		     <button class="btn btn-danger btn-block">Go Back</button>
			<!--<input type="submit" value="Go back" name="Return">-->
		</form>
	</div>
</body>
</html>