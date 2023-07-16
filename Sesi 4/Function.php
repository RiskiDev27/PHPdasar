<?php

function salam($time = "Datang", $name = "Riski")
{
    return "Selamat $time, $name!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>

<body>
    <h1><?= salam("Pagi", "Riski"); ?></h1>
</body>

</html>