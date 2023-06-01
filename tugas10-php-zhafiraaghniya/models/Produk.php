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

    public function detailProduk($id)
    {
        $sql = "SELECT produk.* ,jenis_produk.nama as kategori FROM produk INNER JOIN jenis_produk ON jenis_produk.id = produk.jenis_produk_id WHERE produk.id = ?";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function tambahProduk($data)
    {
        $sql = "INSERT INTO produk (kode,nama_produk,harga_beli,harga_jual,stok,min_stok,jenis_produk_id) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->execute($data);
    }
}
