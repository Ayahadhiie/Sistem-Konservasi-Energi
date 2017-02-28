
<?php
echo modtitle('Data Ruang');
echo panel('Tambah Data Ruang');
$user_id = $_SESSION['user_id'];
echo form('modules/ruang/proccess.php?act=save', 'tambah_ruang');
echo formedit('hidden','user_id','','', $user_id);
echo forminput('text', 'nama_ruang','Nama Ruangan', 'form-control');
echo formedit('select', 'jenis_ruang','Jenis Ruang', 'form-control');
	
	$qry = mysql_query("SELECT * FROM jenis_ruang order by id ASC");
	while ($row = mysql_fetch_array($qry)) {
?>
<option value="<?php echo $row['jenis_ruang'] ?>"><?php echo $row['jenis_ruang'] ?></option>
<?php
}
echo formedit('closeselect');
echo forminput('text', 'panjang','Panjang (M)', 'form-control');
echo forminput('text', 'lebar','Lebar Ruang (M)', 'form-control');
echo forminput('text', 'keterangan','keterangan', 'form-control');

echo forminput('submit', 'Simpan');
echo forminput('closeform');

?>