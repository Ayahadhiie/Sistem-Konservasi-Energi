<?php
echo modtitle('Hitung Pencahayaan Ruang');
echo panel('Hitung Titik Lampu');

	$query = mysql_query("SELECT * FROM admin_users, users_detail WHERE admin_users.id = $user_id and users_detail.id = $user_id ");
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

echo form('modules/'.$mod.'/proccess.php?act=hitung', 'hitung_lux');

echo formedit('hidden','id','','', $id);

echo formedit('select', 'ruang','Nama Ruangan', 'form-control');
echo "<option>--Pilih--</option>";
	$qry = mysql_query("SELECT * FROM ruang Where user_id='$user_id' ");
	while ($row = mysql_fetch_array($qry)) {
?>
<option value="<?php echo $row['id'] ?>"><?php echo $row['nama_ruang'] ?></option>
<?php
}
echo formedit('closeselect');
echo formedit('select', 'lampu','Tipe Lampu', 'form-control');
echo "<option>--Pilih--</option>";
	$qry = mysql_query("SELECT * FROM lampu order by id ASC");
	while ($row = mysql_fetch_array($qry)) {
?>
<option value="<?php echo $row['id'] ?>"><?php echo $row['nama_lampu'] ?></option>
<?php
}
echo formedit('closeselect');
echo formedit('submit', 'Hitung');
echo formedit('closeform');

echo panel2('Data Ruang Dan Titik Lampu');
?>
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                                    <thead>
                                    <tr>
                                        <th data-field="nama_ruang" data-sortable="true">Nama Ruang</th>
                                        <th data-field="jenis_ruang"  data-sortable="true">Jenis Ruang</th>
                                        <th data-field="lampu" data-sortable="true">Nama Lampu</th>
                                        <th data-field="lebar" data-sortable="true">Jumlah Lampu</th>
                                        <th data-field="keterangan" data-sortable="false">Keterangan</th>
                                        <th data-field="Tindakan" data-sortable="false">Tindakan</th>

                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                    	 <?php
											$query = mysql_query("SELECT * FROM lampu,ruang,pencahayaan WHERE pencahayaan.user_id=$user_id and ruang.id = pencahayaan.ruang_id ");
											while ($data2 = mysql_fetch_array($query)) {
											?>
											<tr>
                                                <td><?php echo $data2['nama_ruang'] ?></td>
                                                <td><?php echo $data2['jenis_ruang'] ?></td>
                                                <td><?php echo $data2['nama_lampu'] ?></td>
                                                <td><?php echo $data2['jumlah_lampu'] ?></td>
                                                <td><?php echo $data2['keterangan'] ?></td>
                                                <td><a href="index.php?mod=<?php echo $mod?>&act=detail&id=<?php echo $data2['id']?>" title="Detail"><i class="icon-edit">Detail</i></a> &nbsp; &nbsp; 
                                                	<a href="modules/<?php echo $mod?>/remove.php?mod=<?php echo $mod?>&id=<?php echo $id?>" onclick="return tanya()" title="Hapus Record Ini"><i class="icon-remove"></i></a></td>
                                            <?php
											}
											?>
                                            </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div><!--/.row-->  