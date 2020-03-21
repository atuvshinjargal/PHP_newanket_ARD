<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ардчилсан намын гишүүний анкет</title>
<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
<script src="http://code.jquery.com/jquery-1.7.1.js"></script>
<script src="lib/jquery/jquery-1.3.2.js" type="text/javascript"></script>
<script src="javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="js/insert.js"></script>
<script>
function goBack(val)
{
	$.get('remove.php?val='+val, function(data) {
		  $('#remove').html(data);
		});
		window.history.back()
}
</script>
</head>
<body>
<h2>Ардчилсан намын гишүүний анкет</h2>
<table>
<tr><td><strong>Регистрийн дугаар:</strong></td><td><?php echo $reg=$_POST["reg1"].$_POST["reg2"].$_POST["reg"]; ?></td></tr>
<tr><td colspan="2"><h3>1. Хувь хүний талаарх мэдээлэл</h3></td></tr>
<tr><td><strong>Цээж зураг</strong></td>
<td>
<?php
$zurag='';
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 500000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Алдаа: " . $_FILES["file"]["error"];
    }
  else
    {

      move_uploaded_file($_FILES["file"]["tmp_name"],
      "ceejzurag/" . $_FILES["file"]["name"]);
	  $zurag="ceejzurag/" . $_FILES["file"]["name"];
      echo '<img src="'.$zurag.'" width="105" height="140">';

    }
  }
else
  {
  echo "Зураг хуулагдсангүй!!!";
  }
?>
</td></tr>
<tr><td><strong>Ургийн овог:</strong></td><td><?php echo $_POST["urag"]; ?></td></tr>
<tr><td><strong>Эцэг/эх/-н нэр:</strong></td><td><?php echo $_POST["ovog"]; ?></td></tr>
<tr><td><strong>Өөрийн нэр:</strong></td><td><?php echo $_POST["name"]; ?></td></tr>
<tr><td><strong>Хүйс:</strong></td><td><?php echo $_POST["huis"]; ?></td></tr>
<tr><td><strong>Төрсөн огноо:</strong></td><td><?php echo $birth=$_POST['birthyear'].'/'.$_POST['birthmonth'].'/'.$_POST['birthday']; ?></td></tr>
<?php
$aimag_id = strtok($_POST["birthaimag"], "g");
$aimag = strtok("g");
?>
<tr><td><strong>Төрсөн аймаг/хот/:</strong></td><td><?php echo $aimag; ?></td></tr>
<tr><td><strong>Үндэс угсаа:</strong></td><td><?php echo $_POST["ugsaa"]; ?></td></tr>
<tr><td><strong>Нийгмийн гарал:</strong></td><td><?php echo $_POST["garal"]; ?></td></tr>
<tr><td><strong>Ам бүлийн тоо:</strong></td><td><?php echo $_POST["am"]; ?></td></tr>
</table>
<table class="husnegt">
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
	echo '<tr><td>'.$_POST['henboloh'.$i].'</td>
		<td>'.$_POST['ovogner'.$i].'</td>
		<td>'.$_POST['birthyear'.$i].'/'.$_POST['birthmonth'.$i].'/'.$_POST['birthday'.$i].'</td>
		<td>'.$_POST['mail'.$i].'</td>
				<td>'.$_POST['holbooutas'.$i].'</td>
				<td>'.$_POST['ajil'.$i].'</td>
			</tr>';
}
?>
</table>
<table class="husnegt">
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
	echo '<tr><td>'.$_POST['henboloh'.$i].'</td>
		<td>'.$_POST['ovogner'.$i].'</td>
		<td>'.$_POST['birthyear'.$i].'/'.$_POST['birthmonth'.$i].'/'.$_POST['birthday'.$i].'</td>
		<td>'.$_POST['mail'.$i].'</td>
				<td>'.$_POST['holbooutas'.$i].'</td>
				<td>'.$_POST['ajil'.$i].'</td>
			</tr>';
}
?>
</table>
<table>
<tr><td><strong>Оршин суугаа хаяг:</strong></td><td><?php echo $_POST["address"]; ?></td></tr>
<tr><td><strong>Утас:</strong></td><td><?php echo $_POST["utas"]; ?></td>
<td><strong>Факс:</strong></td><td><?php if ($_POST["faks"]!='') echo $_POST["faks"]; else echo 'байхгүй' ?></td></tr>
<tr><td><strong>И-мэйл хаяг:</strong></td><td><?php echo $_POST["mail"]; ?></td></tr>
<tr><td><strong>Онцгой шаардлагтай үед харилцах хүний нэр:</strong></td><td><?php echo $_POST["human_ner"]; ?></td>
<td><strong>Түүний утас:</strong></td><td><?php echo $_POST["human_utas"]; ?></td></tr>
</table>
<h3>2. Боловсролын талаарх мэдээлэл</h3>
<table class="husnegt">
<?php
$i=0;
if ($_POST['bolovsrol']>0 && $_POST['surguuli'.$i]!=''){
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
				<td>'.$_POST['mergejil'.$i].'</td>
				<td>'.$_POST['sedev'.$i].'</td>
				<td>'.$_POST['gerchilgee'.$i].'</td>
			</tr>';
}
if ($i==0) $temp=0;
?>
</table>

