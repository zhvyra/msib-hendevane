<?php

include_once 'models/Kartu.php';

$kartu = new Kartu();
$data_kartu = $kartu->dataKartu();

?>

<h1 class="mt-4">Kartu</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Kartu Pelanggan</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Kartu Pelanggan
    </div>
    <div class="card-body d-flex justify-content-end">
        <a class="btn btn-primary" href="index.php?url=kartu_add">
            Tambah Kartu
        </a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Diskon</th>
                    <th>Iuran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Diskon</th>
                    <th>Iuran</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $i = 1;
                foreach ($data_kartu as $row) :
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['kode'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td>Rp. <?= number_format($row['diskon'], 0, ',', '.') ?></td>
                        <td>Rp. <?= number_format($row['iuran'], 0, ',', '.') ?></td>
                        <td>
                            <a href="index.php?url=kartu_detail&id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Detail</a>
                            <a href="index.php?url=kartu_edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="index.php?url=kartu_delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>