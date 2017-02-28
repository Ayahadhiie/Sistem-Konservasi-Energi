<?php

echo modtitle('Menu Pengguna');
echo panel('Edit Profil');



	$query = mysql_query("SELECT * FROM admin_users, users_detail WHERE admin_users.id = $user_id ");
	$data = mysql_fetch_array($query);

$id = $data['id'];
$username = $data['username'];
$email = $data['email'];
$pass = $data['password'];
$password = sha1($pass);
$first_name = $data['first_name'];
$last_name = $data['last_name'];
$nomor_pelanggan = $data['nomor_pelanggan'];
$telp = $data['telp'];
$daya_listrik = $data['daya_listrik'];
$alamat = $data['alamat'];

echo form('modules/users/proccess.php?act=edit', 'new_user');

echo formedit('hidden','id','','', $user_id);
echo formedit('text', 'first_name','Nama Awal', 'form-control', $first_name);
echo formedit('text', 'last_name','Nama Akhir', 'form-control', $last_name);
echo formedit('text', 'username','Username', 'form-control', $username , 'disabled');
echo formedit('text', 'email','Email', 'form-control', $email );
echo formedit('password', 'password','Password','form-control');
echo formedit('password', 'password2','Ulangi Password', 'form-control');

echo formedit('text', 'nomor_pelanggan','Nomor Pelanggan PLN','form-control', $nomor_pelanggan);
echo formedit('text', 'telp','Nomor Telpon', 'form-control', $telp);
echo formedit('textarea', 'alamat','alamat', 'form-control', $alamat);	
echo formedit('select', 'daya_listrik','Daya Listrik', 'form-control');

	$qry = mysql_query("SELECT * FROM daya_listrik order by id ASC");
	while ($row = mysql_fetch_array($qry)) {
?>
<option value="<?php echo $row['name'] ?>"><?php echo $row['description'] ?></option>
<?php
}
echo formedit('closeselect');
echo formedit('submit', 'Update');
echo formedit('closeform');

?>