<table class="husnegt">
<?php 
$i=0;
if ($_POST['hel']>0 && $_POST['hel'.$i]!=''){
	echo '<tr><td colspan="6"><strong>Гадаад хэлний мэдлэг</strong></td></tr><tr><tr>
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
$heltoo=3;
for ($i=0;($i<$_POST['hel'] && $_POST['hel'.$i]!='');$i++){
	echo '<tr><td>'.$_POST['hel'.$i].'</td>';
			for ($j=0;$j<$heltoo;$j++)
				if ($j==$_POST['sonsoh'.$i])
					echo '<td><img src="images/check.jpg" width="20" height="20"></td>';
				else
					echo '<td></td>';
			for ($j=0;$j<$heltoo;$j++)
				if ($j==$_POST['yarih'.$i])
					echo '<td><img src="images/check.jpg" width="20" height="20"></td>';
				else
					echo '<td></td>';
			for ($j=0;$j<$heltoo;$j++)
				if ($j==$_POST['unshih'.$i])
					echo '<td><img src="images/check.jpg" width="20" height="20"></td>';
				else
					echo '<td></td>';
			for ($j=0;$j<$heltoo;$j++)
				if ($j==$_POST['bichih'.$i])
					echo '<td><img src="images/check.jpg" width="20" height="20"></td>';
				else
					echo '<td></td>';
				echo '</tr>';
}
?>
</table>
<?php
if ($i==0 && $temp==0) echo 'Байхгүй'; 
$temp=0;
?>
<h3>3. Сонгуульд оролцсон туршлага</h3>
<table>
<?php 
$i=0;
if ($i<$_POST['sturshlaga'] && $_POST['toirog'.$i]!=''){
	echo '<tr>
			<th>Хаана, аль тойрогт</th>
			<th>Согууль болсон он</th>
			<th>Ямар чиглэлээр</th>
			<th>Нотлох хүн</th>
			</tr>';
}
for ($i=0;($i<$_POST['sturshlaga'] && $_POST['toirog'.$i]!='');$i++){
	echo '<tr><td>'.$_POST['toirog'.$i].'</td>
				<td>'.$_POST['hezee'.$i].'</td>
				<td>'.$_POST['chiglel'.$i].'</td>
				<td>'.$_POST['notloh'.$i].'</td>
			</tr>';
}
if ($i!=0) $temp=1;
?>
</table>

<table>
<?php 
$i=0;
if ($i<$_POST['salbantushaal'] && $_POST['angilal'.$i]!=''){
	echo '<tr><td colspan="3"><strong>Сонгуулийн албан тушаалын зэрэг цол, дэв</strong></td></tr><tr>
			<th>Албан тушаал ангилал</th>
			<th>Зэрэг дэв</th>
			<th width="80">Намын аль шатны байгууллагын шийдвэрээр</th>
			</tr>';
}
for ($i=0;($i<$_POST['salbantushaal'] && $_POST['angilal'.$i]!='');$i++){
	echo '<tr><td>'.$_POST['angilal'.$i].'</td>
				<td>'.$_POST['zereg'.$i].'</td>
				<td>'.$_POST['shiidver'.$i].'</td>
			</tr>';
}
if ($i!=0) $temp=1;
?>
</table>
<table>
<?php 
$i=0;
if ($i<$_POST['shagnal'] && $_POST['turul'.$i]!=''){
	echo '<tr><td colspan="3"><strong>Гавъяа шагнал</strong></td></tr><tr>
			<th>Шагналын төрөл</th>
			<th width="80">Шагнал олгосон байгууллага</th>
			<th>Он, сар</th>
			<th>Шагналын дугаар</th>
			</tr>';
}
for ($i=0;($i<$_POST['shagnal'] && $_POST['turul'.$i]!='');$i++){
	echo '<tr><td>'.$_POST['turul'.$i].'</td>
				<td>'.$_POST['baiguullaga'.$i].'</td>
				<td><'.$_POST['date'.$i].'</td>
				<td>'.$_POST['dugaar'.$i].'</td>
			</tr>';
}
?>
</table>
<?php
if ($i==0 && $temp==0) echo 'Байхгүй';
?>
<h3>4. Туршлагын талаарх мэдээлэл</h3>
<table>
<?php 
$i=0;
if ($i<$_POST['turshlaga'] && $_POST['tbaiguullaga'.$i]!=''){
	echo '<tr>
			<th>Байгууллагын нэр</th>
			<th width="80">үйл ажиллагааны чиглэл</th>
			<th>Албан тушаал</th>
			<th width="80">Ажилд орсон он сар өдөр</th>
			<th width="80">Ажлаас гарсан он сар өдөр</th>
			</tr>';
}
for ($i=0;($i<$_POST['turshlaga'] && $_POST['tbaiguullaga'.$i]!='');$i++){
	echo '<tr><td>'.$_POST['tbaiguullaga'.$i].'</td>
				<td>'.$_POST['chiglel'.$i].'</td>
				<td>'.$_POST['tushaal'.$i].'</td>
				<td>'.$_POST['oyear'.$i].'/'.$_POST['omonth'.$i].'/'.$_POST['oday'.$i].'</td>
				<td>'.$_POST['gyear'.$i].'/'.$_POST['gmonth'.$i].'/'.$_POST['gday'.$i].'</td>
			</tr>';
}
?>
</table>
<?php if ($i==0) echo 'Байхгүй'; ?>
<div class="dcenter">

<form id="mainForm" action="insertdb.php" method="post" enctype="multipart/form-data">
<input type="button" value="Буцах" onClick="goBack(<?php echo '\''.$zurag.'\'' ?>)">
<?php foreach($_POST as $name => $value) {
echo '<input type="hidden" name="'.$name.'" value="'.$value.'">';	
}
?>
<input type="hidden" name="zurag" value="<?php echo $zurag ?>">
<input type="submit" value="Зөвшөөрөв">
</form>
</div>
<div id="remove">
</div>
</body>
</html>