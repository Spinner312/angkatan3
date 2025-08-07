<?php
// ===========================================
// CONTOH ARRAY DAN PERULANGAN FOREACH
// ===========================================

// Deklarasi array $Foods dengan sintaks kurung siku [].
// Ini adalah cara modern untuk membuat array di PHP.
$Foods = ["Burger", "Nasi Padang", "Gado-gado"];

// Menggunakan var_dump untuk menampilkan detail elemen array pada indeks ke-2.
// Ingat, array dimulai dari indeks 0, jadi [2] adalah "Gado-gado".
echo "<h2>Isi Elemen Array pada Indeks ke-2:</h2>";
var_dump($Foods[2]);

// Deklarasi array baru yang akan digunakan untuk menambahkan elemen.
$fill = ["spageti", "pizza"];

// Menggunakan perulangan foreach untuk menambahkan elemen dari array $fill ke dalam $Foods.
// Perulangan ini akan berjalan dua kali, satu untuk setiap elemen di $fill.
foreach($fill as $item){
    // Setiap elemen dari $fill (seperti "spageti" dan "pizza") 
    // akan ditambahkan ke akhir array $Foods.
    $Foods[] = $item;
}

// Menampilkan seluruh isi array $Foods setelah penambahan elemen.
// Sekarang array $Foods akan memiliki total 5 elemen.
echo "<h2>Isi Array setelah Penambahan Elemen:</h2>";
var_dump($Foods);

?>


<?php
$Foods = ["Burger", "Nasi Padang", "Gado-gado"];

// Mengambil string "Nasi Padang" dari array pada indeks 1
$nasiPadang = $Foods[1];

// Memecah string "Nasi Padang" menjadi array baru berdasarkan spasi
$kata = explode(" ", $nasiPadang);

// Mengambil kata pertama dari array $kata (indeks 0), yaitu "Nasi"
$kataNasi = $kata[0];

echo $kataNasi;
?>


