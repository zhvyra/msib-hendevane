<?php

include_once 'models/Pelanggan.php';

$pelanggan = new Pelanggan();
$data_pelanggan = $pelanggan->dataPelanggan();

?>

<h1 class="mt-4">Pelanggan</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Pelanggan</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Pelanggan
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                foreach ($data_pelanggan as $row) :
                ?>
                    <tr>
                        <td><?= $row['kode'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['jk'] ?></td>
                        <td><?= $row['tmp_lahir'] ?></td>
                        <td><?= $row['tgl_lahir'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['kartu'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>