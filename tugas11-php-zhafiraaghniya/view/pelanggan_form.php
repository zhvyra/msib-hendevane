<?php
error_reporting(0);
$pelanggan = new Pelanggan();
$data_pelanggan = $pelanggan->dataPelanggan();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$data = !empty($id) ? $pelanggan->getPelanggan($id) : array();

?>

<div class="row-cols-md-2">
    <div class="container my-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center fw-bold">Add Pelanggan</h2>
                <form action="../controller/pelanggan_controller.php" method="POST">

                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode" required value="<?= $data['kode'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required value="<?= $data['nama'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jk" name="jk" required value="<?= $data['jk'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required value="<?= $data['tmp_lahir'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required value="<?= $data['tgl_lahir'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required value="<?= $data['email'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="kartu_id" class="form-label">Kartu</label>
                        <input type="text" class="form-control" id="kartu_id" name="kartu_id" required value="<?= $data['kartu_id'] ?>">
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="index.php?url=pelanggan" type="button" class="btn btn-secondary">Cancel</a>
                        <?php if (!empty($id)) : ?>
                            <button type="submit" class="btn btn-dark ms-2" name="proses" value="ubah">Update Pelanggan</button>
                            <input type="hidden" name="idx" value="<?= $id ?>">
                        <?php else : ?>
                            <button type="submit" class="btn btn-dark ms-2" name="proses" value="simpan">Add Pelanggan</button>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>