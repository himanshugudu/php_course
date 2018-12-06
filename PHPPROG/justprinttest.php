// Thi is report for Intake 
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
	






	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" >
	
	<script>
	$(document).ready(function() {
		$('#example').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
		});
		
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

<img src="BPCilogo.PNG" alt="BPCilogo" width="100" height="100">
<!--<h1 class="heading"> Business Process and Continues Improvement -  Resource Intake  </h1> --> 
<br>

<div class="sidenav">
  <a href="#Home">Home</a>
  <a href="#services">Intake</a>
  <a href="#clients">ROI</a>
  <a href="#contact">Reports</a>
  <a href="#contact">Help</a>
  
</div>

<div class="main">
 <!--  <h2>Sidebar</h2> -->
<p>Business Process and Continues Improvement -  Resource Intake</p> 
  
<?php
include('include/connection.php');
	if(isset($_POST['update']))
	{
		$Project_ID=$_POST['project_ID'];
		$BPCI_Pillar=$_POST['BPCI_Pillar'];
		$Project_Name=$_POST['Project_Name'];
		$Multiple_Resouce_Project=$_POST['Multiple_Resouce_Project'];
		$query="UPDATE `resourcemgt` SET `BPCI_Pillar`='".$BPCI_Pillar."',`Project Name`='".$Project_Name."',`Multiple Resouce Project`='N' WHERE `id`=$Project_ID";
		$result = $conn->query($query);
		
	}

	if(isset($_GET['delete']))
	{
		$query = " DELETE FROM resourcemgt WHERE id='".$_GET['delete']."' ";
		$result = $conn->query($query);
	}
	

$sql = "SELECT * FROM resourcemgt";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
?>
<form method="post" action="">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>project ID</th>
                <th>BPCI Pillar</th>
                <th>Project Name</th>
                <th>Multiple Resouce Project</th>
				<th>Action</th>
            </tr>
        </thead>      
<tbody>
<?php
    while($row = $result->fetch_assoc()) 
	{
		?>
		
        <tr>
			<td><p style="display:none"><input type="text" name="project_ID" value="<?php echo $row['id'] ?>"></p><?php echo $row['id'] ?></td>
			<td><input type="text" name="BPCI_Pillar" value="<?php echo $row["BPCI_Pillar"] ?>"><p style="display:none"><?php echo $row['BPCI_Pillar'] ?></p></td>
			<td><input type="text" name="Project_Name" value="<?php echo $row["Project Name"] ?>"><p style="display:none"><?php echo $row['Project Name'] ?></p></td>
			<td><input type="text" name="Multiple_Resouce_Project" value="<?php echo $row["Multiple Resouce Project"] ?>"><p style="display:none"><?php echo $row['Multiple Resouce Project'] ?></p></td>
			<td>
				
				<input type="submit" name="update" class="btn" value="update">
				<a class="btn btn-danger" href="justprinttest.php?delete=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-trash"></span></a>
				
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