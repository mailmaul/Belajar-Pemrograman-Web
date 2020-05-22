<?php
include '../../conf.php';
include '../../library.php';
$lib = new Library();
$id = get('id');
$hapus_data = $lib->delete($id);

if ($hapus_data) {
    header("location:../../index.php?p=sekolah");
}
