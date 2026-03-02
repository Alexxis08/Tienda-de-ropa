<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesWeb.css">
    <title>Tienda</title>
</head>
<body>
<?php include_once "prendas.php" ?>



<body>
  <div class="layout">
    <header>Encabezado

    <h1><br>Tienda de ropa: <br></h1>

    <h4>Listado de ropa.....</h4>
    </header>

    <main>

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
    </main>

    <aside>Extras</aside>

    <footer class="footer">
    <div class="footer-container">    
      

    <div class="footer-bottom">
    <h3>MiProyecto</h3>
    <p>Desarrollando una tienda de ropa con PHP</p>
    <br>
    <p>© 2026 MiProyecto. Todos los derechos reservados</p>
    <ul>
        <li>Gloribel Cuevas</li>
        <li>Camila Sanchez</li>
    </ul>
    </div>
</div>
    </footer>
  </div>
</body>



</body>
</html>