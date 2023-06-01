<?php
error_reporting(0);
$kartu = new Kartu();

$id = $_GET['id'];
$data = !empty($id) ? $kartu->getKartu($id) : [];
?>

<div class="row-cols-md-2">
    <div class="container my-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center fw-bold">Add Kartu</h2>
                <form action="../controller/kartu_controller.php" method="POST">

                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode" required value="<?= $data["kode"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required value="<?= $data["nama"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="diskon" class="form-label">Diskon</label>
                        <input type="number" class="form-control" id="diskon" name="diskon" required value="<?= $data["diskon"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="iuran" class="form-label">Iuran</label>
                        <input type="number" class="form-control" id="iuran" name="iuran" required value="<?= $data["iuran"]; ?>">
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="dashboard.php?url=kartu" type="button" class="btn btn-secondary">Cancel</a>
                        <?php if (empty($id)) : ?>
                            <button type="submit" class="btn btn-dark ms-2" name="proses" value="simpan">Add Kartu</button>
                        <?php else : ?>
                            <button type="submit" class="btn btn-dark ms-2" name="proses" value="ubah">Update Kartu</button>
                            <input type="hidden" name="idx" value="<?= $id; ?>">
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>