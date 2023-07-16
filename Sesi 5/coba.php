<?php

$number = [34, 20, 33, 34, 50, 100, 49];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: aquamarine;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php foreach ($number as $i) : ?>
        <div class="kotak"><?= $i; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
    <?php foreach ($number as $i) : ?>
        <div class="kotak"><?= $i; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
    <?php foreach ($number as $i) : ?>
        <div class="kotak"><?= $i; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
</body>

</html>