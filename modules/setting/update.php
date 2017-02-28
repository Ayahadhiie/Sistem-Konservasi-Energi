<?php
include "../../inc/cek.php";
include "../../inc/config.php";

$id = $_REQUEST['id'];
$judul = $_REQUEST['judul'];
$isi = $_REQUEST['isi'];
$cat = $_REQUEST['cat'];
$status = $_REQUEST['status'];
$foto = $_REQUEST['foto'];
$mod = $_REQUEST['mod'];
// waktu sekarang
$time= date('Y-m-d H:i:s');
// ambek name yang login
$name = $_SESSION['name'];

$belom = str_replace(',', '', $judul);
$string = str_replace(' ', '-', $belom);
$slug = strtolower($string);


 if ($cat==""){
//Simpan Artikelnye
	$sql = "update posts set judul='$judul',slug='$slug', isi='$isi', updater='$name' ,status='$status' ,waktu_post='$time' where id='$id'";
	$hasil = @mysql_query($sql);

	}
	else {
  	$sql = "update posts set cat='$cat', judul='$judul',slug='$slug', isi='$isi', updater='$name' ,status='$status' ,waktu_post='$time' where id='$id'";
	$hasil = @mysql_query($sql);
  }
if ($hasil){
	header("location:../../index.php?mod=arsip&ntfy=sukses");
} else {
	header("location:../../index.php?mod=arsip&ntfy=error");
}
?>