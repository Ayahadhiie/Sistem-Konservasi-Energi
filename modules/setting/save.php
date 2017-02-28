<?php
include "../../inc/cek.php";
include "../../inc/config.php";

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

 if (!empty($foto)){
//Simpan Artikelnye
	$sql = "insert into posts (cat,judul,slug,isi,foto,alt_foto,author,sumber,waktu_post,status) values ('$cat','$judul','$slug','$isi','$foto','$alt_foto','$name','$sumber','$time','$status')";
	$hasil = @mysql_query($sql);
	}
	else {
  	$sql = "insert into posts (cat,judul,slug,isi,author,sumber,waktu_post,status) values ('$cat','$judul','$slug','$isi','$name','$sumber','$time','$status')";
	$hasil = @mysql_query($sql);
  }
if ($hasil){
	header("location:../../index.php?mod=$mod&ntfy=sukses");
} else {
	header("location:../../index.php?mod=$mod&ntfy=error");
}
?>