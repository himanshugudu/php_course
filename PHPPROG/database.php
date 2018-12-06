<?php
	
	
	// class database
	// {
		
		// public function execute()
		// {
			 // $servername = "localhost";
			 // $username = "root";
			 // $password = "";

			 // $conn = new mysqli($servername, $username, $password);
			
			 // $abc ="CREATE DATABASE mithun";
			// if(mysqli_query($conn,$abc))
			// {
				// if(mysqli_query($conn,$abc))
				// {
					// echo "database created";
				// }
				// else{
					// echo "not created database";
				// }
			// }else{
				// echo "The database name is already created";
			// }
		// }
	// }
	// $obj = new database();
	// $obj->execute();
	
	
			$servername = "localhost";
			 $username = "root";
			 $password = "";
			$db="mithun";
			 $conn = new mysqli($servername, $username, $password,$db);
			
			 $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
			if(mysqli_query($conn,$sql))
			{
				
				echo "Table created";
			}else{
				echo "The Table  is already created";
			}
?>
