
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" >
	<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
	
	</script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
<body>
<div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>

<div class="main">
  <h2>Sidebar</h2>
  <p>This sidebar is of full height (100%) and always shown.</p>
  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mithun";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	if(isset($_POST['update']))
	{
		$id=$_POST['id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$query="UPDATE `MyGuests` SET `firstname`='".$firstname."',`lastname`='".$lastname."' WHERE `id`=$id";
		
		
		
		
		$result = $conn->query($query);
	}

	if(isset($_GET['delete']))
	{
		$query = " DELETE FROM MyGuests WHERE id='".$_GET['delete']."' ";
		$result = $conn->query($query);
	}
	

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
?>
<form method="post" action="">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
				<th>Action</th>
            </tr>
        </thead>      
<tbody>
<?php
    while($row = $result->fetch_assoc()) 
	{
		?>
		
        <tr>
			<td><p style="display:none"><input type="text" name="id" value="<?php echo $row['id'] ?>"></p><?php echo $row['id'] ?></td>
			<td><input type="text" name="firstname" value="<?php echo $row["firstname"] ?>"><p style="display:none"><?php echo $row['firstname'] ?></p></td>
			<td><input type="text" name="lastname" value="<?php echo $row["lastname"] ?>"><p style="display:none"><?php echo $row['lastname'] ?></p></td>
			<td>
				<input type="submit" name="update" value="update">
				<a href ="display.php?delete=<?php echo $row['id'];?>">delete</a>
				
			</td>
			
 		</tr>
<?php		
    }
?>
</tbody>
</table>
</form>
<?php
	} else {
		echo "0 results";
	}
	
?>
</div>
</body>

</html>