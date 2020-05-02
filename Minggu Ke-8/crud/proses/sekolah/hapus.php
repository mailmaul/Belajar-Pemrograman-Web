<?php
include '../../conf.php';
include '../../conn.php';
$id = get('id');
$hapus = $koneksi->prepare("DELETE FROM sekolah WHERE `id` = 
'".$id."'");
$hapus->execute();
header("location:../../index.php?p=sekolah");
?>