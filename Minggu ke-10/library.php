<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "pdo_crud";
        $username = "root";
        $password = "";
        $this->koneksi = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }

    public function add_data($nama, $alamat, $logo)
    {
        $data = $this->koneksi->prepare('INSERT INTO sekolah (nama,alamat,logo) VALUES (?, ?, ?)');

        $data->bindParam(1, $nama);
        $data->bindParam(2, $alamat);
        $data->bindParam(3, $logo);

        $data->execute();
        return $data->rowCount();
    }

    public function show()
    {
        $query = $this->koneksi->prepare("SELECT * FROM sekolah");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($id)
    {
        $query = $this->koneksi->prepare("SELECT * FROM sekolah where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($id, $nama, $alamat, $update_logo)
    {
        $query = $this->koneksi->prepare("UPDATE sekolah SET `nama`='" . $nama . "', `alamat`='" . $alamat . "' " . $update_logo . " WHERE `id` ='" . $id . "'");

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id)
    {
        $query = $this->koneksi->prepare("DELETE FROM sekolah where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->rowCount();
    }

    public function pdf()
    {
        $hasil = $this->koneksi->prepare("SELECT * FROM sekolah WHERE id = '" . get('id') . "'");
        $hasil->execute();
        return $hasil->fetch(PDO::FETCH_OBJ);
    }

    public function download()
    {
        $hasil = $this->koneksi->prepare("SELECT * FROM sekolah WHERE id = '" . get('id') . "'");
        $hasil->execute();
        return $hasil->fetch(PDO::FETCH_OBJ);
    }
}
