<?php
	// include Database connection file 
	include("db_connection.php");
?>

	<?php
		// Design initial table header 
		$data = '<select id="fname" name="fname">';

		$query = "SELECT * FROM resourcemgt";

		if (!$result = mysqli_query($con, $query)) {
			exit(mysqli_error($con));
		}

		// if query results contains rows then featch those rows 
		if(mysqli_num_rows($result) > 0)
		{
			$number = 1;
			while($row = mysqli_fetch_assoc($result))
			{
				$data .= '
					<option  value="'.$row['id'].'">'.$row['id'].'</option>
					';
				$number++;
			}
		}
		else
		{
			// records now found 
			$data .= '<tr><td colspan="6">Records not found!</td></tr>';
		}

		$data .= '</select>
		<script>
		var id_bpci = function() {
			var sel = document.getElementById("fname");
			var dayVal = sel.options[sel.selectedIndex].value;
			return dayVal;
		}
	</script>
	
		<button onclick="GetUserDetails(id_bpci)" class="btn btn-warning">Update</button>';

		echo $data;
	?>
	
