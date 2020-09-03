<?php
include("../Config/dbConnection.php");

$queryDb="SELECT * from films ORDER BY ".$orderBy." ".$order."";
	
	$query=mysqli_query($connect,$queryDb);
	mysqli_close($connect);

?>