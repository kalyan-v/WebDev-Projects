<!DOCTYPE html>
<html>
<head>
	<title>View Books</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
	<div style="text-align: center; width:200px; margin:0 auto">
	            <br>
				<form action="profile.php" method="post">
				    <button class="btn btn-primary btn-block">Profile</button>
					<!--<input type="submit" value="View Profile" name="Profile">-->
				</form>
				<br>
				<form action="borrow.php" method="post">
				    <button class="btn btn-warning btn-block">Borrow Books</button>
					<!--<input type="submit" value="Borrow books" name="Borrow">-->
				</form>
				<br>
				<form action="return.php" method="post">
				    <button class="btn btn-success btn-block">Return</button>
					<!--<input type="submit" value="Return Books" name="Return">-->
				</form>
				<br>
				<form action="logout.php" method="post">
					<!--<?php //session_destroy(); ?>-->
					<button class="btn btn-danger btn-block">Logout</button>
					<!--<input type="submit" value="Logout" name="Logout">-->
				</form>
 			</div>
<?php
	$connect = mysqli_connect("127.0.0.1","root","");
	mysqli_select_db($connect,"Project1") or die ("Database not found");
	?>
	<h3 align=center>Maths books details </h3>
	<?php
	$query="SELECT *FROM book WHERE subject='Maths'";

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
	<hr><br>
		<h2 align=center>Physics books details </h2>
	<?php
	$query="SELECT *FROM book WHERE subject='Physics'";

     $result = mysql_query_or_die($query);
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

	<hr><br>
		<h2 align=center>Chemistry books details </h2>
	<?php
	$query="SELECT *FROM book WHERE subject='Chemistry'";

     $result = mysql_query_or_die($query);
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

	<hr><br>
		<h2 align=center>CS books details </h2>
	<?php
	$query="SELECT *FROM book WHERE subject='CS'";

     $result = mysql_query_or_die($query);
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

	<hr><br>
		<h2 align=center>English books details </h2>
	<?php
	$query="SELECT *FROM book WHERE subject='English'";

     $result = mysql_query_or_die($query);
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

<hr>
<div style="text-align: center; width:200px; margin:0 auto">
<form action="borrow.php" method="post">
    <button class="btn btn-warning btn-block">Borrow Books</button>
	<!--<input type="submit" value="Borrow books" name="Borrow">-->
</form><br>

</div>
</body>
</html>
