<?php 
$servername = "localhost";
$username = "a3002179_scp_agent";
$pwd = "XuILH;4^Do8p";
$db  = "a3002179_scp_db";

//create connection for database
$con = new mysqli($servername, $username, $pwd, $db);

if ($con->connect_error) {
	die("Connection failed: ".$con->connection_error);
}

//Create variable that stores all records from our database
$sql = mysqli_query($con, "SELECT * from subject") or die($con->error());
?>