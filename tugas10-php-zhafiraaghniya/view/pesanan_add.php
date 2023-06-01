<div class="row-cols-md-2">
    <div class="container my-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center fw-bold">Add Pesanan</h2>
                <form action="../controller/pesanan_controller.php" method="POST">

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>

                    <div class="mb-3">
                        <label for="total" class="form-label">Total</label>
                        <input type="text" class="form-control" id="total" name="total" required>
                    </div>

                    <div class="mb-3">
                        <label for="pelanggan_id" class="form-label">Pelanggan ID</label>
                        <input type="number" class="form-control" id="pelanggan_id" name="pelanggan_id" required>
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="index.php?url=pesanan" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="proses" value="simpan">Add Pesanan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>