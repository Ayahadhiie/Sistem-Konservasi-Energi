<?php
include "inc/cek.php";
include "inc/config.php";
include "lib/func.php";
$user_id = $_REQUEST['id'];
$user_id = $_SESSION['user_id'];

$mod = $_REQUEST['mod'];
$ntfy = $_REQUEST['ntfy'];
$act =  $_REQUEST['act'];

$judul = strtoupper($mod);
include_once 'template/admin/header.php';
include_once 'template/admin/nav.php';
$id = $_REQUEST['id'];
$mod_path = "modules/$mod/index.php";
require ''.$mod_path.'';

include_once 'template/admin/footer.php';
?>