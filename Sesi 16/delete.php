<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'function.php';

$id = $_GET['id'];

if (Delete($id) > 0) {
    echo "
            <script>
                alert('Data berhasil dihapus dari database');
                document.location.href = 'index.php';
            </script>
    ";
} else {
    mysqli_error($conn);
}
