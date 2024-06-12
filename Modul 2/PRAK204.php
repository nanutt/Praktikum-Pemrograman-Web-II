<!DOCTYPE html>
<html>
<head>
    <title>Konversi Bilangan Cacah</title>
</head>
<body>
    <form method="POST" action="">
        <label for="nilai">Nilai:</label>
        <input type="number" name="nilai" id="nilai" min="0" max="999" step="1" value="<?php echo isset($_POST['nilai']) ? htmlspecialchars($_POST['nilai']) : ''; ?>">
        <br>
        <input type="submit" name="submit" value="Konversi">
    </form>
    <?php
    function bacaEjaan($nilai) {
        if ($nilai < 0 || $nilai > 999) {
            return "Anda Menginput Melebihi Limit Bilangan";
        }
        if ($nilai == 0) {
            return "nol";
        }
        if ($nilai >= 1 && $nilai <= 9) {
            return "satuan";
        }
        if ($nilai >= 11 && $nilai <= 19) {
            return "belasan";
        }
        if ($nilai >= 10 && $nilai <= 99) {
            return "puluhan";
        }
        if ($nilai >= 100 && $nilai <= 999) {
            return "ratusan";
        }
        return "Anda Menginput Melebihi Limit Bilangan";
    }
    if (isset($_POST['submit'])) {
        $nilai = (int)$_POST['nilai'];
        $ejaan = bacaEjaan($nilai);
        echo "<h2>Hasil: $ejaan</h2>";
    }
    ?>
</body>
</html>
