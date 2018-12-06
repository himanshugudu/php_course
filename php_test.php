<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<div >
<h1></h1>
	<form action="#" method="post">
		<input type="text" name="oldname">
		<input type="text" name="changename">
		<input type="text" name="updatedname">
		<input type="submit" name="submit" value="SUBMIT">
	</form>

</div>
<?php
	if(isset($_REQUEST['submit']))
	{
		$oldname=$_REQUEST['oldname'];
		$changename=$_REQUEST['changename'];
		$updatedname=$_REQUEST['updatedname'];
		echo str_replace($oldname, $changename, $updatedname);
	}
?>


</body>
</html>