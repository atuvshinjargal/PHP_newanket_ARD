<table>
<?php 
$val=$_GET['val'];
if ($val>0){
	echo '<tr>
			<th rowspan="2">Төгссөн сургууль</th>
			<th colspan="2">Хугацаа</th>
			<th rowspan="2">Мэргэжлийн нэр</th>
			<th rowspan="2">Сэдэв</th>
			<th rowspan="2" width="80">Гэрчилгээ, дипломны дугаар</th>
			</tr>
			<tr>
			<th>Орсон он сар</th>
			<th>Төгссөн он сар</th>
			</tr>
			';
}
for ($j=0;$j<$val;$j++){
	echo '<tr><td><input type="text" name="surguuli'.$j.'"></td>
				<td><input type="text" name="elssen'.$j.'"></td>
				<td><input type="text" name="tugssun'.$j.'"></td>
				<td><input type="text" name="mergejil'.$j.'"></td>
				<td><input type="text" name="sedev'.$j.'"></td>
				<td><input type="text" name="gerchilgee'.$j.'"></td>
			</tr>';
}
?>
</table>


