<?php
if(isset($_GET['search_text']))
{
	$search_text=$_GET['search_text'];
	if(!empty($search_text)){
		include "connect.php";
		$sql = "SELECT name,username,email,phone from users where username like'%".$search_text."%'";
		$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        	echo "<li><a role='menuitem' tabindex='-1' href='viewprofile.php?username=".$row['username']."'><div>".$row['username']."</div></a></li>";
	}
}
	else echo "<li>Not found</li>";
}
}
?>