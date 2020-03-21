<?php
include("db.php");
$aimag_id = strtok($_POST["birthaimag"], "g");
$aimag = strtok("g");
$register=$_POST['reg1'].$_POST['reg2'].$_POST['reg'];
$query = sprintf("INSERT INTO main (`register`, `uragovog`, `ovog`, `ner`, `huis`, `birthdate`, `birthaimag_id`, `ugsaa`, `garal`, `address`, `utas`, `faks`, `mail`, `human_ner`, `human_utas`, `aimag_id`, `user_id`, `image`)
VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", 
            mysql_real_escape_string($register),
            mysql_real_escape_string($_POST['urag']),
			mysql_real_escape_string($_POST['ovog']),
			mysql_real_escape_string($_POST['name']),
			mysql_real_escape_string($_POST['huis']),
			mysql_real_escape_string($_POST['birthyear'].'/'.$_POST['birthyear'].'/'.$_POST['birthday']),
			mysql_real_escape_string($aimag_id),
			mysql_real_escape_string($_POST['ugsaa']),
			mysql_real_escape_string($_POST['garal']),
			mysql_real_escape_string($_POST['address']),
			mysql_real_escape_string($_POST['utas']),
			mysql_real_escape_string($_POST['faks']),
			mysql_real_escape_string($_POST['mail']),
			mysql_real_escape_string($_POST['human_ner']),
			mysql_real_escape_string($_POST['human_utas']),
			mysql_real_escape_string(''),
			mysql_real_escape_string(''),
			mysql_real_escape_string($_POST['zurag']));
mysql_query($query);
			
for ($i=0;($i<$_POST['gerbul'] && $_POST['henboloh'.$i]!='');$i++){
$query = sprintf("INSERT INTO gerbul (`henboloh`, `ovogner`, `birthday`, `mail`, `holbooutas`, `ajil`, `main_id`, `sadanturul`)
VALUES ('%s','%s','%s','%s','%s','%s','%s','%s')", 
            mysql_real_escape_string($_POST['henboloh'.$i]),
            mysql_real_escape_string($_POST['ovogner'.$i]),
			mysql_real_escape_string($_POST['birthyear'.$i].'/'.$_POST['birthmonth'.$i].'/'.$_POST['birthday'.$i]),
			mysql_real_escape_string($_POST['mail'.$i]),
			mysql_real_escape_string($_POST['holbooutas'.$i]),
			mysql_real_escape_string($_POST['ajil'.$i]),
			mysql_real_escape_string($register),
			mysql_real_escape_string('0'));
mysql_query($query);
}

for ($i=500;($i<$_POST['sadan']+500 && $_POST['henboloh'.$i]!='');$i++){
$query = sprintf("INSERT INTO sadan (`henboloh`, `ovogner`, `birthday`, `mail`, `holbooutas`, `ajil`, `main_id`, `sadanturul`)
VALUES ('%s','%s','%s','%s','%s','%s','%s','%s')", 
            mysql_real_escape_string($_POST['henboloh'.$i]),
            mysql_real_escape_string($_POST['ovogner'.$i]),
			mysql_real_escape_string($_POST['birthyear'.$i].'/'.$_POST['birthmonth'.$i].'/'.$_POST['birthday'.$i]),
			mysql_real_escape_string($_POST['mail'.$i]),
			mysql_real_escape_string($_POST['holbooutas'.$i]),
			mysql_real_escape_string($_POST['ajil'.$i]),
			mysql_real_escape_string($register),
			mysql_real_escape_string('1'));
mysql_query($query);
}

