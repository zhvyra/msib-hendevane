<?php

include_once '../config/koneksi.php';
include_once '../models/Pelanggan.php';

$pesanan = new Pelanggan();

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$email = $_POST['email'];
$kartu_id = $_POST['kartu_id'];

$data = [
    $kode, $nama, $jk, $tmp_lahir, $tgl_lahir, $email, $kartu_id
];

$tombol = $_POST['proses'];

switch ($tombol) {
    case 'simpan':
        $pesanan->tambahPelanggan($data);
        break;

    default:
        header('Location:../index.php?url=pelanggan');
        break;
}

header('Location:../index.php?url=pelanggan');
