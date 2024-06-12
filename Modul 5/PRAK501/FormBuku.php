<?php
include_once 'Model.php';
$model = new Model();

$action = isset($_GET['action']) ? $_GET['action'] : 'add';
$id_buku = isset($_GET['id']) ? $_GET['id'] : '';

$Buku = null;
if ($action == 'edit') {
    $Buku = $model->getBukuById($id_buku);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2><?= $action == 'edit' ? 'Edit' : 'Tambah' ?> Buku</h2>
    <form method="post" action="Buku.php">
        <input type="hidden" name="action" value="<?= $action ?>">
        <?php if ($action == 'edit'): ?>
        <input type="hidden" name="id_buku" value="<?= $Buku['id_buku'] ?>">
        <?php endif; ?>
        <label>Judul Buku:</label>
        <input type="text" name="judul_buku" value="<?= $Buku ? $Buku['judul_buku'] : '' ?>" required><br>
        <label>Penulis:</label>
        <input type="text" name="penulis" value="<?= $Buku ? $Buku['penulis'] : '' ?>" required><br>
        <label>Penerbit:</label>
        <input type="text" name="penerbit" value="<?= $Buku ? $Buku['penerbit'] : '' ?>" required><br>
        <label>Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" value="<?= $Buku ? $Buku['tahun_terbit'] : '' ?>" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
