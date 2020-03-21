<?php
$fileToRemove = $_GET['val'];
if (file_exists($fileToRemove)) {
   unlink($fileToRemove);
}
?>