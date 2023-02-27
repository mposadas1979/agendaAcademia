<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/jpg" href="public/img/handsome.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contactos Agenda</title>
    <?php require_once "dependencias.php"; ?>
</head>
<body>
    <div class="container">
        <?php require_once "menu.php"; ?>

        <div class="jumbotron">
            <h1 class="display-4">Contactos</h1>
            <button class="btn btn-primary">
                <spam class="fa-solid fa-user-plus"></spam>Agregar Contacto
            </button>
            <hr class="my-4">

            <div id="cargaTablaContactos"></div>
        </div>


    </div>
    
    <script src="public/js/contactos.js"></script>
</body>
</html>