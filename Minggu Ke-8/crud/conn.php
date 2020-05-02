<?php
$engi = "mysql";
$host = "localhost";
$dbse = "crud_pdo";
$user = "root";
$pass = "";
$koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host,
$user,$pass);
?>