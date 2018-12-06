<!DOCTYPE html>
<html>
<head>

	<title>BP&CI Project Resource Intake Form </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

.heading {
		text-align: center;
		}

			background-image: url("BPCilogo.PNG");
			background-repeat: no-repeat;
			background-position: right top;
			margin-right: 100px;
			background-attachment: fixed;

</style>
	<?php include('include/connection.php'); ?>

</head>
<body>
	<img src="BPCilogo.PNG" alt="BPCilogo" width="100" height="100">
	<div class="sidenav">
		<a href="#Home">Home</a>
		<a href="#clients">ROI</a>
		<a href="#contact">Reports</a>
		<a href="#contact">Help</a>
	</div>
	<div class="main">
		<h1 class="heading"> Business Process and Continues Improvement  </h1>
		<h2 class="heading"> BP&CI Project Resource Intake Form </h2>
		<form action "recordchange.php" id="queations" method="post" name="queations" autocomplete="on" >
			<fieldset >
				<legend><h1>Mandatory Search Data </h1></legend>
				<label for="Project_ID" > Project ID </label> 
				<?php
				$sql = "SELECT * FROM resourcemgt";
				$result = $conn->query($sql);
				?>
				<select name="search_id">
				<?php
				while($row = $result->fetch_assoc()) 
					{
				?>
					<option value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?></option>
				<?php		
					}
				?>
				</select>
				<br>
				<br>
				<label for "Project_Name" > Project Name </label>
				<input type ="Search" name="projectname" placeholder="Search.." >  
				<br>
				<br>
				<input type="submit" name="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
			</fieldset>
		</form>
		<br>
		
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
				 <?php
					if(isset($_POST['submit'])){
						$id=$_POST['search_id'];
						$sql = "SELECT * FROM resourcemgt WHERE id = $id";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc()) 
						{
							echo $row['BPCI_Pillar'];
						}
					}
				?>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			  </div>
			  
			</div>
		</div>
		
		
		
		
	</div>
</body>
</html>
