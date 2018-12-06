<!DOCTYPE html>
<html>
<head>

	<title>BP&CI Program Resource Function </title>
<style>
		*{padding:0px;
		margin:0;}
	body {
	background-color:#FFFFFF;}

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
	font-size: 30px;
	text-align: center;
	margin-top: 29px;
	margin-bottom: 45px;
	float-center;
	}


	.card {
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
		transition: 0.3s;
		border: 1px solid;
		margin: 91px;
		width: 211px;
		height: 120px;
		float: left;
		
	}
	.section_card{
		   border: 1px solid;
		padding-left:6px;
		padding: center;
		height: 230px;
		margin: 25px;
		width: 1190px;
	}



	.card:hover {
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4);
	}

	.container {
		padding: 4px 30px;
		margin :auto;
		
	}
	.profunction{
	width:65%;
	margin:auto;

	}
	.pmologo {
	width :20%;
	height:220px;

	}
	.pmologo_image{
		border:1px solid;
		width:65%;
		margin:86px;
		padding:6px;
		float:center;
	}

</style>

<style>

body {
   font-family: 'Lato', sans-serif;
}

.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}
.overlay_sidebar{
	float:left;
	
}
.main {
	font-size: 20px;
	top: 15px;
    right: 35px;
}
.heading_page {
	
	font-size: 40px;
	top: 15px;
    right: 35px;
	
}
.head{
	float:right;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}

</style>

<script>

function displayDate() {
    <!-- document.getElementById("demo").innerHTML = Date(); -->
	
}
</script>
</head>




<body>

<div class="container-fluid">
	<div id="myNav" class="overlay">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <div class="overlay-content">
		<a href="BP&CI_Project_Main.html">Home</a>
		<a href="#">Intake</a>
		<a href="#">Reports</a>
		<a href="#">Help</a>
	  </div>
	</div>
	<div class="col-md-2">
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
	</div>
</div>

<i class="fa fa-address-book" aria-hidden="true"></i>



<div class="heading">
	<h1 > Resource Management  </h1>

</div>


<div = class="pmologo_image"> 
<a href="BP&CI_Project_Resource_Intake_Formver1.4.php" onclick="displayDate()">
	<img src="resource _mainpic.png"  class="pmologo" alt="Pmoprocess" width="120" height="120">
	<div class="card">
	  <img src="Resource_intake_add.png" alt="Resource_intake_add" style="width:20%">
	  <div class="container">
		<h4><b>Resource Intake </b></h4> 
		  </div>
	</div>
	
	<div class="card">
	<a href="Resource_report.php" onclick="displayDate()">
	  <img src="report_resource.png" alt="report_resource" style="width:20%">
	  <div class="container">
		<h4><b>Edit / Report </b></h4> 
		  </div>
	</div>
</div>






<div class="section_card">

	<!--<a href="BP&CI_Project_Resource_Intake_Form%20ver1.1.php" onclick="displayDate()">  -->
	<div class="card">
	  <img src="Resourcemgt.png" alt="Resourcemgt" style="width:20%">
	  <div class="container" id="demo">
	  <h4><b># of Program </b></h4>
		  </div>
	</div>
	</a>

	<div class="card">
	  <img src="Investmgt.png" alt="Investmgt" style="width:20%">
	  <div class="container">
		<h4><b>Total FTE </b></h4> 
		  </div>
	</div>

	<div class="card">
	  <img src="Prjinput.png" alt="Prjinput" style="width:20%">
	  <div class="container">
		<h4><b>Total FTE Hours </b></h4> 
		  </div>
	</div>

<div>

	<br>
	
&nbsp;
	

&nbsp;

</body>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "20%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

</html>

