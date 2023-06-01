<?php

include_once '../config/koneksi.php';
include_once '../models/Kartu.php';

$kartu = new Kartu();

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$diskon = $_POST['diskon'];
$iuran = $_POST['iuran'];

$data = [
    $kode, $nama, $diskon, $iuran
];

$tombol = $_POST['proses'];

switch ($tombol) {
    case 'simpan':
        $kartu->tambahKartu($data);
        break;

    default:
        header('Location:../index.php?url=kartu');
        break;
}

header('Location:../index.php?url=kartu');
