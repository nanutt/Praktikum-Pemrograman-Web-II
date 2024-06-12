<!DOCTYPE html>
<html>
<head>
    <title>Pengurutan Nama</title>
</head>
<body>
    <form method="POST" action="">
        <label for="nama1">Nama: 1 </label>
        <input type="text" name="nama1" id="nama1" required><br>
        <label for="nama2">Nama: 2 </label>
        <input type="text" name="nama2" id="nama2" required><br>
        <label for="nama3">Nama: 3 </label>
        <input type="text" name="nama3" id="nama3" required><br>
        <input type="submit" value="Urutkan">
    </form>
    <?php
    function urutkanNama($nama1, $nama2, $nama3) {
        $namaArray = array($nama1, $nama2, $nama3);
        sort($namaArray);
        return $namaArray;
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nama1 = $_POST["nama1"];
        $nama2 = $_POST["nama2"];
        $nama3 = $_POST["nama3"];
        $namaTerurut = urutkanNama($nama1, $nama2, $nama3);
        foreach ($namaTerurut as $nama) {
            echo $nama . "<br>";
        }
    }
    ?>
</body> 
</html>
