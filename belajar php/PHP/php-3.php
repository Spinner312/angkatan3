<?php
// ===========================================
// STRUKTUR KENDALI: PERULANGAN DI PHP
// ===========================================

echo "<h1>Contoh Perulangan di PHP</h1>";

// --- 1. Perulangan FOR ---
// Perulangan ini ideal digunakan ketika Anda tahu persis berapa kali Anda ingin mengulang.
// Strukturnya terdiri dari tiga bagian:
// for (inisialisasi; kondisi; increment/decrement)
echo "<h2>1. Perulangan FOR</h2>";
for ($i = 0; $i < 5; $i++) {
    // Bagian 1: $i = 0 -> Variabel $i dimulai dari 0.
    // Bagian 2: $i < 5 -> Perulangan akan terus berjalan selama $i lebih kecil dari 5.
    // Bagian 3: $i++ -> Setelah setiap perulangan, nilai $i akan bertambah 1.
    // Kode ini akan mencetak "Hello" sebanyak 5 kali (untuk $i = 0, 1, 2, 3, 4).
    echo "Hello <br>";
}

// --- 2. Perulangan WHILE ---
// Perulangan ini akan terus berjalan selama kondisi yang diberikan bernilai benar (true).
// Cocok untuk perulangan yang jumlah iterasinya belum pasti.
echo "<h2>2. Perulangan WHILE</h2>";
$i = 0; // Inisialisasi variabel di luar perulangan.
while ($i < 5) {
    // Kondisi ($i < 5) dicek di sini. Jika benar, blok kode di dalam kurung kurawal dijalankan.
    echo "Hehe <br>";
    $i++; // Ini adalah INCREMENT. Jika baris ini tidak ada, perulangan akan berjalan selamanya (infinite loop).
}

// --- 3. Perulangan DO-WHILE ---
// Mirip dengan 'while', tetapi blok kode akan dijalankan minimal SATU KALI, bahkan jika kondisinya salah di awal.
// Kondisi diperiksa di akhir perulangan.
echo "<h2>3. Perulangan DO-WHILE</h2>";
$i = 0;
do {
    // Kode di dalam blok ini akan dijalankan terlebih dahulu.
    echo "Xaxaxaaxa <br>";
    $i++;
} while ($i < 5); // Kondisi diperiksa di sini.
// Jika nilai awal $i adalah 10, "Xaxaxaaxa" akan tetap dicetak satu kali karena perulangan dijalankan sebelum kondisi dicek.

//---------------------------------------------------------------------------------===========================================================================================================================================================================================================================================
// ===========================================
// CONTOH LAIN STRUKTUR KENDALI: PERULANGAN
// ===========================================

echo "<h1>Contoh Lain Perulangan di PHP</h1>";

// --- 1. Perulangan FOR dengan Angka Genap ---
// Perulangan FOR bisa disesuaikan untuk melompati beberapa nilai.
// Contoh ini mencetak angka genap dari 0 hingga 10.
echo "<h2>1. Perulangan FOR (Angka Genap)</h2>";
for ($i = 0; $i <= 10; $i += 2) {
    // Inisialisasi: $i = 0
    // Kondisi: $i <= 10
    // Increment: $i += 2 (menambah 2 setiap perulangan)
    echo "Angka: {$i} <br>";
}

// --- 2. Perulangan WHILE dengan Kondisi Berhenti ---
// Perulangan WHILE sering digunakan saat kita tidak tahu kapan perulangan akan berhenti.
// Contoh ini mensimulasikan penarikan uang hingga saldo habis.
echo "<h2>2. Perulangan WHILE (Kondisi Dinamis)</h2>";
$saldo = 50;
$tarik = 10;
while ($saldo >= $tarik) {
    // Kondisi akan terus benar selama saldo masih cukup.
    echo "Saldo saat ini: {$saldo} <br>";
    $saldo -= $tarik;
}
echo "Saldo akhir: {$saldo} (Saldo tidak cukup untuk penarikan)<br>";

// --- 3. Perulangan DO-WHILE dengan Kondisi Salah ---
// Perulangan DO-WHILE akan selalu dijalankan minimal satu kali.
// Contoh ini membuktikan bahwa perulangan tetap berjalan sekali meski kondisinya salah.
echo "<h2>3. Perulangan DO-WHILE (Kondisi Salah)</h2>";
$j = 10;
do {
    // Kode ini akan dijalankan satu kali.
    echo "Ini dicetak satu kali meskipun kondisinya salah. Nilai j: {$j}<br>";
    $j++;
} while ($j < 5); // Kondisi ini langsung salah (10 < 5)

// --- 4. Perulangan FOREACH ---
// Perulangan khusus untuk array. Sangat mudah dan aman.
// Secara otomatis mengiterasi setiap elemen dalam array tanpa perlu variabel counter.
echo "<h2>4. Perulangan FOREACH (untuk Array)</h2>";
$buah = array("Apel", "Jeruk", "Pisang", "Mangga");
foreach ($buah as $value) {
    // Perulangan ini akan berjalan sebanyak jumlah elemen di array.
    // Pada setiap iterasi, nilai elemen saat ini disimpan di variabel $value.
    echo "Saya suka {$value} <br>";
}

// Perulangan foreach juga bisa digunakan untuk mendapatkan kunci (key) dan nilai (value) dari array asosiatif.
echo "<h3>FOREACH dengan Kunci dan Nilai</h3>";
$data_siswa = array(
    "nama" => "Budi",
    "kelas" => "10 IPA",
    "umur" => 16
);
foreach ($data_siswa as $kunci => $nilai_data) {
    // $kunci akan menyimpan 'nama', 'kelas', 'umur' secara berurutan.
    // $nilai_data akan menyimpan 'Budi', '10 IPA', '16' secara berurutan.
    echo "{$kunci}: {$nilai_data} <br>";
}

?>



<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php 
    // Perulangan luar (horizontal) untuk membuat baris (<tr>)
    for ($i = 0; $i < 5; $i++) : 
      if($i % 2 == 0){
        echo "< style='background-color: red;'>";
      } else {
        echo "<tr>";
      }
    ?>
        <tr>
          <?php 
          // Perulangan dalam (vertikal) untuk membuat kolom (<td>)
          for ($j = 0; $j < 3; $j++) :
          ?>
            <td><?php echo "$i, $j"; ?></td>
          <?php endfor; ?>
        </tr>
    <?php endfor; ?>
  </table>
</body>
</html>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .merah {
        background-color: red;
        color: white;
    }
  </style>
</head>
<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php 
    // Perulangan luar (horizontal) untuk membuat baris (<tr>)
    for ($i = 1; $i <= 5; $i++) : 
    ?>
        <tr <?php if ($i % 2 != 0) { echo "class='merah'"; } ?>>
          <?php 
          // Perulangan dalam (vertikal) untuk membuat kolom (<td>)
          for ($j = 0; $j < 3; $j++) :
          ?>
            <td><?php echo "$i, $j"; ?></td>
          <?php endfor; ?>
        </tr>
    <?php endfor; ?>
  </table>
</body>
</html>
