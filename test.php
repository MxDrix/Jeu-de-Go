	<table>

<?php 
	for ($i=13 - 1; $i >= 0; $i--) {
		echo "<tr>";
		for ($j=0; $j < 13; $j++) { 
			echo "<td id='" . $i."-".$j . "'>";
		}
		echo "</tr>";
	}
?>

	</table>
