<?php

echo modtitle('Menu Pengguna');
echo panel('Tambah User');
echo form('modules/users/proccess.php?act=save', 'new_user');
echo forminput('text', 'first_name', 'Nama Awal', 'form-control');
echo forminput('text', 'last_name','Nama Akhir', 'form-control');
echo forminput('text', 'username','Username', 'form-control');
echo forminput('text', 'email','Email', 'form-control');
echo forminput('password', 'password','Password', 'form-control');
echo forminput('password', '','Ulangi Password', 'form-control');
echo forminput('text', '','Nomor Telpon', 'form-control');
echo forminput('textarea', '','alamat', 'form-control');
echo forminput('text', '','Daya Listrik Rumah', 'form-control');

echo forminput('submit', 'Update');
echo forminput('closeform');

?>