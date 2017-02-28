<?php
session_start();
session_destroy();
include"../inc/setting.php";
header("location:index.php");
?>