<?php
error_reporting(0);

$produk = new Produk();

$id = $_GET['id'];
$data = !empty($id) ? $produk->getProduk($id) : array();

?>
<div class="row-cols-md-2">
    <div class="container my-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center fw-bold">Add Produk</h2>
                <form action="../controller/produk_controller.php" method="POST">

                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode" required value="<?= $data["kode"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama_produk" required value="<?= $data["nama_produk"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="harga_beli" class="form-label">Harga Beli</label>
                        <input type="text" class="form-control" id="harga_beli" name="harga_beli" required value="<?= $data["harga_beli"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="harga_jual" class="form-label">Harga Jual</label>
                        <input type="text" class="form-control" id="harga_jual" name="harga_jual" required value="<?= $data["harga_jual"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" required value="<?= $data["stok"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="min_stok" class="form-label">Min Stok</label>
                        <input type="number" class="form-control" id="min_stok" name="min_stok" required value="<?= $data["min_stok"]; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="jenis_produk_id" class="form-label">Jenis Produk</label>
                        <input type="number" class="form-control" id="jenis_produk_id" name="jenis_produk_id" required value="<?= $data["jenis_produk_id"]; ?>">

                        <div class=" modal-footer my-4">
                            <a href="index.php?url=product" type="button" class="btn btn-secondary">Cancel</a>
                            <?php if (empty($id)) : ?>
                                <button type="submit" class="btn btn-dark ms-2" name="proses" value="simpan">Add Item</button>
                            <?php else : ?>
                                <button type="submit" class="btn btn-dark ms-2" name="proses" value="ubah">Update Item</button>
                                <input type="hidden" name="idx" value="<?= $id; ?>">
                            <?php endif; ?>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>