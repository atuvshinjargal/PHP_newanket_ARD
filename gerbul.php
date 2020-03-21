<table>
<?php 
$val=$_GET['val'];
if ($val>0){
	echo '<tr>
			<th>Таний хэн болох</th>
			<th>Овог нэр</th>
			<th>Төрсөн он сар өдөр</th>
			<th>И-майл хаяг</th>
			<th>Холбоо барих утас</th>
			<th>Ямар ажил эрхэлдэг</th>
			</tr>';
}
for ($j=0;$j<$val;$j++){
	echo '<tr><td><input type="text" name="henboloh'.$j.'"></td>
				<td><input type="text" name="ovogner'.$j.'"></td><td><select name="birthyear'.$j.'">';
				for ($i=1900;$i<2014;$i++) 
					echo '<option value="'.$i.'">'.$i.'</option>';  
			echo '</select>';
			echo '<select name="birthmonth'.$j.'">';
				for ($i=1;$i<13;$i++) 
			echo '<option value="'.$i.'">'.$i.'</option>';  
			echo '</select>';
			echo '<select name="birthday'.$j.'">';
				for ($i=1;$i<32;$i++)
			echo '<option value="'.$i.'">'.$i.'</option>';  

	echo		'</select></td><td><input type="text" name="mail'.$j.'"></td>
				<td><input type="text" name="holbooutas'.$j.'"></td>
				<td><input type="text" name="ajil'.$j.'"></td>
			</tr>';
			
}
?>
</table>


