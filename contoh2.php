<?php
//Membuat Fungsi dengan Parameter
function perkenalan($nama,$salam){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}
// memanggil fungsi yang sudah dibuat
perkenalan("Jjxvrby Rubby", "Hi");
  echo "<hr>";
  $saya = "Lia Amelia";
  $ucapanSalam = "Selamat pagi";
  // memanggilnya lagi
  perkenalan($saya, $ucapanSalam);
?>