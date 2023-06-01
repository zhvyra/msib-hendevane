<div class="row-cols-md-2">
    <div class="container my-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center fw-bold">Add Produk</h2>
                <form action="../controller/produk_controller.php" method="POST">

                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama_produk" required>
                    </div>

                    <div class="mb-3">
                        <label for="harga_beli" class="form-label">Harga Beli</label>
                        <input type="text" class="form-control" id="harga_beli" name="harga_beli" required>
                    </div>

                    <div class="mb-3">
                        <label for="harga_jual" class="form-label">Harga Jual</label>
                        <input type="text" class="form-control" id="harga_jual" name="harga_jual" required>
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" required>
                    </div>

                    <div class="mb-3">
                        <label for="min_stok" class="form-label">Min Stok</label>
                        <input type="number" class="form-control" id="min_stok" name="min_stok" required>
                    </div>

                    <div class="mb-3">
                        <label for="jenis_produk_id" class="form-label">Jenis Produk</label>
                        <input type="number" class="form-control" id="jenis_produk_id" name="jenis_produk_id" required>

                        <div class=" modal-footer my-4">
                            <a href="index.php?url=product" type="button" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-dark ms-2" name="proses" value="simpan">Add Item</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>