<!-- <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Nama</title>
</head>


    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="Masukan nama anda">
        <br>
        <button type="submit">Simpan</button>
    </form>

    <?php
    if (isset($_POST['nama'])) {
        $nama = htmlspecialchars($_POST['nama']);
        echo "<h1>Nama anda: " . $nama . "</h1>";
    }
    ?> -->

<!--
    Buat program sederhana dengan satu buah input bernama nilai
    Jika nilai lebih dari 90 sampai 100 maka grade nya A
    Jika nilai 80 sampai 89 maka gradenya adalah B
    Jka nilai 70 sampai 79 maka gradenya adalah C
    Jika nilai 60 sampai 69 maka gradenya adalah D
    Jika nilai 0 sampai 59 maka grade adalah E

    output:
    Nilai anda : 100
    Grade anda :  A
-->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Nilai</title>
</head>
<body>

    <form action="" method="post">
        <label for="nilai">Nilai</label>
        <input type="number" id="nilai" name="nilai" placeholder="Masukan nilai anda">
        <br>
        <button type="submit">Simpan</button>
    </form>
    
    <?php
    
    if (isset($_POST['nilai'])) {
        
        $nilai = (int)$_POST['nilai'];
        $grade = '';

        
        if ($nilai >= 90 && $nilai == 100) {
            $grade = 'A';
        } elseif ($nilai >= 80) {
            $grade = 'B';
        } elseif ($nilai >= 70) {
            $grade = 'C';
        } elseif ($nilai >= 60) {
            $grade = 'D';
        } elseif ($nilai >= 0) {
            $grade = 'E';
        }else{
          
        }
        echo "<p>Nilai Anda adalah: <st>" . ($nilai) . "</p>";
        echo "<p>Grade Anda adalah: " . $grade . "</p>";
    }
    ?>