<?php
$database_name="beast";
$host_name="localhost";
$host_user="root";
$pwd="";
$connection=mysqli_connect($host_name, $host_user, $pwd);
mysqli_select_db($connection,$database_name) or mysqli_error($connection);
?>