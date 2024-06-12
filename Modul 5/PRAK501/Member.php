<?php
include_once 'Model.php';
$model = new Model();
$member = $model->getAllMembers();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'add') {
            $nama_member = $_POST['nama_member'];
            $nomor_member = $_POST['nomor_member'];
            $alamat = $_POST['alamat'];
            $tgl_mendaftar = $_POST['tgl_mendaftar'];
            $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
            $data = array(
                'nama_member' => $nama_member,
                'nomor_member' => $nomor_member,
                'alamat' => $alamat,
                'tgl_mendaftar' => $tgl_mendaftar,
                'tgl_terakhir_bayar' => $tgl_terakhir_bayar
            );
            $model->insertMember($data);
            header("Location: Member.php");
        } elseif ($_POST['action'] == 'edit') {
            $id_member = $_POST['id_member'];
            $nama_member = $_POST['nama_member'];
            $nomor_member = $_POST['nomor_member'];
            $alamat = $_POST['alamat'];
            $tgl_mendaftar = $_POST['tgl_mendaftar'];
            $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
            $data = array(
                'nama_member' => $nama_member,
                'nomor_member' => $nomor_member,
                'alamat' => $alamat,
                'tgl_mendaftar' => $tgl_mendaftar,
                'tgl_terakhir_bayar' => $tgl_terakhir_bayar
            );
            $model->updateMember($id_member, $data);
            header("Location: Member.php");
        }
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $model->deleteMember($_GET['id']);
    header('Location: Member.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Member</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
    <h2>Data Member</h2>
    <table class ="member" border="1">
        <tr>
            <th>ID Member</th>
            <th>Nama Member</th>
            <th>Nomor Member</th>
            <th>Alamat</th>
            <th>Tanggal Mendaftar</th>
            <th>Tanggal Terakhir Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($member as $member): ?>
        <tr>
            <td><?= $member['id_member'] ?></td>
            <td><?= $member['nama_member'] ?></td>
            <td><?= $member['nomor_member'] ?></td>
            <td><?= $member['alamat'] ?></td>
            <td><?= $member['tgl_mendaftar'] ?></td>
            <td><?= $member['tgl_terakhir_bayar'] ?></td>
            <td class="btn-continer">
                <a class = "btn-member" href="FormMember.php?action=edit&id=<?= $member['id_member'] ?>">Edit</a>
                <a class = "btn-member" href="Member.php?action=delete&id=<?= $member['id_member'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a class="a-member" href="FormMember.php?action=add">Tambah Member</a>    
</body>
</html>
