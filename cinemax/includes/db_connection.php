<?php
//connection of the database
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "cinemax";
$conn = mysqli_connect($servername,$username,$password);
mysqli_select_db($conn, $db_name);

?>