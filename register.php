<?php
include "inc/config.php";
include "lib/func.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistem Konservasi Energi | Login</title>

<link href="<?php echo $adminthemepath ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $adminthemepath ?>css/datepicker3.css" rel="stylesheet">
<link href="<?php echo $adminthemepath ?>css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="<?php echo $adminthemepath ?>js/html5shiv.js"></script>
<script src="<?php echo $adminthemepath ?>js/respond.min.js"></script>
<![endif]-->

</head>

<body>
<?php

echo modtitle('Daftar Pengguna');
echo panel('Form Daftar');

echo form('modules/users/proccess.php?act=save', 'new_user');
echo forminput('text', 'first_name','Nama Awal', 'form-control');
echo forminput('text', 'last_name','Nama Akhir', 'form-control');
echo forminput('text', 'username','Username', 'form-control');
echo forminput('text', 'email','Email', 'form-control');
echo forminput('password', 'password','Password','form-control');
echo forminput('password', '','Ulangi Password', 'form-control');

echo forminput('submit', 'Daftar');
echo forminput('closeform');
include 'footer.php';

?>
