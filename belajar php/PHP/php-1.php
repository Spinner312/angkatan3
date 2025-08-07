<?php
echo "Hello PHP";
echo "<br>";
echo 123;
echo "<br>";
echo true;
echo "<br>";
echo false;
echo "<br>";
print_r("hallo world" . "<br>");
var_dump("tesssss");

echo "<br>";
$nama = "udin";
echo $nama;

// html di dalam PHP;
$html = "<h1>HTML DI DALAM PHP</h1>";
echo $html;

// operator aritmatika + - * / % **
$nilai1 = 7;
$nilai2 = 18.5;
echo "<br>";
echo $nilai1 . "+" . $nilai2 . "=" . $nilai1 + $nilai2;
echo "<br>";
// operator assigment = += -= *= /= %= .=
$nama = "Dino";
$nama .= " ";
$nama .= "danuarta";
$nama .= " ";
$nama .= "siregar";
echo $nama . "<br>";
$x = 4;
$x +=8;
$x = $x + 8;
echo $x;
echo "<br>";
// perbandingan < , > , <= , >= , === , !=
var_dump(5 != 5);
// gerbang logika : && , || , !
$y = 5;
var_dump($y <= 5 && $y % 2 == 0);
// T && F = F