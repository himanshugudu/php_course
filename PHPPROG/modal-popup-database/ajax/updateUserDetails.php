<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $BPCI_Pillar = $_POST['BPCI_Pillar'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    // Updaste User details
    $query = "UPDATE resourcemgt SET BPCI_Pillar = '$BPCI_Pillar', project_type = '$last_name', project_type = '$email' WHERE id = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}