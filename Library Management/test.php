<html>
<body>
<?php
$conn=odbc_connect('Source','root','');
if ($conn)
{
	echo "hello";
}
if (!$conn)
{
	exit("Connection failed".$conn);
}
?>
</body>
</html>