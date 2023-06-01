<?php

$id = $_GET['id'];
$kartu = new Kartu();
$data_kartu = $kartu->getKartu($id);

?>

<h1 class="mt-4">Kartu</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="dashboard.php?url=kartu">Kartu</a></li>
    <li class="breadcrumb-item active">Kartu Detail</li>
</ol>

<div class="row col-md-8">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Detail Kartu
        </div>
        <div class="card-body">
            <div class="row">
                <div class="">
                    <table class="table">
                        <tr>
                            <th>Kode</th>
                            <td><?= $data_kartu['kode'] ?></td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td><?= $data_kartu['nama'] ?></td>
                        </tr>
                        <tr>
                            <th>Diskon</th>
                            <td><?= $data_kartu['diskon'] ?></td>
                        </tr>
                        <tr>
                            <th>Iuran</th>
                            <td><?= $data_kartu['iuran'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>