for ($i=0;($i<$_POST['bolovsrol'] && $_POST['surguuli'.$i]!='');$i++){
$query = sprintf("INSERT INTO bolovsrol (`surguuli`, `elssen`, `tugssun`, `mergejil`, `sedev`, `gerchilgee`, `main_id`)
VALUES ('%s','%s','%s','%s','%s','%s','%s')", 
            mysql_real_escape_string($_POST['surguuli'.$i]),
            mysql_real_escape_string($_POST['elssen'.$i]),
			mysql_real_escape_string($_POST['tugssun'.$i]),
			mysql_real_escape_string($_POST['mergejil'.$i]),
			mysql_real_escape_string($_POST['sedev'.$i]),
			mysql_real_escape_string($_POST['gerchilgee'.$i]),
			mysql_real_escape_string($register));
mysql_query($query);
}
for ($i=0;($i<$_POST['hel'] && $_POST['hel'.$i]!='');$i++){
$query = sprintf("INSERT INTO hel (`hel`, `sonsoh`, `yarih`, `unshih`, `bichih`, `main_id`)
VALUES ('%s','%s','%s','%s','%s','%s')", 
            mysql_real_escape_string($_POST['hel'.$i]),
            mysql_real_escape_string($_POST['sonsoh'.$i]),
			mysql_real_escape_string($_POST['yarih'.$i]),
			mysql_real_escape_string($_POST['unshih'.$i]),
			mysql_real_escape_string($_POST['bichih'.$i]),
			mysql_real_escape_string($register));
mysql_query($query);
}
for ($i=0;($i<$_POST['sturshlaga'] && $_POST['toirog'.$i]!='');$i++){
$query = sprintf("INSERT INTO sturshlaga (`toirog`, `hezee`, `chiglel`, `notloh`, `main_id`)
VALUES ('%s','%s','%s','%s','%s')", 
            mysql_real_escape_string($_POST['toirog'.$i]),
            mysql_real_escape_string($_POST['hezee'.$i]),
			mysql_real_escape_string($_POST['chiglel'.$i]),
			mysql_real_escape_string($_POST['notloh'.$i]),
			mysql_real_escape_string($register));
mysql_query($query);
}
for ($i=0;($i<$_POST['salbantushaal'] && $_POST['angilal'.$i]!='');$i++){
$query = sprintf("INSERT INTO salbantushaal (`angilal`, `zereg`, `shiidver`, `main_id`)
VALUES ('%s','%s','%s','%s')", 
            mysql_real_escape_string($_POST['angilal'.$i]),
            mysql_real_escape_string($_POST['zereg'.$i]),
			mysql_real_escape_string($_POST['shiidver'.$i]),
			mysql_real_escape_string($register));
mysql_query($query);
}
for ($i=0;($i<$_POST['shagnal'] && $_POST['turul'.$i]!='');$i++){
$query = sprintf("INSERT INTO shagnal (`turul`, `baiguullaga`, `date`, `dugaar`, `main_id`)
VALUES ('%s','%s','%s','%s')", 
            mysql_real_escape_string($_POST['turul'.$i]),
            mysql_real_escape_string($_POST['date'.$i]),
			mysql_real_escape_string($_POST['dugaar'.$i]),
			mysql_real_escape_string($register));
mysql_query($query);
}
for ($i=0;($i<$_POST['turshlaga'] && $_POST['tbaiguullaga'.$i]!='');$i++){
$query = sprintf("INSERT INTO turshlaga (`baiguullaga`, `chiglel`, `tushaal`, `orson`, `garsan`, `main_id`)
VALUES ('%s','%s','%s','%s','%s','%s')", 
            mysql_real_escape_string($_POST['baiguullaga'.$i]),
            mysql_real_escape_string($_POST['chiglel'.$i]),
			mysql_real_escape_string($_POST['tushaal'.$i]),
			mysql_real_escape_string($_POST['oyear'.$i].'/'.$_POST['omonth'.$i].'/'.$_POST['oday'.$i]),
			mysql_real_escape_string($_POST['gyear'.$i].'/'.$_POST['gmonth'.$i].'/'.$_POST['gday'.$i]),
			mysql_real_escape_string($register));
mysql_query($query);
}
mysql_close($con);
header("location: anket.php");
?>