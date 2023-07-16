<?php

require 'function.php';

$id = $_GET['id'];

// query data mahasiswa
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST['submit'])) {

    if (Edit($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil diubah ke dalam database!');
                    document.location.href = 'index.php';
                </script>
        ";
    } else {
        echo "
                <script>
                    alert('Data gagal diubah ke dalam database!');
                    document.location.href = 'index.php';
                </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>

<body>

    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs['nrp']; ?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs['nama']; ?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" value="<?= $mhs['email']; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan']; ?>">
            </li>
            <li>
                <label for="gambar">Picture :</label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs['gambar']; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Edit Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>