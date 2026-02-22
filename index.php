<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tienda</title>
</head>
<body>
<?php 
    $prendas = [
        [
        "nombre" => "Playera Guess",
        "marca" => "Guess",
        "descripcion" => "Playera para cualquier ocacion",
        "imagen" => "./Assets/recurso.jpeg",
        "precio" => "350",
        ],
        [
        "nombre" => "Playera Tommy",
        "marca" => "Tommy",
        "descripcion" => "Playera para cualquier ocacion",
        "imagen" => "./Assets/recurso.jpeg",
        "precio" => "450",
        ],
        [
        "nombre" => "Playera XD",
        "marca" => "No se",
        "descripcion" => "Playera para cualquier ocacion",
        "imagen" => "./Assets/recurso.jpeg",
        "precio" => "150",
        ],
        [
        "nombre" => "Short",
        "marca" => "Guess",
        "descripcion" => "Short para cualquier ocacion",
        "imagen" => "./Assets/recurso.jpeg",
        "precio" => "300",
        ],
        [
        "nombre" => "Mini falda cachonda",
        "marca" => "Path",
        "descripcion" => "Playera para cualquier ocacion",
        "imagen" => "./Assets/recurso.jpeg",
        "precio" => "500",
        ],
        [
        "nombre" => "Sueter Hugo",
        "marca" => "Hugo Boss",
        "descripcion" => "Playera para cualquier ocacion",
        "imagen" => "./Assets/recurso.jpeg",
        "precio" => "750",
        ],
    ]
?>

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