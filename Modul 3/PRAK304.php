<!DOCTYPE html>
<html>
<head>
    <title>Program Gambar Bintang</title>
    <style>
        img {
            margin: 2px;
            width: 50px;
            height: 50px;
        }
        .jumlahBintang {
            font-size: 1em;
        }
        form {
            display: inline-block;
            margin-right: 1spx; 
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <label for="jumlahBintang">Jumlah bintang:</label>
        <input type="number" name="jumlahBintang" id="jumlahBintang" value="<?php echo isset($_POST['jumlahBintang']) ? htmlspecialchars($_POST['jumlahBintang']) : '0'; ?>" min="0">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $jumlahBintang = (int)htmlspecialchars($_POST['jumlahBintang']);
        $urlBintang = 'https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png';
        echo "<p class='jumlahBintang'>Jumlah bintang $jumlahBintang</p>";
        for ($i = 0; $i < $jumlahBintang; $i++) {
            echo "<img src='$urlBintang' alt='Bintang'>";
        }
        echo "<br>";
        echo "<form method='POST' action=''>";
        echo "<input type='hidden' name='jumlahBintang' value='". ($jumlahBintang + 1) ."'>";
        echo "<input type='submit' name='submit' value='Tambah'>";
        echo "</form>";
        echo "<form method='POST' action=''>";
        echo "<input type='hidden' name='jumlahBintang' value='". ($jumlahBintang - 1) ."'>";
        echo "<input type='submit' name='submit' value='Kurang'>";
        echo "</form>";
    }
    ?>
</body>
</html>
