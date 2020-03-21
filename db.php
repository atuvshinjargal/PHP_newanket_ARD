<!--database information-->
<?php

$server="localhost";
$usernamedb="root";
$passworddb="";
$database="anket";
$con = mysql_connect($server,$usernamedb,$passworddb);
mysql_query("SET NAMES 'UTF8'");  
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 //else echo "Холболт амжилттай!!!";
$conn = mysql_select_db($database,$con);
if (!$conn)
	{
		die('баазтай холбогдсонгүй!!!'.mysql_error());
		}
 //else echo "Баазтай холбогдлоо!!!";
?>