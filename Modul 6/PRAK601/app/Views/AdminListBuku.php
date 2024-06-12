<?= $this->extend('layout/admin/admin_layout') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <h2 class="mb-4">Daftar Buku</h2>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($bukuwhere as $Buku): ?>
                <tr>
                    <td><?= $Buku['id'] ?></td>
                    <td>
                        <strong><?= $Buku['judul'] ?></strong><br>
                        <small class="text-muted"><?= $Buku['tahun_terbit'] ?></small>
                    </td>
                    <td>
                        <a href="<?= base_url('admin/buku/'.$Buku['id'].'/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                        <a href="<?= base_url('admin/buku/'.$Buku['id'].'/delete') ?>" onclick="return confirm ('Yakin ingin menghapus data ini?')" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <h2 class="mb-4 mt-5">Detail Buku</h2>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($bukuwhere as $Buku): ?>
                <tr>
                    <td><?= $Buku['id'] ?></td>
                    <td>
                        <strong><?= $Buku['judul'] ?></strong><br>
                    </td>
                    <td>
                        <strong><?= $Buku['penulis'] ?></strong><br>
                    </td>
                    <td>
                        <strong><?= $Buku['penerbit'] ?></strong><br>
                    </td>
                    <td>
                        <strong><?= $Buku['tahun_terbit'] ?></strong><br>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-center my-3">
        <a href="<?= base_url('admin/buku/new') ?>" class="btn btn-primary">Tambah Buku</a>
    </div>
</div>
<?= $this->endSection() ?>
