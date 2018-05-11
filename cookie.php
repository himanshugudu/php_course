
<?php
	$value = "Test";
	$exp = time() + 5000;
	setcookie("name",$value,$exp);

	echo $_COOKIE["name"];

	$unsetcookie = time() - 5000;
	//for destroy cookie
	setcookie("name","",$unsetcookie);

?>