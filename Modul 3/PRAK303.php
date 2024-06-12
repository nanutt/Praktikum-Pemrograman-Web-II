<!DOCTYPE html>
<html>
<head>
    <title>Bilangan Deret</title>
    <style>
        img {
            margin: 1px;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <label for="batasBawah">Batas Bawah:</label>
        <input type="number" name="batasBawah" id="batasBawah" min="1" value="<?php echo isset($_POST['batasBawah']) ? htmlspecialchars($_POST['batasBawah']) : ''; ?>">
        <br>
        <label for="batasAtas">Batas Atas:</label>
        <input type="number" name="batasAtas" id="batasAtas" min="1" value="<?php echo isset($_POST['batasAtas']) ? htmlspecialchars($_POST['batasAtas']) : ''; ?>">
        <br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $batasBawah = (int)htmlspecialchars($_POST['batasBawah']);
        $batasAtas = (int)htmlspecialchars($_POST['batasAtas']);
        $urlBintang = 'https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png';
        echo "<br>";
        $i = $batasBawah;
        do {
            if (($i + 7) % 5 == 0) {
                echo "<img src='$urlBintang' alt='Bintang' width='20' height='20'>";
            } else {
                echo $i;
            }
            if ($i < $batasAtas) {
                echo " ";
            }
            $i++;
        } while ($i <= $batasAtas);
    }
    ?>
</body>
</html>
