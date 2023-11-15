no. 1
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 30%
        }

        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
echo "<table>";

//baris pertama
echo "<tr>";
echo "<td>Ganjil</td>";
echo "<td>Genap</td>";
echo "</tr>";

//loop untuk baris
for ($row = 1; $row <= 4; $row++){
    echo "<tr>";

    //kolom pertama(ganjil)
    $angka_ganjil = $row * 2 - 1;
    echo "<td>$angka_ganjil</td>";

    //kolom kedua(genap)
    if ($angka_ganjil % 2 == 1) {
        $angka_genap = $angka_ganjil + 1;
    } else {
        $angka_genap = $angka_ganjil + 2;
    }
    echo "<td>$angka_genap<?td>";
    echo "</td>";
}
echo "</table>";
?>
</body>
</html>
