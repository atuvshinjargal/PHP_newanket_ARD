<table>
<?php 
$val=$_GET['val'];
if ($val>0){
	echo '<tr>
			<th>Шагналын төрөл</th>
			<th width="80">Шагнал олгосон байгууллага</th>
			<th>Он, сар</th>
			<th>Шагналын дугаар</th>
			</tr>';
}
for ($j=0;$j<$val;$j++){
	echo '<tr><td><input type="text" name="turul'.$j.'"></td>
				<td><input type="text" name="baiguullaga'.$j.'"></td>
				<td><input type="text" name="date'.$j.'"></td>
				<td><input type="text" name="dugaar'.$j.'"></td>
			</tr>';
}
?>
</table>


