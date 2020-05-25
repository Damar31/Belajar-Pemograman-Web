<?php
include '../../conf.php';
include '../../conn.php';
$con = new conn();

$nama = post('nama');
$alamat = post('alamat');
$logo = "";

if($_FILES['logo']['tmp_name']!=""){

$tmp_logo = $_FILES['logo']['tmp_name'];
$logo = $_FILES['logo']['name'];

move_uploaded_file($tmp_logo, "../../assets/foto/".$logo);
}
$save = $con->add_data($nama, $alamat, $logo);
header("location:../../index.php?p=sekolah");
?>