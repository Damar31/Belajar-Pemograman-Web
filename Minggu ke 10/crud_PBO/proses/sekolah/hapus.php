<?php
include '../../conf.php';
include '../../conn.php';
$lib = new conn();
$data = $lib->delete();

header("location:../../index.php?p=sekolah");
?>
