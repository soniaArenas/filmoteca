<?php
$name = $_POST['name'];
include("../models/searchModel.php");

echo " <table>
<tr>
<td>Nombre Película</td>
<td>Año</td>
</tr> ";

$numRow=0;
$clsRow="";

while ($reg=mysqli_fetch_row($query)){

	if ($numRow%2==0){

		$clsRow="clsEven";

	}else{

		$clsRow="clsOdd";
	}

	echo "<tr class=".$clsRow.">";

	foreach($reg as $change){

		echo "<td>".$change."</td>";
	}
	echo "</tr>";

}
echo "</table>";

?>