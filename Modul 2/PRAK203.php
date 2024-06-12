<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
    <style>
        .result {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <label for="nilai">Nilai:</label>
        <input type="number" name="nilai" id="nilai" step="0.1" value="<?php echo isset($_POST['nilai']) ? htmlspecialchars($_POST['nilai']) : ''; ?>">
        <br>
        <label>Dari:</label>
        <br>
        <input type="radio" name="dari" id="celcius" value="C" <?php echo (isset($_POST['dari']) && $_POST['dari'] === "C") ? 'checked' : ''; ?>>
        <label for="celcius">Celcius</label><br>
        <input type="radio" name="dari" id="fahrenheit" value="F" <?php echo (isset($_POST['dari']) && $_POST['dari'] === "F") ? 'checked' : ''; ?>>
        <label for="fahrenheit">Fahrenheit</label><br>
        <input type="radio" name="dari" id="reamur" value="Re" <?php echo (isset($_POST['dari']) && $_POST['dari'] === "Re") ? 'checked' : ''; ?>>
        <label for="reamur">Reamur</label><br>
        <input type="radio" name="dari" id="kelvin" value="K" <?php echo (isset($_POST['dari']) && $_POST['dari'] === "K") ? 'checked' : ''; ?>>
        <label for="kelvin">Kelvin</label><br>
        <label>Ke:</label>
        <br>
        <input type="radio" name="ke" id="celcius_to" value="C" <?php echo (isset($_POST['ke']) && $_POST['ke'] === "C") ? 'checked' : ''; ?>>
        <label for="celcius_to">Celcius</label><br>
        <input type="radio" name="ke" id="fahrenheit_to" value="F" <?php echo (isset($_POST['ke']) && $_POST['ke'] === "F") ? 'checked' : ''; ?>>
        <label for="fahrenheit_to">Fahrenheit</label><br>
        <input type="radio" name="ke" id="reamur_to" value="Re" <?php echo (isset($_POST['ke']) && $_POST['ke'] === "Re") ? 'checked' : ''; ?>>
        <label for="reamur_to">Reamur</label><br>
        <input type="radio" name="ke" id="kelvin_to" value="K" <?php echo (isset($_POST['ke']) && $_POST['ke'] === "K") ? 'checked' : ''; ?>>
        <label for="kelvin_to">Kelvin</label><br>
        <input type="submit" name="submit" value="Konversi">
    </form>
    <?php
    function konversiSuhu($nilai, $dari, $ke) {
        switch ($dari) {
            case "C":
                $nilaiCelcius = $nilai;
                break;
            case "F":
                $nilaiCelcius = ($nilai - 32) * 5 / 9;
                break;
            case "Re":
                $nilaiCelcius = $nilai * 5 / 4;
                break;
            case "K":
                $nilaiCelcius = $nilai - 273.15;
                break;
        }
        switch ($ke) {
            case "C":
                $nilaiAkhir = $nilaiCelcius;
                break;
            case "F":
                $nilaiAkhir = $nilaiCelcius * 9 / 5 + 32;
                break;
            case "Re":
                $nilaiAkhir = $nilaiCelcius * 4 / 5;
                break;
            case "K":
                $nilaiAkhir = $nilaiCelcius + 273.15;
                break;
        }
        return $nilaiAkhir;
    }
    if (isset($_POST['submit'])) {
        $nilai = htmlspecialchars($_POST['nilai']);
        $dari = htmlspecialchars($_POST['dari']);
        $ke = htmlspecialchars($_POST['ke']);
        $hasilKonversi = konversiSuhu($nilai, $dari, $ke);
        echo "<h2>Hasil Konversi: <class='result'>$hasilKonversi °$ke </h2>";
    }
    ?>
</body>
</html>
