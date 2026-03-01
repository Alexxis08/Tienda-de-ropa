<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tienda</title>
</head>
<body>
<?php include_once "prendas.php" ?>

<h1>Tienda de ropa: </h1>

<h4>Listado de ropa.....</h4>

<section class="content">
<?php foreach ($prendas as $prenda){ ?>
<div class="ropa">
    <img class="image-ropa" src=<?= $prenda["imagen"] ?>>
    <h2>Nombre: <?= $prenda["nombre"] ?></h2>
    <h3>Marca: <?= $prenda["marca"] ?> </h3>   
    <p>Inf: <?= $prenda["descripcion"] ?></p>
    <h3>precio: $<?= $prenda["precio"] ?> </h3>
    <button class="btn-agregar">Agregar al carrito </button>
</div>
<?php } ?>
</section>

</body>
</html>