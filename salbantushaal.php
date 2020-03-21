<table>
<?php 
$val=$_GET['val'];
if ($val>0){
	echo '<tr>
			<th>Албан тушаал ангилал</th>
			<th>Зэрэг дэв</th>
			<th width="80">Намын аль шатны байгууллагын шийдвэрээр</th>
			</tr>';
}
for ($j=0;$j<$val;$j++){
	echo '<tr><td><input type="text" name="angilal'.$j.'"></td>
				<td><input type="text" name="zereg'.$j.'"></td>
				<td><input type="text" name="shiidver'.$j.'"></td>
			</tr>';
}
?>
</table>


