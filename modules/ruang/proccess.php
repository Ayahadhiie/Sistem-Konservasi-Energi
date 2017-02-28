<?php
include '../../inc/config.php';
include '../../lib/func.php';

$act=$_REQUEST['act'];
$data = $_POST;

if ($act=='save') {
	$tambah=mysql_insert('ruang',$data);
}

if ($tambah) {
	header("location:../../?mod=ruang&ntfy=sukses");
}