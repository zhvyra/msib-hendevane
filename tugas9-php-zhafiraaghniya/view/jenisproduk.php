<?php

include_once 'models/JenisProduk.php';

$jenis_produk = new JenisProduk();
$data_jenis_produk = $jenis_produk->dataJenisProduk();


?>

<h1 class="mt-4">Jenis Produk</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Jenis Produk</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Jenis Produk
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $i = 1;
                foreach ($data_jenis_produk as $row) :
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= ucfirst($row['nama']) ?></td>
                        <td><?= ucfirst($row['ket']) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>