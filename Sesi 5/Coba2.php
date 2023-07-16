<?php

// $siswa = [

//     [
//         "name" => "Dwi Riski",
//         "nis" => "2727817281",
//         "jurusan" => "Teknik Komputer",
//         "email" => "risdwi@mail.com"
//     ],
//     [
//         "name" => "Dody Sudrajat",
//         "nis" => "2172162716",
//         "jurusan" => "Teknik Mesin",
//         "email" => "dodydj@mail.com"
//     ],
//     [
//         "name" => "Dadang Sudeto",
//         "nis" => "2108291829178",
//         "jurusan" => "Teknik Informatika",
//         "email" => "dadang@mail.co"
//     ]
// ];

$siswa = [
    ["Riski", "2727817281", "Teknik Komputer", "riskidwi@mail.com"],
    ["Dody Sudrajat", "2172162716", "Teknik Mesin", "dodydj@mail.com"],
    ["Dadang Sudeto", "2108291829178", "Teknik Informatika", "dadang@mail.co"]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba Array</title>
</head>

<body>
    <h1>Daftar Siswa</h1>
    <?php foreach ($siswa as $ssw) : ?>
        <ul>
            <li>Nama : <?= $ssw[0]; ?></li>
            <li>NIS : <?= $ssw[1]; ?></li>
            <li>Jurusan : <?= $ssw[2]; ?></li>
            <li>Email : <?= $ssw[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>