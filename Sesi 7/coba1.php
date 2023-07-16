<?php

// $_GET

$mahasiswa = [
    [
        "nrp" => "6932010",
        "nama" => "Tirto Ilham",
        "jurusan" => "Teknik Informatika",
        "email" => "tirtoilham@mail.com",
        "gambar" => "Bachira.jpg"
    ],
    [
        "nrp" => "106131817",
        "nama" => "Eka Kusuma",
        "jurusan" => "Teknik Komputer",
        "email" => "ekakusuma@mail.com",
        "gambar" => "kilua.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="coba2.php?nama=<?= $mhs['nama']; ?>&nrp=<?= $mhs['nrp']; ?>&jurusan=<?= $mhs['jurusan']; ?>&email=<?= $mhs['email']; ?>&gambar=<?= $mhs['gambar']; ?>"><?= $mhs['nama']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>