<table>
<?php 
$val=$_GET['val'];
if ($val>0){
	echo '<tr>
			<th rowspan="2">Гадаад хэл</th>
			<th colspan="3">Ярьсныг ойлгох</th>
			<th colspan="3">Өөрөө ярих</th>
			<th colspan="3">Уншиж ойлгох</th>
			<th colspan="3">Бичиж орчуулах</th>
			</tr>
			<tr>
			<td>Сайн</td>
			<td>Дунд</td>
			<td>Муу</td>
			<td>Сайн</td>
			<td>Дунд</td>
			<td>Муу</td>
			<td>Сайн</td>
			<td>Дунд</td>
			<td>Муу</td>
			<td>Сайн</td>
			<td>Дунд</td>
			<td>Муу</td>
			</tr>
			';
}
for ($j=0;$j<$val;$j++){
	echo '<tr><td><input type="text" name="hel'.$j.'"></td>
				<td><input type="radio" name="sonsoh'.$j.'" value="3"></td>
				<td><input type="radio" name="sonsoh'.$j.'" value="2"></td>
				<td><input type="radio" name="sonsoh'.$j.'" value="1" checked="checked"></td>
				<td><input type="radio" name="yarih'.$j.'" value="3"></td>
				<td><input type="radio" name="yarih'.$j.'" value="2"></td>
				<td><input type="radio" name="yarih'.$j.'" value="1" checked="checked"></td>
				<td><input type="radio" name="unshih'.$j.'"value="3"></td>
				<td><input type="radio" name="unshih'.$j.'" value="2"></td>
				<td><input type="radio" name="unshih'.$j.'" value="1" checked="checked"></td>
				<td><input type="radio" name="bichih'.$j.'"value="3"></td>
				<td><input type="radio" name="bichih'.$j.'" value="2"></td>
				<td><input type="radio" name="bichih'.$j.'" value="1" checked="checked"></td>
			</tr>';
}
?>

</table>