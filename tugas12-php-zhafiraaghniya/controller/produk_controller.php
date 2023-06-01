<?php

include_once '../config/koneksi.php';
include_once '../models/Produk.php';

$produk = new Produk();

$kode = $_POST['kode'];
$nama_produk = $_POST['nama_produk'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$stok = $_POST['stok'];
$min_stok = $_POST['min_stok'];
$jenis_produk_id = $_POST['jenis_produk_id'];

$data = [
    $kode, $nama_produk, $harga_beli, $harga_jual, $stok, $min_stok, $jenis_produk_id
];

$tombol = $_POST['proses'];

switch ($tombol) {
    case 'simpan':
        $produk->tambahProduk($data);
        break;

    case 'ubah':
        $data[] = $_POST['idx'];
        $produk->ubahProduk($data);
        break;

    case 'hapus':
        unset($data);
        $id[] = $_POST['idx'];
        $produk->hapusProduk($id);
        break;

    default:
        header('Location:../dashboard.php?url=product');
        break;
}

header('Location:../dashboard.php?url=product');
