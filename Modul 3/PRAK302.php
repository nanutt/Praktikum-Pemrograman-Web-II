<!DOCTYPE html>
<html>
<head>
    <style>
        img {
            margin: 0.5px;
        }
        .row {
            text-align: left;
        }
    </style>
</head>
<body>
    <form method="GET" action="">
        <label for="tinggi_segitiga">Tinggi:</label>
        <input type="text" name="tinggi_segitiga" id="tinggi_segitiga" value="<?php echo isset($_GET['tinggi_segitiga']) ? htmlspecialchars($_GET['tinggi_segitiga']) : ''; ?>">
        <br>
        <label for="link_gambar">Alamat gambar:</label>
        <input type="url" name="link_gambar" id="link_gambar" value="<?php echo isset($_GET['link_gambar']) ? htmlspecialchars($_GET['link_gambar']) : ''; ?>">
        <br>
        <input type="submit" value="Cetak">
        <br>
    </form>
    <?php
    if (isset($_GET['tinggi_segitiga']) && isset($_GET['link_gambar'])) {
        $tinggi_segitiga = (int) htmlspecialchars($_GET['tinggi_segitiga']);
        $link_gambar = htmlspecialchars($_GET['link_gambar']);
        echo "<br>";
        $baris = 0;
        while ($baris <= $tinggi_segitiga) {
            $kolom = 0;
            while ($kolom < $baris) {
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                $kolom++;
            }
            $kanan = $tinggi_segitiga;
            while ($kanan > $baris) {
                echo "<img class='gambar' src='$link_gambar' width='19' height='19'>";
                $kanan--;
            }
            echo "<br>";
            $baris++;
        }
    }
    ?>
</body>
</html>
