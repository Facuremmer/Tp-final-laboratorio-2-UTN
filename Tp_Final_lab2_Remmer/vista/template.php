<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Concesionaria 2.0</title>
</head>
<body>

    <?php
        include_once "barraDeNavegacion.php";
    ?>


    <!-- Contenedor donde muestro el contenido de las diferentes paginas -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    //A partir del metodo obtener paginas del controlador voy cambiando la pagina
                    $controlador = new ControladorPaginas();
                    $controlador -> paginaActual();
                ?>
            </div>
        </div>
    </div>

</body>
</html>