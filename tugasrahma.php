<?php
// Nama: Rizky Juniardi
// Kelas: 5TI - P2
// Matkul: Pemrograman Lanjut

// Menerima input nilai dari user
$nilai = 85;

// Menentukan grade berdasarkan nilai
if ($nilai >= 80 && $nilai <= 100) {
    $grade = 'A';
} elseif ($nilai >= 75 && $nilai < 80) {
    $grade = 'A-';
} elseif ($nilai >= 70 && $nilai < 75) {
    $grade = 'B+';
} elseif ($nilai >= 65 && $nilai < 70) {
    $grade = 'B';
} elseif ($nilai >= 55 && $nilai < 65) {
    $grade = 'C';
} elseif ($nilai >= 30 && $nilai < 55) {
    $grade = 'D';
} elseif ($nilai > 0 && $nilai < 30) {
    $grade = 'E';
} elseif ($nilai == 0) {
    $grade = 'T';
} else {
    // Jika nilai tidak valid, tampilkan pesan error
    echo "Nilai tidak valid";
    exit;
}

// Menampilkan grade yang didapat
echo "Grade Anda adalah: " . $grade . " Dengan Nilai: " . $nilai;
?>