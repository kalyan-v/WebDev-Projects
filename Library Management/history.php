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
	  #customers {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
      }

	  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
	</style>
</head>
<body>
<?php
session_start();
$user = $_SESSION['user'];
$connect = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($connect,"Project1") or die ("Database not found");
$result =  mysqli_query($connect,"SELECT borrow.bookid,bookname,author,subject FROM borrow,book WHERE username = $user AND borrow.bookid = book.bookid");

function mysql_query_or_die($result) {
		 if ($result)
	        return $result;
	    else {
	        $err = mysqli_error($connect);
	        die("<br>{$result}<br>*** {$err} ***<br>");
	    }
}


$result1 = mysql_query_or_die($result);
echo("<table id='customers'>");
$first_row = true;
while ($row = mysqli_fetch_assoc($result)) {
    if ($first_row) {
        $first_row = false;
        // Output header row from keys.
        echo '<tr>';
        foreach($row as $key => $field) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';
    }
    echo '<tr>';
    foreach($row as $key => $field) {
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
echo("</table>");
?>
	<div style="text-align: center; width:200px; margin:0 auto">
	    <br><br><br><br><br><br><br><br><br>
		<form action="profile.php" method="post">
		    <button class="btn btn-danger btn-block">Go Back</button>
			<!--<input type="submit" value="Go back" name="history">-->
		</form>
	</div>
</body>
</html>
