<?= $this->extend('layout/admin/admin_layout') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2 class="mb-4">Edit Buku</h2>
    <div class="card shadow-sm p-4">
        <form action="" method="post" id="text-editor">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input value="<?=$buku['judul'] ?>" type="text" name="judul" class="form-control" placeholder="Judul Buku" required>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input value="<?=$buku['penulis'] ?>" type="text" name="penulis" class="form-control" placeholder="Nama Penulis" required>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input value="<?=$buku['penerbit'] ?>" type="text" name="penerbit" class="form-control" placeholder="Nama Penerbit" required>
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input value="<?=$buku['tahun_terbit'] ?>" type="number" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" required>
            </div>
            <div class="form-group">
                <button type="submit" name="status" value="published" class="btn btn-primary w-100">Update</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
