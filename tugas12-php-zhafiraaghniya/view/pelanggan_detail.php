<?php

$id = $_GET['id'];
$pelanggan = new Pelanggan();
$data_pelanggan = $pelanggan->getPelanggan($id);

?>

<h1 class="mt-4">Pelanggan</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="dashboard.php?url=pelanggan">Pelanggan</a></li>
    <li class="breadcrumb-item active">Pelanggan Detail</li>
</ol>

<div class="row col-md-8">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Detail Pelanggan
        </div>
        <div class="card-body">
            <div class="row">
                <div class="">
                    <table class="table">
                        <tr>
                            <th>Kode</th>
                            <td><?= $data_pelanggan['kode'] ?></td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td><?= $data_pelanggan['nama'] ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td><?= $data_pelanggan['jk'] ?></td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td><?= $data_pelanggan['tmp_lahir'] ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td><?= $data_pelanggan['tgl_lahir'] ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= $data_pelanggan['email'] ?></td>
                        </tr>
                        <tr>
                            <th>Kartu</th>
                            <td><?= $data_pelanggan['kartu'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>