<?php

class Produk
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataProduk()
    {
        $sql = "SELECT produk.* ,jenis_produk.nama as kategori FROM produk INNER JOIN jenis_produk ON jenis_produk.id = produk.jenis_produk_id";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
