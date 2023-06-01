<?php

include_once '../config/koneksi.php';
include_once '../models/Pesanan.php';

$pesanan = new Pesanan();

$tanggal = $_POST['tanggal'];
$total = $_POST['total'];
$pelanggan_id = $_POST['pelanggan_id'];

$data = [
    $tanggal, $total, $pelanggan_id
];

$tombol = $_POST['proses'];

switch ($tombol) {
    case 'simpan':
        $pesanan->tambahPesanan($data);
        break;

    default:
        header('Location:../index.php?url=pesanan');
        break;
}

header('Location:../index.php?url=pesanan');
