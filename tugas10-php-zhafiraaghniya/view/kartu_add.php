<div class="row-cols-md-2">
    <div class="container my-5">
        <div class="card">
            <div class="container-fluid px-5 py-2">
                <h2 class="py-4 text-center fw-bold">Add Kartu</h2>
                <form action="../controller/kartu_controller.php" method="POST">

                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="diskon" class="form-label">Diskon</label>
                        <input type="number" class="form-control" id="diskon" name="diskon" required>
                    </div>

                    <div class="mb-3">
                        <label for="iuran" class="form-label">Iuran</label>
                        <input type="number" class="form-control" id="iuran" name="iuran" required>
                    </div>

                    <div class=" modal-footer my-4">
                        <a href="index.php?url=kartu" type="button" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-dark ms-2" name="proses" value="simpan">Add Kartu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>