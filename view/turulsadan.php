<table>
<?php
$i=0;
if ($_POST['gerbul']>0 && $_POST['henboloh'.$i]!=''){
	echo '<tr><td colspan="6"><strong>Гэр бүлийн байдал</strong></td></tr><tr>
			<th>Таний хэн болох</th>
			<th>Овог нэр</th>
			<th>Төрсөн он сар өдөр</th>
			<th>И-майл хаяг</th>
			<th>Холбоо барих утас</th>
			<th>Ямар ажил эрхэлдэг</th>
			</tr>';
}
for ($i=0;($i<$_POST['gerbul'] && $_POST['henboloh'.$i]!='');$i++){
		echo '<tr><td>'.$_POST['henboloh'.$i].'</td><td>
		'.$_POST['ovogner'.$i].'</td><td>'.$_POST['birthyear'.$i].'/'.$_POST['birthmonth'.$i].'/'.$_POST['birthday'.$i].'
		</td><td>'.$_POST['mail'.$i].'</td>
				<td>'.$_POST['holbooutas'.$i].'</td>
				<td>'.$_POST['ajil'.$i].'</td>
			</tr>';
}
?>
</table>
<table>
<?php
$i=500;
if ($_POST['sadan']>0 && $_POST['henboloh'.$i]!=''){
	echo '<tr><td colspan="6"><strong>Садан төрлийн байдал</strong></td></tr><tr>
			<th>Таний хэн болох</th>
			<th>Овог нэр</th>
			<th>Төрсөн он сар өдөр</th>
			<th>И-майл хаяг</th>
			<th>Холбоо барих утас</th>
			<th>Ямар ажил эрхэлдэг</th>
			</tr>';
}
for ($i=500;($i<$_POST['sadan']+500 && $_POST['henboloh'.$i]!='');$i++){
	echo '<tr><td>'.$_POST['henboloh'.$i].'</td><td>
		'.$_POST['ovogner'.$i].'</td><td>'.$_POST['birthyear'.$i].'/'.$_POST['birthmonth'.$i].'/'.$_POST['birthday'.$i].'
		</td><td>'.$_POST['mail'.$i].'</td>
				<td>'.$_POST['holbooutas'.$i].'</td>
				<td>'.$_POST['ajil'.$i].'</td>
			</tr>';
}
?>
</table>