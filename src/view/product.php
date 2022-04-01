<?php

$date = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
setcookie("product-cart", "TV Panasonic", $date->getTimestamp() + 60);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <?php if (isset($_COOKIE['product-cart'])): ?>
        <p><b>Product Cart:</b><?= $_COOKIE['product-cart'] ?></p>
    <?php endif; ?>

    <?php if (isset($productList)): ?>
        <h4>Product List</h4>
        <?php foreach ($productList as $productId): ?>
            <p>Product ID: <?= $productId ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (isset($id)): ?>
        <h4>Product View</h4>
        <p>Product ID: <?= $id ?></p>
    <?php endif; ?>
</body>
</html>