<!-- function -->

<?php

// array sebuah tipe data,
// boolean, string, number/ interger, float

// $nama = "axel, ibrahim";
// echo $nama;

// array index
$tas_buah = ["Semangka", "Nanas","Jeruk"];
$tas_buah[] = "pisang";
$tas_buah[] = "melon";
print_r($tas_buah);
echo "<br>";
foreach($tas_buah as $key => $val){
  echo "index dari " . $val . " adalah " . $key . "<br>";
}

$keranjang = [
  'buah' => 'Nanas',
  'sayuran' => 'bayam'
];

echo $keranjang['buah'];
echo "<br>";
echo $keranjang['sayuran'];