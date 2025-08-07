<?php

// ===========================================
// PERKONDISIAN / PERCABANGAN DI PHP
// ===========================================

echo "<h1>Contoh Percabangan di PHP</h1>";

// --- IF-ELSE ---
// Percabangan paling sederhana untuk dua kondisi.
// Jika kondisi benar, blok 'if' dieksekusi; jika salah, blok 'else' dieksekusi.
echo "<h2>1. Percabangan IF-ELSE</h2>";
$n = 10;
// Kode ini mengecek apakah nilai $n lebih kecil dari 20.
if ($n < 20) {
    // Karena 10 memang lebih kecil dari 20, maka blok ini yang dijalankan.
    echo "betullllll <br>";
} else {
    // Blok ini akan dijalankan jika kondisi di atas salah.
    echo "salahhh <br>";
}

// --- IF-ELSE-IF-ELSE ---
// Digunakan untuk mengecek lebih dari dua kondisi secara berurutan.
// Kode akan mengeksekusi blok pertama yang kondisinya benar.
echo "<h2>2. Percabangan IF-ELSE-IF-ELSE</h2>";
$x = 30;
// Kondisi 1: Apakah $x lebih kecil dari 20? (Salah, karena 30 tidak < 20)
if ($x < 20) {
    echo "benarrr <br>";
// Kondisi 2: Apakah $x sama dengan 20? (Salah, karena 30 != 20)
} elseif ($x == 20) {
    echo "ini resultnya <br>";
} else {
    // Karena semua kondisi di atas salah, blok 'else' ini yang dijalankan.
    echo "salah <br>";
}

// --- TERNARY OPERATOR ---
// Bentuk singkat dari if-else. Berguna untuk penugasan nilai satu baris.
// Format: (kondisi) ? (nilai jika benar) : (nilai jika salah)
echo "<h2>3. Ternary Operator</h2>";
$no = 1;
// Kondisi: Apakah $no dibagi 2 sisanya 0 (genap)?
// Karena 1 dibagi 2 sisanya 1 (bukan 0), kondisi ini salah, maka nilai 'ganjil' diambil.
$hasil = ($no % 2 == 0) ? 'genap' : 'ganjil';
echo "Angka {$no} adalah {$hasil} <br>";

// --- CONTOH SOAL: SISTEM PENILAIAN DENGAN IF-ELSE-IF ---
// Menerapkan logika percabangan untuk menentukan grade berdasarkan nilai.
// A: >= 80, B: >= 70, C: >= 60, D: < 60
echo "<h2>4. Sistem Penilaian (menggunakan IF-ELSE-IF)</h2>";
$nilai = 75;
$grade = '';
// Kondisi 1: Apakah 75 >= 80? (Salah)
if ($nilai >= 80) {
    $grade = 'A';
// Kondisi 2: Apakah 75 >= 70? (Benar)
} elseif ($nilai >= 70) {
    // Karena kondisi ini benar, variabel $grade diisi dengan 'B'
    $grade = 'B';
} elseif ($nilai >= 60) {
    $grade = 'C';
} else {
    $grade = 'D';
}
echo "Nilai Anda adalah " . $nilai . ", dengan grade: " . $grade . "<br>";

// --- SWITCH ---
// Digunakan untuk mengeksekusi kode berdasarkan perbandingan nilai yang sama.
// Setiap 'case' mengecek apakah nilainya cocok.
echo "<h2>5. Sistem Penilaian (menggunakan SWITCH)</h2>";
$score = 80;
$grade_switch = "";
// switch (true) digunakan untuk mengevaluasi setiap case sebagai kondisi yang bernilai true/false.
switch (true) {
    // Kondisi 1: Apakah 80 >= 80? (Benar)
    case ($score >= 80):
        $grade_switch = "A";
        // Perintah 'break' sangat penting untuk menghentikan switch agar tidak mengeksekusi case selanjutnya.
        break;
    case ($score >= 70):
        $grade_switch = "B";
        break;
    case ($score >= 60):
        $grade_switch = "C";
        break;
    default:
        $grade_switch = "D";
        break;
}
echo "Nilai Anda adalah " . $score . ", dengan grade: " . $grade_switch . "<br>";

// --- CONTOH SOAL: HARI MENGGUNAKAN SWITCH ---
// Mengkategorikan hari sebagai 'weekday' atau 'weekend'.
echo "<h2>6. Kategori Hari (menggunakan SWITCH)</h2>";
$day = "rabu";
$category = "";
// Switch akan memeriksa nilai dari variabel $day
switch ($day) {
    // Menggabungkan beberapa case yang memiliki hasil yang sama.
    // Jika $day adalah "senin", "selasa", "rabu", "kamis", atau "jumaat", kode ini yang akan dijalankan.
    case "senin":
    case "selasa":
    case "rabu":
    case "kamis":
    case "jumaat":
        $category = "weekday";
        break;
    // Jika $day adalah "sabtu" atau "minggu", kode di bawah ini akan dijalankan.
    case "sabtu":
    case "minggu":
        $category = "weekend";
        break;
    // Blok 'default' akan dijalankan jika nilai $day tidak cocok dengan case manapun di atas.
    default:
        $category = "bukan hari weekday atau weekend";
        break;
}
echo "Hari " . $day . " adalah " . $category . "<br>";