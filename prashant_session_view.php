<?php
	session_start();
	$name = $_SESSION['Name'];
	echo $name;
	echo "<a href='unset.php'> unset</a>";

?>