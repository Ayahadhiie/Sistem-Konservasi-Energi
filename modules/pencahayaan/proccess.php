<?php
include '../../inc/config.php';
include '../../lib/func.php';

$act=$_REQUEST['act'];
$data = $_POST;

$id = $_POST['id'];
$ruang = $_POST['ruang'];
$id_lampu = $_POST['lampu'];
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

if ($act=='hitung') {
$query = mysql_query("SELECT * FROM ruang WHERE id = $ruang ");
$data = mysql_fetch_array($query);
$L = $data['panjang'];
$W = $data['lebar'];
$query2 = mysql_query("SELECT * FROM lampu WHERE id = $id_lampu ");
$data2 = mysql_fetch_array($query2);
$lumen = $data2['lumen'];
$bagi = 200 * $L * $W ; 
$pembagi = $lumen * 0.8 * 0.65 * 1;
$N = $bagi / $pembagi ;

$sql = "insert into pencahayaan (user_id,ruang_id,lampu_id,jumlah_lampu,keterangan) values ('$id','$ruang','$id_lampu','$N','')";
$hasil = @mysql_query($sql);

}

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


if ($hasil){
	header("location:../../?mod=pencahayaan&ntfy=sukses");
} 
if ($hasiledit) {
	header("location:../../?mod=users&ntfy=sukses");
}
?>