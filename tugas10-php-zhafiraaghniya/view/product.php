<?php

$produk = new Produk();
$data_produk = $produk->dataProduk();

?>

<h1 class="mt-4">Produk</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Produk</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Produk
    </div>
    <div class="card-body d-flex justify-content-end">
        <a class="btn btn-primary" href="index.php?url=product_add">
            Tambah Produk
        </a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Min Stok</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Min Stok</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                foreach ($data_produk as $row) :
                ?>
                    <tr>
                        <td><?= $row['kode'] ?></td>
                        <td><?= $row['nama_produk'] ?></td>
                        <td><?= $row['harga_beli'] ?></td>
                        <td><?= $row['harga_jual'] ?></td>
                        <td><?= $row['stok'] ?></td>
                        <td><?= $row['min_stok'] ?></td>
                        <td><?= ucfirst($row['kategori']) ?></td>
                        <td>
                            <a href="index.php?url=product_detail&id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Detail</a>
                            <a href="index.php?url=product_edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="index.php?url=product_delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>