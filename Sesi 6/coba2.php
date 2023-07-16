<?php

$mahasiswa = [
    [
        "nrp" => "6932010",
        "nama" => "Tirto Ilham",
        "jurusan" => "Teknik Informatika",
        "email" => "tirtoilham@mail.com"
    ],
    [
        "nrp" => "106131817",
        "nama" => "Eka Kusuma",
        "jurusan" => "Teknik Komputer",
        "ekakusuma@mail.com"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array 2</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>

            <li>
                <img src="img/Bachira.jpg" alt="bachira.jpg">

            </li>
            <li>
                Nama: <?= $mhs['nama']; ?>
            </li>
            <li>
                NRP: <?= $mhs['nrp']; ?>
            </li>
            <li>
                Jurusan: <?= $mhs['jurusan']; ?>
            </li>
            <li>
                Email: <?= $mhs['email']; ?>
            </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>