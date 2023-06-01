<?php

class Pesanan
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataPesanan()
    {
        $sql = "SELECT pesanan.*, pelanggan.nama as nama_pelanggan FROM pesanan INNER JOIN pelanggan ON pesanan.pelanggan_id = pelanggan.id";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
