<?php
include '../../library.php';
include '../../conf.php';

$lib = new Library();

$nama = post('nama');
$alamat = post('alamat');
$logo = "";

if ($_FILES['logo']['tmp_name'] !== "") {
    $tmp_logo = $_FILES['logo']['tmp_name'];
    $logo = $_FILES['logo']['name'];
    move_uploaded_file($tmp_logo, "../../assets/foto/" . $logo);
}

$simpan = $lib->add_data($nama, $alamat, $logo);
if ($simpan) {
    header("location:../../index.php?p=sekolah");
}
