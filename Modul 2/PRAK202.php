<!DOCTYPE html>
<html>
<head>
    <title>Form Input Mahasiswa</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : ''; ?>">
        <?php
        if (isset($_POST['submit']) && empty($_POST['nama'])) {
            echo '<span class="error"> * Nama tidak boleh kosong</span>';
        }
        ?>
        <br>
        <label for="nim">Nim:</label>
        <input type="text" name="nim" id="nim" value="<?php echo isset($_POST['nim']) ? htmlspecialchars($_POST['nim']) : ''; ?>">
        <?php
        if (isset($_POST['submit']) && empty($_POST['nim'])) {
            echo '<span class="error"> * NIM tidak boleh kosong</span>';
        }
        ?>
        <br>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <?php
        if (isset($_POST['submit']) && empty($_POST['jenis_kelamin'])) {
            echo '<span class="error"> * Jenis kelamin tidak boleh kosong</span>';
        }
        ?>
        <br>
        <input type="radio" name="jenis_kelamin" id="laki" value="Laki-Laki" <?php echo (isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] === "Laki-Laki") ? 'checked' : ''; ?>>
        <label for="laki">Laki-Laki</label><br>
        <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" <?php echo (isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] === "Perempuan") ? 'checked' : ''; ?>>
        <label for="perempuan">Perempuan</label>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit']) && !empty($_POST['nama']) && !empty($_POST['nim']) && !empty($_POST['jenis_kelamin'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $nim = htmlspecialchars($_POST['nim']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
        echo  $nama . "<br>";
        echo  $nim . "<br>";
        echo  $jenis_kelamin . "<br>";
    }
    ?>
</body>
</html>
