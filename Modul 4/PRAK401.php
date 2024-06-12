<?php
    $panjang = "";
    $lebar = "";
    $nilai = "";
    if (isset($_POST["cetak"])){
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $nilai = $_POST["nilai"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid;
            width: 50px;
            height: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Panjang: <input type="text" name="panjang"> <br>
        Lebar: <input type="text" name="lebar"> <br>
        Nilai: <input type="text" name="nilai"> <br>
        <input type="submit" name="cetak" value="Cetak">
    </form>
    <br>
    <?php
        if (isset($_POST['cetak'])) {
            $panjang = isset($_POST['panjang']) ? $_POST['panjang'] : '';
            $lebar = isset($_POST['lebar']) ? $_POST['lebar'] : '';
            $nilai = isset($_POST['nilai']) ? $_POST['nilai'] : '';
            $isi = explode(" ", $nilai);
            $panjangNilai = count($isi);
            if ($panjang * $lebar != $panjangNilai) {
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            } else {
                echo "<table>";
                $count = 0;
                for ($i = 0; $i < $panjang; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $lebar; $j++) {
                        echo "<td>" . $isi[$count] . "</td>";
                        $count++;
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
    ?>
</body>
</html>
