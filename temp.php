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