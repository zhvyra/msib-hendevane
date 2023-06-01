<?php

include_once 'models/Pesanan.php';

$pesanan = new Pesanan();
$data_pesanan = $pesanan->dataPesanan();

?>

<h1 class="mt-4">Pesanan</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active">Pesanan</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Pesanan
    </div>
    <div class="card-body d-flex justify-content-end">
        <a class="btn btn-primary" href="dashboard.php?url=pesanan_form">
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
                    <?php if ($_SESSION['member']['role'] == 'admin') : ?>
                        <th>Action</th>
                    <?php endif ?>
                </tr>
            </thead>
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
                        <?php if ($_SESSION['member']['role'] == 'admin') : ?>
                            <td>
                                <form action="controller/pesanan_controller.php" method="POST">
                                    <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                                    <a class="btn btn-sm btn-warning" href="dashboard.php?url=pesanan_form&id=<?= $row['id'] ?>">
                                        Edit
                                    </a>
                                    <button type="submit" class="btn btn-sm btn-danger" name="proses" value="hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        <?php endif ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>