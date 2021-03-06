<!DOCTYPE html>
<html>
<head>

	<title>BP&CI Project Resource Intake Form </title>
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" >
	
	<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
	</script>
	
	
<style>
		*	{
			padding:0px;
			margin:0px;}
		body {
		<!--background-color:#196F3D; -->
		 height: 800px;
		   background: linear-gradient(to bottom, #33ccff 0%, #D3D3D3 96%);
		}

		ul {
			list-style-type: none;
			margin: 0;
			padding: auto;
			font-size:24px;
			overflow: hidden;
			background-color: #1a0000	;
		}

		li {
			float: left;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 16px;
			text-decoration: none;
		}

		li a:hover {
			background-color: #867979;
		}

			.save{
		border-color:yellow ;
		width:30px;
		float-center;
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

<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 120px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 2px 6px 4px 14px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 100px; /* Same as the width of the sidenav */
    font-size: 16px; /* Increased text to enable scrolling */
    padding: 10px 40px;
}

@media screen and (max-height: 150px) {
    .sidenav {padding-top: 10px;}
    .sidenav a {font-size: 8px;}
}
</style>

</head>
<body>
<img src="BPCilogo.PNG" alt="BPCilogo" width="100" height="100">
<h1 class="heading"> Business Process and Continues Improvement -  Resource Intake  </h1>
<br>
<div class="sidenav">
  <a href="#Home">Home</a>
  <a href="#Project Intake">Project Intake</a>
  <a href="#ROI& Investment Intake">ROI& Investment Intake</a>
  <a href="#Reports">Reports</a>
  <a href="#Help">Help</a>
</div>

<div class="main">
  

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="bpci";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM resourcemgt";
$result = $conn->query($sql);
//print_r($sql);
	
    // output data of each row
?>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>BPCI Pillar</th>
                <th>Project Name</th>
                <th>Project ID</th>
               <!-- <th>Business Owner</th> -->
              <!--  <th>Executive Sponsor</th> -->
               <!--  <th>Approval Status</th> -->
                <!--<th>Lead</th> -->
                <th>Multiple Resouce Project</th>
                <th>Assigned First Name</th>
                <th>Resource PM1 Start Date</th>
                <th>Resource-PM1 End Date</th>
                <th>Assigned First Total Hrs</th>
               <th>Assigned Second Name</th>
                <th>Resource PM2 Start Date</th>
                <th>Resource PM2 End date</th>
                <th>Assigned Second Total Hrs</th>
                <th>Assigned Third Name</th>
                <th>Resource PM3 Start Date</th>
                <th>Resource PM3 End Date</th>
                <th>Assigned Third Total Hrs</th>
                <th>Total Project Hrs</th>
                <th>Project Start Date</th>
                <th>Target Completion</th>
                <th>Project Status</th> 
      
            </tr>
        </thead>      
<tbody>
<?php
    while($row = $result->fetch_assoc()) 
	{
		?>
		
        <tr>
		<td><?php echo $row["BPCI Pillar"] ?></td>
		<td><?php echo $row["Project Name"] ?></td>
		<td><?php echo $row["Project ID"] ?></td>
		<!-- <td><?php echo $row["Business Owner"] ?></td> -->
		<!--<td><?php echo $row["Executive Sponsor"] ?></td> -->
		<!-- <td><?php echo $row["Approval Status"] ?></td> -->
		<!-- <td><?php echo $row["Lead"] ?></td> -->
		<td><?php echo $row["Multiple Resouce Project"] ?></td>
		<td><?php echo $row["Assigned First Name"] ?></td>
		<td><?php echo $row["Resource PM1 Start Date"] ?></td>
		<td><?php echo $row["Resource-PM1 End Date"] ?></td>
		<td><?php echo $row["Assigned First Total Hrs"] ?></td>
		<td><?php echo $row["Assigned Second Name"] ?></td>
		<td><?php echo $row["Resource PM2 Start Date"] ?></td>
		<td><?php echo $row["Resource PM2 End date"] ?></td>
		<td><?php echo $row["Assigned Second Total Hrs"] ?></td>
		<td><?php echo $row["Assigned Third Name"] ?></td>
		<td><?php echo $row["Resource PM3 Start Date"] ?></td>
		<td><?php echo $row["Resource PM3 End Date"] ?></td>
		<td><?php echo $row["Assigned Third Total Hrs"] ?></td>
		<td><?php echo $row["Total Project Hrs"] ?></td>
		<td><?php echo $row["Project Start Date"] ?></td>
		<td><?php echo $row["Target Completion"] ?></td>
		<td><?php echo $row["Project Status"] ?></td>
		
		
		 
				
		
		
		
		</tr>
<?php
		
    }
	
?>
</tbody>
</table>
</div>
</body>






<!-- <ul> -->
  <!-- <li><a href="#home">Resource Management</a></li> -->
  <!-- <li><a href="#Investment Management">Investment Management</a></li> -->
  <!-- <li><a href="#ROI Management">ROI Management</a></li> -->
  <!-- <li><a href="#Portfolia Input tool">Portfolia Input tool</a></li> -->
  <!-- <li><a href="#Help">Help</a></li> -->
<!-- </ul> -->
<!-- <br> -->

<!-- <h2 class="heading"> BP&CI Project Resource Intake Form </h2> -->

<!-- <!-- <form  method="post" action ="recordchange.php"> --> -->

<!-- <form action "recordchange.php" id="queations" method="post" name="queations" autocomplete="on" > -->

<!-- <fieldset > -->
<!-- <legend> <h1> Mandatory Search Data </h1> </legend> -->

<!-- <label for "Project_ID" > Project ID </label> <input type="text" name="projectid" placeholder="Search.."> -->

<!-- <br> -->
<!-- <br> -->
<!-- <label for "Project_Name" > Project Name </label><input type ="Search" name="projectname" placeholder="Search.." >   -->
<!-- <br> -->
<!-- <br> -->
<!-- <h4>  BPCI Pillar </h4> -->
<!-- <select name =" BPCI_Pillar" id = "BPCI_Pillar"> -->
<!-- <optgroup label  ="BPCI_Pillar"> -->

<!-- <option value= "">  </option> -->
<!-- <option value= "Analytics"> Analytics </option> -->
<!-- <option value= Business_Transofrmation> Business Transofrmation </option> -->
<!-- <option value= Change_Management> Change Management </option> -->

<!-- </optgroup> -->

<!-- </select> -->
<!-- <p id="demo"></p> -->
<!-- <button onclick ='myfunctionmadsearch()'class ="search"> Search </button>  -->

<!-- <br> -->
<!-- <br> -->

<!-- </fieldset> -->
<!--<fieldset>
<legend><h1> Resource Information: </h1> </legend>

<label for "lead"> <b>Project Lead </label>
<select name ="lead" id ="Lead" >
<optgroup label  ="Pillar Lead">
<option value= Sudhish_Vyas> Sudhish Vyas </option>
<option value= Nikolai_Anderson> Nikolai Anderson </option>
<option value= Rohit_Talwar> Rohit Talwar </option>
<option value= Sushil_Vundavalli> Sushil Vundavalli </option>
</optgroup>
</select>

<br>
<br>
<label for "Multiple_Resource_Project "> Multiple Resource Project </label> <input type ="checkbox" value ="Multiple_Resource_Project " id ="Multiple_Resource_Project" >  <br>

<br>

<label for "PM_1" > Resource PM </label>  
<select name ="PM_1" id ="PM_1" >

<br>
<optgroup label  ="Resource One- PM">
<br>
<option value= Sudhish_Vyas> Sudhish Vyas </option>
<option value= Nikolai_Anderson> Nikolai Anderson </option>
<option value= Rohit_Talwar> Rohit Talwar </option>
<option value= Sushil_Vundavalli> Sushil Vundavalli </option>
<option value= Lakshmi_Swaminathan> Lakshmi Swaminathan </option>
<option value=  Lakshmi_Govindankutty> Lakshmi Govindankutty</option>
<option value= Carlotta_Musu> Carlotta Musu </option>
<option value= Amal_Abraham> Amal Abraham </option>
<option value= Sathya_G> Sathya G </option>
<option value= Mithun Patil> Mithun Patil </option>
<option value= Sushil_Vundavalli> Sushil Vundavalli </option>
</optgroup>
</select>
<label for "FR_percentage" > First Resource  percentage </label> <input type = "Number" id="Percentage" name ="FR_percentage">  
<br>
<br>


<label for "PM_2" > Resource PM Second </label>  
<select name ="PM_2" id ="PM_2" >

<br>
<optgroup label  ="Resource second- PM">
<br>
<option value= Sudhish_Vyas> Sudhish Vyas </option>
<option value= Nikolai_Anderson> Nikolai Anderson </option>
<option value= Rohit_Talwar> Rohit Talwar </option>
<option value= Sushil_Vundavalli> Sushil Vundavalli </option>
<option value= Lakshmi_Swaminathan> Lakshmi Swaminathan </option>
<option value=  Lakshmi_Govindankutty> Lakshmi Govindankutty</option>
<option value= Carlotta_Musu> Carlotta Musu </option>
<option value= Amal_Abraham> Amal Abraham </option>
<option value= Sathya_G> Sathya G </option>
<option value= Mithun Patil> Mithun Patil </option>
<option value= Sushil_Vundavalli> Sushil Vundavalli </option>
</optgroup>
</select
<label for "SNR_percentage" > Second Resource  percentage </label> <input type = "Number" id="Percentage" name ="SNR_percentage">  

<br>
<br>
<br>
<label for "project_startdate" > Project start Date </label> <input type = "date" id="Project_startdate" name ="project_startdate"> 
<br>
<br>
<label for "Project_enddate" > Project End Date </label> <input type = "date" id="Project_enddate" name ="Project_enddate"> 
<br>
<br>

<label> Execution in days</label>
<br>
<br>

<label> Project Status </label>




</fieldset>-->
<br>
<!--<button class ="Save"> Save</button>
<button class ="Clear"> Clear</button>





<br>
<br>
<br>



<input type="submit" value="send">


</form>-->


<!-- </body> -->

<!-- <script> -->
<!-- function myfunctionmadsearch(){ -->
  <!-- document.getElementById("demo").innerHTML = "Hello World"; -->
<!-- } -->
<!-- </script> -->



</html>
