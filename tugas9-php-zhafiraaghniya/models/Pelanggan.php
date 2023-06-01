<?php

class Pelanggan
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataPelanggan()
    {
        $sql = "SELECT pelanggan.*, kartu.nama as kartu FROM pelanggan INNER JOIN kartu ON kartu.id = pelanggan.kartu_id";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
