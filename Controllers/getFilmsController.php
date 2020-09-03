<?php
$orderBy = $_POST['orderBy'];
$order=$_POST['order'];

include("../models/listFilmsModel.php");

echo " <table><thead>
<tr class='headTable'>
<td>Título</td>
<td>Año</td>
</tr></thead><tbody> ";

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

		echo "<td>".ucfirst($change)."</td>";
	}
	echo "</tr>";

	$numRow++;
}
echo "</tbody></table>";

?>