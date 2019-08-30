<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SHOW DATABASES";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<ul>";
    while($row = mysqli_fetch_assoc($result)) {
		echo "<li>".$row['Database']."</li>" ;
		$conn1 = mysqli_connect($servername, $username, $password, $row['Database']);
		$sql1 = "SHOW TABLES";
		$result1 = mysqli_query($conn1, $sql1);
		if (mysqli_num_rows($result1) > 0) {
			echo "<ul>";
			while($row1 = mysqli_fetch_assoc($result1)) {
				$a=$row['Database'];
				echo "<li>".$row1['Tables_in_'.$a]."</li>" ;
			}
			echo "</ul>";
		} else {
			echo "0 results";
		}
    }
	echo "</ul>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
