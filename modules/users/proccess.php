<?php
include '../../inc/config.php';
include '../../lib/func.php';

$act=$_REQUEST['act'];
$data = $_POST;

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$password = sha1($pass);
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$nomor_pelanggan = $_POST['nomor_pelanggan'];
$telp = $_POST['telp'];
$daya_listrik = $_POST['daya_listrik'];
$alamat = $_POST['alamat'];

$judul = $_REQUEST['judul'];

if ($act=='save') {
$sql = "insert into admin_users (username,email,password,first_name,last_name) values ('$username','$email','$password','$first_name','$last_name')";
$hasil = @mysql_query($sql);

}

if ($act=='edit' AND $pass!=='') {
$sql = "update admin_users, users_detail SET password='$password',email='$email',first_name='$first_name',last_name='$last_name',nomor_pelanggan='$nomor_pelanggan',telp='$telp',daya_listrik='$daya_listrik',alamat='$alamat'
		where admin_users.id=$id and users_detail.id=$id";
$hasiledit = @mysql_query($sql);
}
else if ($act=='edit' AND $pass=='') {
$sql = "update admin_users, users_detail SET email='$email',first_name='$first_name',last_name='$last_name',nomor_pelanggan='$nomor_pelanggan',telp='$telp',daya_listrik='$daya_listrik',alamat='$alamat'
		where admin_users.id=$id and users_detail.id=$id";
$hasiledit = @mysql_query($sql);
}


if ($hasil OR $hasil2){
	header("location:../../login.php?ntfy=sukses");
} 
if ($hasiledit) {
	header("location:../../?mod=users&ntfy=sukses");
}
?>