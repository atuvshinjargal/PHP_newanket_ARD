<table>
<?php
$i=0;
if ($_POST['sadan']>0 && $_POST['surguuli'.$i]!=''){
	echo '<tr><td colspan="6"><strong>Боловсрол</strong></td></tr><tr>
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
for ($i=0;($i<$_POST['bolovsrol'] && $_POST['surguuli'.$i]!='');$i++){
	echo '<tr><td>'.$_POST['surguuli'.$i].'</td>
				<td>'.$_POST['elssen'.$i].'</td>
				<td>'.$_POST['tugssun'.$i].'</td>
				<td>'.$_POST['megejil'.$i].'</td>
				<td>'.$_POST['sedev'.$i].'</td>
				<td>'.$_POST['gerchilgee'.$i].'</td>
			</tr>';
}
?>
</table>