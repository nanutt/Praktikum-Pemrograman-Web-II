<?php
include_once 'Model.php';
$model = new Model();

$action = isset($_GET['action']) ? $_GET['action'] : 'add';
$id_member = isset($_GET['id']) ? $_GET['id'] : '';

$member = null;
if ($action == 'edit') {
    $member = $model->getMemberById($id_member);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Member</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
    <h2><?= $action == 'edit' ? 'Edit' : 'Tambah' ?> Member</h2>
    <form method="post" action="Member.php">
        <input type="hidden" name="action" value="<?= $action ?>">
        <?php if ($action == 'edit'): ?>
        <input type="hidden" name="id_member" value="<?= $member['id_member'] ?>">
        <?php endif; ?>
        <label>Nama Member:</label>
        <input type="text" name="nama_member" value="<?= $member ? $member['nama_member'] : '' ?>" required><br>
        <label>Nomor Member:</label>
        <input type="text" name="nomor_member" value="<?= $member ? $member['nomor_member'] : '' ?>" required><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" value="<?= $member ? $member['alamat'] : '' ?>" required><br>
        <label>Tanggal Mendaftar:</label>
        <input type="datetime-local" name="tgl_mendaftar" value="<?= $member ? $member['tgl_mendaftar'] : '' ?>" required><br>
        <label>Tanggal Terakhir Bayar:</label>
        <input type="date" name="tgl_terakhir_bayar" value="<?= $member ? $member['tgl_terakhir_bayar'] : '' ?>" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
