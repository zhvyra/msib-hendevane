<?php

class Kartu
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataKartu()
    {
        $sql = "SELECT * FROM kartu";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getKartu($id)
    {
        $sql = "SELECT * FROM kartu WHERE id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function tambahKartu($data)
    {
        $sql = "INSERT INTO kartu (kode, nama, diskon, iuran) VALUES (?, ?, ?, ?)";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
    }
}
