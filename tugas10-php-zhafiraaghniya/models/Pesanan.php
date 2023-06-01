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

    public function getPesanan($id)
    {
        $sql = "SELECT * FROM pesanan WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function tambahPesanan($data)
    {
        $sql = "INSERT INTO pesanan (tanggal, total, pelanggan_id) VALUES (?, ?, ?)";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
    }
}
