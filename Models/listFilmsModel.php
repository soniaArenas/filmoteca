<?php
include("../config/db.php");

$queryDb="SELECT * from films ORDER BY ".$orderBy." ".$order."";
	
	$query=mysqli_query($connect,$queryDb);

?>