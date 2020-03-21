<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
<script src="http://code.jquery.com/jquery-1.7.1.js"></script>
<script src="lib/jquery/jquery-1.3.2.js" type="text/javascript"></script>
<script src="javascripts/jquery.validate.js" type="text/javascript"></script>
<script src="js/test.js"></script>
<title>Ардчилсан намын гишүүний анкет</title>
</head>

<body>
<h2>Ардчилсан намын гишүүний анкет</h2>
<?php 
include("db.php");
$array=array('А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','Р','Ө','П','С','Т','У','Ү','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я');
?>
<form id="mainForm" action="insert.php" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>
<div class="register">
Регистрийн дугаар:
</td>
<td>
*<select name="reg1">
<?php
for($i=0;$i<sizeof($array);$i++) 
	echo '<option value="'.($array[$i]).'">
'.$array[$i].'</option>'; 
?>
</select>
<select name="reg2">
<?php
for($i=0;$i<sizeof($array);$i++) 
	echo '<option value="'.($array[$i]).'">
'.$array[$i].'</option>'; 
?>
</select>
<input type="text" name="reg" id="reg" maxlength="8" size="4" onkeypress='validate(event)'>
</td></tr>
<tr><td colspan="2"><h3>1. Хувь хүний талаарх мэдээлэл</h3></td></tr>
<tr><td>
Цээж зураг:</td><td>
<label for="file">Файл:</label>
<input type="file" name="file" id="file"><br>
</td></tr>
<tr><td>
Ургийн овог:</td><td>
*<input type="text" name="urag" id="urag">
</td></tr>
<tr><td>
Эцэг/эх/-н нэр:</td><td>
*<input type="text" name="ovog" id="ovog">
</td></tr>
<tr><td>
Өөрийн нэр:</td><td>
*<input type="text" name="name" id="name" >
</td></tr>
<tr><td>
Хүйс:</td><td>
*<select name="huis" id="huis">
	<option selected="selected" value="">--Хүйс--</option>
    <option value="Эр">Эрэгтэй</option>
    <option value="Эм">Эмэгтэй</option>
</select>
</td></tr>
<tr><td>
Төрсөн огноо:</td><td>
*<select name="birthyear" id="birthyear">
<option selected="selected" value="">Он</option>
<?php 
for ($i=1900;$i<2014;$i++) 
	echo '<option value="'.$i.'">
'.$i.'</option>';  
?>
</select>
<select name="birthmonth" id="birthmonth">
<option selected="selected" value="">Сар</option>
<?php 
for ($i=1;$i<13;$i++) 
	echo '<option value="'.$i.'">'.$i.'</option>';  
?>
</select>
<select name="birthday" id="birthday">
<option selected="selected" value="">Өдөр</option>
<?php 
for ($i=1;$i<32;$i++)
	echo '<option value="'.$i.'">'.$i.'</option>';  
?>
</select>
</td></tr>
<tr><td>
Төрсөн аймаг/хот/:</td><td>
<?php
$result = mysql_query("SELECT * FROM birthaimag");
?>
*<select name="birthaimag" id="birthaimag">
<option selected="selected" value="">Аймаг/хот/</option>
<?php 
while($row = mysql_fetch_array($result)) 
	echo '<option value="'.$row['id'].'g'.$row['aimag'].'g">'.$row['aimag'].'</option>';
?>
</select>
</td></tr>
<tr><td>
Үндэс угсаа:</td><td>
*<input type="text" name="ugsaa" id="ugsaa" >
</td></tr>
<tr><td>
Нийгмийн гарал:</td><td>
*<input type="text" name="garal" id="garal" >
</td></tr>
<tr><td>
Ам бүлийн тоо:
</td><td>
*<select name="am" id="am">
<option selected="selected" value="">Too</option>
<?php 
for ($i=1;$i<13;$i++) 
	echo '<option value="'.$i.'">'.$i.'</option>';  
?>
</select>
</td></tr>
</table>
<strong>Гэр бүлийн байдал</strong>/Зөвхөн гэр бүлийн бүртгэлд байгаа АН-н хүмүүсийг/
<div id="gerbul">
</div>
<input type="button" value="мөр нэмэх" onClick="go1()">
<input type="hidden" value="0" name="gerbul">
</br>
<strong>Садан төрлийн байдал</strong>/АН-ын гишүүд/
<div id="sadanturul">
</div>
<input type="button" value="мөр нэмэх" onClick="go2()">
<input type="hidden" value="0" name="sadan">
<table>
<tr><td>
Оршин суугаа хаяг:</td><td>
*<input type="text" name="address" id="address" >
</td></tr>
<tr><td>
Утас:</td><td>
*<input type="text" name="utas" id="utas" onKeyPress="validate(event)" >
</td><td>
Факс:</td><td>
<input type="text" name="faks" id="faks" onKeyPress="validate(event)" >
</td></tr>
<tr><td>
И-мэйл хаяг:</td><td>
*<input type="text" name="mail" id="mail" >
</td></tr>
<tr><td>
Онцгой шаардлагтай үед харилцах хүний нэр:</td><td>
*<input type="text" name="human_ner" id="human_ner" >
</td><td>
Түүний утас:</td><td>
*<input type="text" name="human_utas" id="human_utas" onKeyPress="validate(event)" >
</td></tr>
</table>
<h3>2. Боловсролын талаарх мэдээлэл</h3>
Боловсрол/ерөнхий, тусгай дунд, дээд боловсрол, дипломын баклавр, магистрын болон докторын зэргийг оролцуулна/
<div id="bolovsrol"></div>
<input type="button" value="мөр нэмэх" onClick="go3()">
<input type="hidden" value="0" name="bolovsrol">
</br>
<strong>Гадаад хэлний мэдлэг:</strong>
<div id="hel"></div>
<input type="button" value="мөр нэмэх" onClick="go4()">
<input type="hidden" value="0" name="hel">
<h3>3. Сонгуульд оролцсон туршлага</h3>
<div id="sturshlaga"></div>
<input type="button" value="мөр нэмэх" onClick="go5()">
<input type="hidden" value="0" name="sturshlaga">
</br>
<strong>Сонгуулийн албан тушаалын зэрэг цол, дэв</strong>
<div id="salbantushaal"></div>
<input type="button" value="мөр нэмэх" onClick="go6()">
<input type="hidden" value="0" name="salbantushaal">
</br>
<strong>Гавъяа шагнал</strong>/Төрийн, салбарын байгууллагын/
<div id="shagnal"></div>
<input type="button" value="мөр нэмэх" onClick="go7()">
<input type="hidden" value="0" name="shagnal">
<h3>4. Туршлагын талаарх мэдээлэл</h3>
<div id="turshlaga"></div>
<input type="button" value="мөр нэмэх" onClick="go8()">
<input type="hidden" value="0" name="turshlaga">
</br>
<div class="dcenter">
<input type="submit" value="Бүртгүүлэх">
</div>
</form>
<?php
mysql_close($con);
?>
</body>
</html>