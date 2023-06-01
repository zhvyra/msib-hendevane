<?php

$produk = new Produk();
$data_produk = $produk->dataProduk();

?>

<h1 class="mt-4">Produk</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Produk</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Produk
    </div>
    <div class="card-body d-flex justify-content-end">
        <a class="btn btn-primary" href="dashboard.php?url=product_form">
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
                            <form action="controller/produk_controller.php" method="POST">
                                <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                                <a href="dashboard.php?url=product_detail&id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Detail</a>
                                <?php if ($_SESSION['member']['role'] == 'admin') : ?>
                                    <a href="dashboard.php?url=product_form&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="submit" name="proses" value="hapus" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</button>
                                <?php endif; ?>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>