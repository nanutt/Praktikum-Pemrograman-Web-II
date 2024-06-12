<?php
include_once 'Model.php';
$model = new Model();

$peminjaman = $model->getAllPeminjaman();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'add') {
            $data = array(
                'tgl_pinjam' => $_POST['tgl_pinjam'],
                'tgl_kembali' => $_POST['tgl_kembali']
            );
            $model->insertPeminjaman($data);
        } elseif ($_POST['action'] == 'edit') {
            $id_peminjaman = $_POST['id_peminjaman'];
            $data = array(
                'tgl_pinjam' => $_POST['tgl_pinjam'],
                'tgl_kembali' => $_POST['tgl_kembali']
            );
            $model->updatePeminjaman($id_peminjaman, $data);
        }
        header("Location: Peminjaman.php");
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $model->deletePeminjaman($_GET['id']);
    header('Location: Peminjaman.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Data Peminjaman</h2>
    <table border="1">
        <tr>
            <th>ID Peminjaman</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($peminjaman as $loan): ?>
        <tr>
            <td><?= $loan['id_peminjaman'] ?></td>
            <td><?= $loan['tgl_pinjam'] ?></td>
            <td><?= $loan['tgl_kembali'] ?></td>
            <td>
                <a class="btn-member" href="FormPeminjaman.php?action=edit&id=<?= $loan['id_peminjaman'] ?>" class="btn-loan">Edit</a>
                <a class="btn-member" href="Peminjaman.php?action=delete&id=<?= $loan['id_peminjaman'] ?>" class="btn-loan" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a class="btn-member" href="FormPeminjaman.php?action=add" class="add-loan-btn">Tambah Peminjaman</a>
</body>
</html>
