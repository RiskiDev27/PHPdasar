<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if (isset($_POST['cari'])) {
    $mahasiswa = Cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <br>

    <a href="tambah.php">Tambah Data</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" id="" size="40" autofocus placeholder="Masukan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO.</th>
            <th>Action</th>
            <th>Picture</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="delete.php?id=<?= $mhs['id']; ?>">Delete</a>
                    |
                    <a href="edit.php?id=<?= $mhs['id']; ?>">Edit</a>
                </td>
                <td>
                    <img src="img/<?= $mhs['gambar']; ?>" alt="" width="50">
                </td>
                <td>
                    <?= $mhs['nrp']; ?>
                </td>
                <td>
                    <?= $mhs['nama']; ?>
                </td>
                <td>
                    <?= $mhs['email']; ?>
                </td>
                <td>
                    <?= $mhs['jurusan']; ?>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>