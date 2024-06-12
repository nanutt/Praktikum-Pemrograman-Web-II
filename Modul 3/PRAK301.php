<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peserta</title>
    <style>
        .ganjil,
        .genap {
            font-weight: bold;
            font-size: 1.5em; 
        }
        .ganjil {
            color: red;
        }
        .genap {
            color: green;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <label for="jumlahPeserta">Jumlah Peserta:</label>
        <input type="number" name="jumlahPeserta" id="jumlahPeserta" min="1" value="<?php echo isset($_POST['jumlahPeserta']) ? htmlspecialchars($_POST['jumlahPeserta']) : ''; ?>">
        <br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $jumlahPeserta = (int)htmlspecialchars($_POST['jumlahPeserta']);
        $i = 1; 
        echo "<br>";
        while ($i <= $jumlahPeserta) {
            if ($i % 2 == 1) {
                echo "<span class='ganjil'>Peserta ke-$i</span><br>";
                echo "<br>";
            } else {
                echo "<span class='genap'>Peserta ke-$i</span><br>";
                echo "<br>";
            }
            $i++; 
        }
    }
    ?>
</body>
</html>
