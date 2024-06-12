<?php
$nilai = [
    [
        "no" => 1,
        "nama" => "Ridho",
        "matkul" => [
            ["nama_mk" => "Pemrograman I", "sks" => 2],
            ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
        ]
    ],
    [
        "no" => 2,
        "nama" => "Ratna",
        "matkul" => [
            ["nama_mk" => "Basis Data I", "sks" => 2],
            ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3]
        ]
    ],
    [
        "no" => 3,
        "nama" => "Tono",
        "matkul" => [
            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_mk" => "Komputasi Awan", "sks" => 3],
            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
        ]
    ]
];
for ($i = 0; $i < count($nilai); $i++) {
    $jmlsks = 0;
    for ($j = 0; $j < count($nilai[$i]["matkul"]); $j++) {
        $jmlsks += $nilai[$i]["matkul"][$j]["sks"];
    }
    $nilai[$i]["jmlsks"] = $jmlsks;
    if ($nilai[$i]["jmlsks"] < 7) {
        $nilai[$i]["keterangan"] = "Revisi KRS";
        $nilai[$i]["bgcolor"] = "red";
    } else {
        $nilai[$i]["keterangan"] = "Tidak Revisi";
        $nilai[$i]["bgcolor"] = "green";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Soal 3</title>
    <style>
        table, tr, td, th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
            text-align: left;
        }
        .gray-background {
            background-color: #D3D3D3;
        }
    </style>
</head>
<body>
    <table>
        <tr class="gray-background">
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php
        for ($i = 0; $i < count($nilai); $i++) {
            for ($j = 0; $j < count($nilai[$i]["matkul"]); $j++) {
                echo "<tr>";
                if ($j == 0) {
                    echo "<td>" . $nilai[$i]["no"] . "</td>";
                    echo "<td>" . $nilai[$i]["nama"] . "</td>";
                    echo "<td>" . $nilai[$i]["matkul"][$j]["nama_mk"] . "</td>";
                    echo "<td>" . $nilai[$i]["matkul"][$j]["sks"] . "</td>";
                    echo "<td>" . $nilai[$i]["jmlsks"] . "</td>";
                    echo "<td style='background-color:" . $nilai[$i]["bgcolor"] . ";'>" . $nilai[$i]["keterangan"] . "</td>";
                } else {
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td>" . $nilai[$i]["matkul"][$j]["nama_mk"] . "</td>";
                    echo "<td>" . $nilai[$i]["matkul"][$j]["sks"] . "</td>";
                    echo "<td></td>";
                    echo "<td></td>";
                }
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>
