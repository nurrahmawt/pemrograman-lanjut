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

// loop untuk baris ke 2 hingga 6
for ($row = 1; $row <= 5; $row++) {
    echo "<tr>";

    // kolom pertama(ganjil)
    if ($row % 2 == 0){
        echo "<td></td>";} //kosongkan baris jika baris genap
    else {
        echo "<td>$row</td>";}

    //kolom kedua(genap)
    if ($row % 2 != 0){
        echo "<td></td>";} //kosongkan baris jika baris ganjil 
    else {
        $angka_genap = $row;
        echo "<td>$angka_genap</td>";
    }
    echo "</td>";
}

echo "</table>";
?>
</body>
</html>