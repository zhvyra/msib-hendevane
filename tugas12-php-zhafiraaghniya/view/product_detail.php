<?php
$id = $_GET['id'];
$produk = new Produk();
$data_produk = $produk->getProduk($id);
?>

<h1 class="mt-4">Produk</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="dashboard.php?url=product">Produk</a></li>
    <li class="breadcrumb-item active">Produk Detail</li>
</ol>

<div class="row col-md-8">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Detail Produk
        </div>
        <div class="card-body">
            <div class="row">
                <div class="">
                    <table class="table">
                        <tr>
                            <th>Kode</th>
                            <td><?= $data_produk['kode'] ?></td>
                        </tr>
                        <tr>
                            <th>Nama Produk</th>
                            <td><?= $data_produk['nama_produk'] ?></td>
                        </tr>
                        <tr>
                            <th>Harga Beli</th>
                            <td><?= $data_produk['harga_beli'] ?></td>
                        </tr>
                        <tr>
                            <th>Harga Jual</th>
                            <td><?= $data_produk['harga_jual'] ?></td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td><?= $data_produk['stok'] ?></td>
                        </tr>
                        <tr>
                            <th>Min Stok</th>
                            <td><?= $data_produk['min_stok'] ?></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td><?= ucfirst($data_produk['kategori']) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>