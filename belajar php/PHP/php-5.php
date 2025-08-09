<!-- function -->

<?php

function callName($name ="Default")
{
  //echo "Axel";
  return "Nama saya adalah : " . $name . "<br>";
}
echo callName();//default
echo callName("Axel");// axel
echo callName("Hidayat");// hidayat

function rumusPersegiPanjang($panjang, $lebar){
  return "Luas : " .$panjang * $lebar. "<br>";
}
echo rumusPersegiPanjang(5,3);//15
