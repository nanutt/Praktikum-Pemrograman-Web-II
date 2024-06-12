<?php
include_once 'Model.php';
$model = new Model();

$books = $model->getAllBuku();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'add') {
            $data = array(
                'judul_buku' => $_POST['judul_buku'],
                'penulis' => $_POST['penulis'],
                'penerbit' => $_POST['penerbit'],
                'tahun_terbit' => $_POST['tahun_terbit']
            );
            $model->insertBuku($data);
        } elseif ($_POST['action'] == 'edit') {
            $id_buku = $_POST['id_buku'];
            $data = array(
                'judul_buku' => $_POST['judul_buku'],
                'penulis' => $_POST['penulis'],
                'penerbit' => $_POST['penerbit'],
                'tahun_terbit' => $_POST['tahun_terbit']
            );
            $model->updateBuku($id_buku, $data);
        }
        header("Location: Buku.php");
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $model->deleteBuku($_GET['id']);
    header('Location: Buku.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Data Buku</h2>
    <table class="buku">
        <tr>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($books as $book): ?>
        <tr>
            <td><?= $book['id_buku'] ?></td>
            <td><?= $book['judul_buku'] ?></td>
            <td><?= $book['penulis'] ?></td>
            <td><?= $book['penerbit'] ?></td>
            <td><?= $book['tahun_terbit'] ?></td>
            <td>
                <a href="FormBuku.php?action=edit&id=<?= $book['id_buku'] ?>" class="btn-member">Edit</a>
                <a href="Buku.php?action=delete&id=<?= $book['id_buku'] ?>" class="btn-member" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a class="btn-member" href="FormBuku.php?action=add" class="add-book-btn">Tambah Buku</a>
</body>
</html>
