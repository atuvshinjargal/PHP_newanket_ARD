<table>
<?php 
$val=$_GET['val'];
if ($val>0){
	echo '<tr>
			<th>Хаана, аль тойрогт</th>
			<th>Согууль болсон он</th>
			<th>Ямар чиглэлээр</th>
			<th>Нотлох хүн</th>
			</tr>';
}
for ($j=0;$j<$val;$j++){
	echo '<tr><td><input type="text" name="toirog'.$j.'"></td>
				<td><input type="text" name="hezee'.$j.'"></td>
				<td><input type="text" name="chiglel'.$j.'"></td>
				<td><input type="text" name="notloh'.$j.'"></td>
			</tr>';
}
?>
</table>


