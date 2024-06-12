<?php
include_once 'Model.php';
$model = new Model();

$action = isset($_GET['action']) ? $_GET['action'] : 'add';
$id_peminjaman = isset($_GET['id']) ? $_GET['id'] : '';

$peminjaman = null;
if ($action == 'edit') {
    $peminjaman = $model->getPeminjamanById($id_peminjaman);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2><?= $action == 'edit' ? 'Edit' : 'Tambah' ?> Peminjaman</h2>
    <form method="post" action="Peminjaman.php">
        <input type="hidden" name="action" value="<?= $action ?>">
        <?php if ($action == 'edit'): ?>
        <input type="hidden" name="id_peminjaman" value="<?= $peminjaman['id_peminjaman'] ?>">
        <?php endif; ?>
        <label>Tanggal Pinjam:</label>
        <input type="date" name="tgl_pinjam" value="<?= $peminjaman ? $peminjaman['tgl_pinjam'] : '' ?>" required><br>
        <label>Tanggal Kembali:</label>
        <input type="date" name="tgl_kembali" value="<?= $peminjaman ? $peminjaman['tgl_kembali'] : '' ?>" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
