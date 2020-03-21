<table>
<?php 
$val=$_GET['val'];
if ($val>0){
	echo '<tr>
			<th>Байгууллагын нэр</th>
			<th width="80">үйл ажиллагааны чиглэл</th>
			<th>Албан тушаал</th>
			<th width="80">Ажилд орсон он сар өдөр</th>
			<th width="80">Ажлаас гарсан он сар өдөр</th>
			</tr>';
}
for ($j=0;$j<$val;$j++){
	echo '<tr><td><input type="text" name="tbaiguullaga'.$j.'"></td>
				<td><input type="text" name="chiglel'.$j.'"></td>
				<td><input type="text" name="tushaal'.$j.'"></td>
				<td><select name="oyear'.$j.'">';
				for ($i=1920;$i<2014;$i++) 
					echo '<option value="'.$i.'">'.$i.'</option>';  
			echo '</select>';
			echo '<select name="omonth'.$j.'">';
				for ($i=1;$i<13;$i++) 
			echo '<option value="'.$i.'">'.$i.'</option>';  
			echo '</select>';
			echo '<select name="oday'.$j.'">';
				for ($i=1;$i<32;$i++)
			echo '<option value="'.$i.'">'.$i.'</option>';  

	echo		'</select></td>
	<td><select name="gyear'.$j.'">';
				for ($i=1920;$i<2014;$i++) 
					echo '<option value="'.$i.'">'.$i.'</option>';  
			echo '</select>';
			echo '<select name="gmonth'.$j.'">';
				for ($i=1;$i<13;$i++) 
			echo '<option value="'.$i.'">'.$i.'</option>';  
			echo '</select>';
			echo '<select name="gday'.$j.'">';
				for ($i=1;$i<32;$i++)
			echo '<option value="'.$i.'">'.$i.'</option>';  

	echo		'</select></td>
			</tr>';
}
?>
</table>


