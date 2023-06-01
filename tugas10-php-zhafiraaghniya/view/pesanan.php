<?php

include_once 'models/Pesanan.php';

$pesanan = new Pesanan();
$data_pesanan = $pesanan->dataPesanan();

?>

<h1 class="mt-4">Pesanan</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Pesanan</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Pesanan
    </div>
    <div class="card-body d-flex justify-content-end">
        <a class="btn btn-primary" href="index.php?url=pesanan_add">
            Tambah Pesanan
        </a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Nama Pesanan</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Nama Pesanan</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $i = 1;
                foreach ($data_pesanan as $row) :
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['tanggal'] ?></td>
                        <td>Rp. <?= number_format($row['total'], 0, ',', '.') ?></td>
                        <td><?= $row['nama_pelanggan'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>