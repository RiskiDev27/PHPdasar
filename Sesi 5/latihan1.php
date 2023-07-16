<?php

// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
//  array("Senin", "Selasa", "Rabu");
// $days = array("Senin", "Selasa", "Rabu");
// var_dump($days);
// cara baru
//  ["Januari", "Februari", "Maret"];
//  [123, "tulisan", false];
// $days = [];
// $days[] = "January";
// var_dump($days);

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1]

// menambahkan elemen baru pada array
$days = [];
$days[] = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];
echo "<br>";
var_dump($days);
