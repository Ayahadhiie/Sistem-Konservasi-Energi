<?php
session_start();

include "inc/config.php";

$qry = "SELECT aug.* , ag.* FROM admin_users_groups aug, admin_groups ag WHERE aug.group_id=ag.id";
$res = mysql_query($qry);
$arr = mysql_fetch_array($res);
$level = $arr['id'];

$username = $_POST['login'];
$password = $_POST['password'];
$query = "SELECT * FROM admin_users WHERE username='$username'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$datapass = $data['password'];
if ($data['password'] == SHA1($password))
{
$_SESSION['level'] = $level;
$_SESSION['username'] = $data['username'];
$first_name = $data['first_name'];
$last_name = $data['last_name'];
$_SESSION['name'] = "$first_name $last_name";
$_SESSION['user_id'] = $data['id'];
header("location:index.php?mod=home&id=".$data['id']."");
}
else {
header("location:login.php?msg=error");
echo "Username Atau Password Salah";
}
?>