<!DOCTYPE html>
<html>
<head>
	<title>physics</title>
</head>
<body>
	<h2 align=center>Physics books details </h2>
    <hr>
	<?php

	$connect = mysql_connect("127.0.0.1","root","");
	mysql_select_db("Project1") or die ("Database not found");
	$query="SELECT *FROM book WHERE subject='Physics'";

	function mysql_query_or_die($query) {
	    $result = mysql_query($query);
	    if ($result)
	        return $result;
	    else {
	        $err = mysql_error();
	        die("<br>{$query}<br>*** {$err} ***<br>");
	    }
	}
     $result = mysql_query_or_die($query);
	echo("<table>");
	$first_row = true;
	while ($row = mysql_fetch_assoc($result)) {
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
	<div style = "text-align: center;">
		<form action="borrow.php" method="post">
			<input type="submit" value="Borrow a book">
		</form>
	</div>
    <!--script type="text/javascript">
    	function borrow() 
    	{
    		document.getElementById("demo").innerHTML = "Hello World";
       	}
    </script-->
</body>
</html>