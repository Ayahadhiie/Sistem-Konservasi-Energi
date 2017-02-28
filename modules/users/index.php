<?php
if (empty($act)) {
	include 'default.php';
}
if ($act=="new") {
	include 'new.php';
}
if ($act=="edit") {
	include 'edit.php';
}
?>
