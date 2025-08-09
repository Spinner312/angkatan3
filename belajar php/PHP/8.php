<!--
operator logika 
AND, &&, OR, ||
-->

<form action="" method="post">
  <!-- <label for="">Nilai</label>
  <input type="number" nama="nilai">
  <br> -->
  <label for="">Username</label>
  <input type="text" name="username">
  <br>
  <label for="">Password</label>
  <input type="text" name="password">
  <br>
  <button type=" submit">Simpan</button>
</form>

<?php
// isset: tidak kosong, empty: kosong
// !isset: kosong, !empty: tidak kosong
$ext_username = "admin";
$ext_password = "admin";
if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password']; // Corrected to lowercase 'password'
  if ($username == $ext_username and $password == $ext_password) {
    echo "login berhasil";
  } else {
    echo "login gagal";
  }
}



  // $nilai = isset ($_POST['nilai']) ? $_POST['nilai'] : '';
  // if($nilai >= 90 && $nilai == 100){
  //   echo "grade A";
  // }else {
  //   echo "grade tidak ditemukan";
  // }
