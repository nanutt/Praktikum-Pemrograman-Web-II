<?= $this->extend('layout/admin/admin_layout') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <h3 class="card-title text-center mb-4">Tambah Buku</h3>
        <form action="" method="post" id="text-editor">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul Buku" required>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" class="form-control" placeholder="Nama Penulis" required>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit" class="form-control" placeholder="Nama Penerbit" required>
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" required>
            </div>
            <div class="form-group">
                <button type="submit" name="status" value="published" class="btn btn-primary w-100">Publish</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
