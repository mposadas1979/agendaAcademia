<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/jpg" href="public/img/handsome.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Categoria Contactos</title>
    <?php require_once "dependencias.php"; ?>
</head>
<body>
    <div class="container">
        <?php require_once "menu.php"; ?>

        <div class="jumbotron">
            <h1 class="display-4">Categorias</h1>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
                <span class="fa-solid fa-book"></span>Agregar Categoria
            </button>

            <hr class="my-4">

            <div id="cargaTablaCategorias"></div>
        </div>

        <?php  require_once "vistas/categorias/modalAgregar.php"; ?>

    </div>
    
    <script src="public/js/categorias.js"></script>
</body>
</html>